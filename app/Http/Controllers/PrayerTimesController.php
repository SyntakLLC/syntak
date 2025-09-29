<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Inertia\Inertia;

class PrayerTimesController extends Controller
{
    public function __invoke(Request $request)
    {
        $locationMethod = config('prayer.location_method');
        $location = null;
        $prayerTimes = null;

        try {
            if ($locationMethod === 'ip') {
                $location = $this->getLocationByIP($request);
            }

            if ($location) {
                $prayerTimes = $this->getPrayerTimes($location['lat'], $location['lon']);
            }
        } catch (\Exception $e) {
            // Use fallback location if detection fails
            $fallback = config('prayer.fallback_location');
            $location = [
                'lat' => $fallback['latitude'],
                'lon' => $fallback['longitude'],
                'city' => $fallback['city'],
                'country' => $fallback['country'],
            ];
            $prayerTimes = $this->getPrayerTimes($location['lat'], $location['lon']);
        }

        return Inertia::render('PrayerTimes', [
            'location' => $location,
            'prayerTimes' => $prayerTimes,
            'locationMethod' => $locationMethod,
            'config' => [
                'prayer_api' => config('prayer.api'),
                'fallback_location' => config('prayer.fallback_location'),
            ],
        ]);
    }

    private function getLocationByIP(Request $request)
    {
        $ip = $request->ip();

        // Skip local IPs in development
        if ($ip === '127.0.0.1' || $ip === '::1' || str_starts_with($ip, '192.168.')) {
            throw new \Exception('Local IP detected');
        }

        $response = Http::get(config('prayer.ip_service.url').$ip, [
            'fields' => config('prayer.ip_service.fields'),
        ]);

        if ($response->successful()) {
            $data = $response->json();

            if ($data['status'] === 'success') {
                return [
                    'lat' => $data['lat'],
                    'lon' => $data['lon'],
                    'city' => $data['city'],
                    'country' => $data['country'],
                    'timezone' => $data['timezone'] ?? null,
                ];
            }
        }

        throw new \Exception('IP geolocation failed');
    }

    private function getPrayerTimes($latitude, $longitude)
    {
        $config = config('prayer.api');
        $today = now()->format('d-m-Y');

        $response = Http::get("{$config['base_url']}/timings/{$today}", [
            'latitude' => $latitude,
            'longitude' => $longitude,
            'method' => $config['method'],
            'school' => $config['school'],
        ]);

        if ($response->successful()) {
            $data = $response->json();

            if (isset($data['data']['timings'])) {
                return $this->formatPrayerTimes($data['data']['timings']);
            }
        }

        throw new \Exception('Prayer times API failed');
    }

    private function formatPrayerTimes($timings)
    {
        // Get the main 5 prayers + sunrise
        $prayers = [
            'Fajr' => $timings['Fajr'],
            'Sunrise' => $timings['Sunrise'],
            'Dhuhr' => $timings['Dhuhr'],
            'Asr' => $timings['Asr'],
            'Maghrib' => $timings['Maghrib'],
            'Isha' => $timings['Isha'],
        ];

        // Convert times and add data for the circular display
        $formatted = [];
        foreach ($prayers as $name => $time) {
            // Parse time
            $timestamp = strtotime($time);
            $hours = (int) date('H', $timestamp);
            $minutes = (int) date('i', $timestamp);

            // Convert to 12-hour format for angle calculation
            $hour12 = $hours % 12;
            $totalMinutes12h = $hour12 * 60 + $minutes;

            // Calculate angle for 12-hour clock (12 o'clock = 0 degrees, clockwise)
            $angle = ($totalMinutes12h / 720) * 360; // 720 minutes in 12 hours

            $formatted[] = [
                'name' => $name,
                'time' => $time,
                'time_24h' => date('H:i', $timestamp),
                'angle' => $angle,
                'totalMinutes' => $hours * 60 + $minutes, // Keep 24h total for sorting
                'isPrayer' => $name !== 'Sunrise', // Sunrise is not a prayer time
            ];
        }

        // Sort by 24-hour time to ensure proper chronological order
        usort($formatted, function ($a, $b) {
            return $a['totalMinutes'] <=> $b['totalMinutes'];
        });

        return $formatted;
    }

    /**
     * API endpoint for frontend geolocation
     */
    public function getPrayerTimesByLocation(Request $request)
    {
        $request->validate([
            'latitude' => 'required|numeric',
            'longitude' => 'required|numeric',
        ]);

        try {
            $prayerTimes = $this->getPrayerTimes(
                $request->latitude,
                $request->longitude
            );

            return response()->json([
                'success' => true,
                'prayerTimes' => $prayerTimes,
                'location' => [
                    'lat' => $request->latitude,
                    'lon' => $request->longitude,
                ],
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'error' => 'Failed to fetch prayer times',
            ], 500);
        }
    }
}
