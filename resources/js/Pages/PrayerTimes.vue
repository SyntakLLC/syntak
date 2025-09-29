<template>
    <div
        class="flex relative justify-center items-center p-4 min-h-screen bg-gradient-to-b from-gray-900 to-gray-800"
    >
        <Stars />
        <!-- Main Container -->
        <div class="flex flex-col py-12 space-y-8 w-full max-w-4xl">
            <!-- Header -->
            <div class="mb-8 text-center">
                <h1
                    class="mb-4 text-3xl font-normal tracking-tight text-white md:text-6xl"
                >
                    Prayer Times
                </h1>
                <p class="mb-2 text-lg text-white/80">
                    {{ locationInfo }}
                </p>
                <p class="text-sm text-white/60">
                    {{ formattedDate }}
                </p>
            </div>

            <!-- Prayer Times Pie Chart -->
            <div class="mb-8">
                <PrayerPieChart :prayer-times="prayerTimes" />
            </div>
        </div>
    </div>
</template>

<script>
import AppLayout from "@/Layouts/AppLayout.vue";
import PrayerPieChart from "@/Components/PrayerPieChart.vue";
import { ref, computed, onMounted, onUnmounted } from "vue";
import Stars from "@/Components/Decoration/Stars.vue";

export default {
    name: "PrayerTimes",
    components: {
        AppLayout,
        PrayerPieChart,
        Stars,
    },
    props: {
        location: Object,
        prayerTimes: Array,
    },
    setup(props) {
        const selectedPrayer = ref(null);
        const currentTime = ref("");
        let timeInterval = null;

        const updateCurrentTime = () => {
            const now = new Date();
            currentTime.value = now.toLocaleTimeString("en-US", {
                hour: "numeric",
                minute: "2-digit",
                hour12: true,
            });
        };

        const formattedDate = computed(() => {
            return new Date().toLocaleDateString("en-US", {
                year: "numeric",
                month: "long",
                day: "numeric",
            });
        });

        const locationInfo = computed(() => {
            if (props.location) {
                return `${props.location.city}, ${props.location.country}`;
            }
            return "Location not available";
        });

        // Get current prayer period
        const currentPrayerPeriod = computed(() => {
            if (!props.prayerTimes || props.prayerTimes.length === 0)
                return "Loading...";

            const now = new Date();
            const currentMinutes = now.getHours() * 60 + now.getMinutes();

            // Find which prayer period we're in
            for (let i = 0; i < props.prayerTimes.length; i++) {
                const current = props.prayerTimes[i];
                const next =
                    props.prayerTimes[(i + 1) % props.prayerTimes.length];

                if (
                    current.totalMinutes <= currentMinutes &&
                    (next.totalMinutes > currentMinutes ||
                        next.totalMinutes < current.totalMinutes)
                ) {
                    return current.name + " Time";
                }
            }

            return props.prayerTimes[0].name + " Time";
        });

        // Format time to 12-hour format
        const formatTime12Hour = (timeString) => {
            const [hours, minutes] = timeString.split(":");
            const hour = parseInt(hours, 10);
            const ampm = hour >= 12 ? "PM" : "AM";
            const hour12 = hour % 12 || 12;
            return `${hour12}:${minutes} ${ampm}`;
        };

        // Calculate duration between two times
        const calculateDuration = (startMinutes, endMinutes) => {
            const duration = endMinutes - startMinutes;
            const hours = Math.floor(duration / 60);
            const minutes = duration % 60;

            if (hours > 0) {
                return `${hours}h ${minutes}m`;
            } else {
                return `${minutes}m`;
            }
        };

        // Create prayer segments for table display
        const prayerSegments = computed(() => {
            if (!props.prayerTimes || props.prayerTimes.length === 0) return [];

            // Sort prayer times chronologically
            const sortedPrayers = [...props.prayerTimes].sort(
                (a, b) => a.totalMinutes - b.totalMinutes
            );

            // Return simple segments with prayer data
            return sortedPrayers.map((prayer) => ({
                prayer: prayer,
            }));
        });

        const selectPrayer = (prayer) => {
            selectedPrayer.value = prayer;
        };

        onMounted(() => {
            updateCurrentTime();
            timeInterval = setInterval(updateCurrentTime, 1000);
        });

        onUnmounted(() => {
            if (timeInterval) {
                clearInterval(timeInterval);
            }
        });

        return {
            selectedPrayer,
            currentTime,
            formattedDate,
            locationInfo,
            currentPrayerPeriod,
            selectPrayer,
            formatTime12Hour,
            calculateDuration,
            prayerSegments,
        };
    },
};
</script>
