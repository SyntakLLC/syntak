<template>
    <div class="prayer-pie-chart-container">
        <div class="relative">
            <Doughnut
                :data="chartData"
                :options="chartOptions"
                :style="{ maxHeight: '400px' }"
                @click="handleChartClick"
                ref="chartRef"
            />
            <!-- Center label showing current time period -->
            <div
                class="flex absolute inset-0 justify-center items-center pointer-events-none"
            >
                <div class="text-center">
                    <div class="text-2xl font-bold text-white">
                        {{ currentTime }}
                    </div>
                    <div class="text-sm text-white/70">
                        {{ currentPrayerPeriod }}
                    </div>
                </div>
            </div>
        </div>

        <!-- Mobile Drawer -->
        <PrayerDetailsDrawer
            :show="showDrawer"
            :prayer-data="selectedPrayerData"
            @close="closeDrawer"
        />
    </div>
</template>

<script>
import { Doughnut } from "vue-chartjs";
import { computed, ref, onMounted, onUnmounted } from "vue";
import { Chart as ChartJS, ArcElement, Tooltip, Legend } from "chart.js";
import PrayerDetailsDrawer from "./Modals/PrayerDetailsDrawer.vue";

ChartJS.register(ArcElement, Tooltip, Legend);

export default {
    name: "PrayerPieChart",
    components: {
        Doughnut,
        PrayerDetailsDrawer,
    },
    props: {
        prayerTimes: {
            type: Array,
            required: true,
        },
    },
    setup(props) {
        // Mobile detection
        const isMobile = ref(false);
        const checkMobile = () => {
            isMobile.value =
                window.innerWidth < 768 || "ontouchstart" in window;
        };

        onMounted(() => {
            checkMobile();
            window.addEventListener("resize", checkMobile);
        });

        onUnmounted(() => {
            window.removeEventListener("resize", checkMobile);
        });

        // Chart reference for click handling
        const chartRef = ref(null);

        // Drawer state
        const showDrawer = ref(false);
        const selectedPrayerData = ref(null);

        const closeDrawer = () => {
            showDrawer.value = false;
            selectedPrayerData.value = null;
        };

        const handleChartClick = (event) => {
            if (!isMobile.value) return; // Only handle clicks on mobile

            const chart = chartRef.value?.chart;
            if (!chart) return;

            const points = chart.getElementsAtEventForMode(
                event,
                "nearest",
                { intersect: true },
                true
            );

            if (points.length > 0) {
                const point = points[0];
                const segments = calculateSegmentData();
                const segment = segments[point.index];

                if (segment) {
                    selectedPrayerData.value = segment;
                    showDrawer.value = true;
                }
            }
        };
        const currentTime = computed(() => {
            const now = new Date();
            return now.toLocaleTimeString("en-US", {
                hour: "numeric",
                minute: "2-digit",
                hour12: true,
            });
        });

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

        // Helper function to format minutes to time string
        const formatTimeFromMinutes = (totalMinutes) => {
            const hours = Math.floor(totalMinutes / 60) % 24;
            const minutes = totalMinutes % 60;
            const period = hours >= 12 ? "PM" : "AM";
            const displayHours = hours % 12 || 12;
            return `${displayHours}:${minutes
                .toString()
                .padStart(2, "0")} ${period}`;
        };

        // Calculate durations for pie chart segments
        const calculateSegmentData = () => {
            if (!props.prayerTimes || props.prayerTimes.length === 0) return [];

            const segments = [];
            const totalMinutes = 24 * 60; // 1440 minutes in a day
            const now = new Date();
            const currentMinutes = now.getHours() * 60 + now.getMinutes();

            // Find current prayer period
            let currentPrayerIndex = 0;
            for (let i = 0; i < props.prayerTimes.length; i++) {
                const current = props.prayerTimes[i];
                const next =
                    props.prayerTimes[(i + 1) % props.prayerTimes.length];

                if (
                    current.totalMinutes <= currentMinutes &&
                    (next.totalMinutes > currentMinutes ||
                        next.totalMinutes < current.totalMinutes)
                ) {
                    currentPrayerIndex = i;
                    break;
                }
            }

            // Calculate duration between each prayer time
            for (let i = 0; i < props.prayerTimes.length; i++) {
                const current = props.prayerTimes[i];
                const next =
                    props.prayerTimes[(i + 1) % props.prayerTimes.length];

                let startMinutes = current.totalMinutes;
                let endMinutes;
                let duration;

                if (i === props.prayerTimes.length - 1) {
                    // Last prayer to first prayer of next day
                    endMinutes = totalMinutes + next.totalMinutes;
                    duration = endMinutes - startMinutes;
                } else {
                    endMinutes = next.totalMinutes;
                    duration = endMinutes - startMinutes;
                }

                // Ensure minimum duration for visibility
                duration = Math.max(duration, 5);

                // Determine if this is the current prayer period
                const isCurrentPeriod = i === currentPrayerIndex;

                segments.push({
                    label: current.name,
                    value: duration,
                    startMinutes: startMinutes,
                    endMinutes: endMinutes,
                    backgroundColor: isCurrentPeriod
                        ? "#10B981"
                        : "transparent", // Emerald for current, gray-800 for others
                    borderColor: isCurrentPeriod ? "#10B981" : "#374151", // Match border to background color
                    borderWidth: isCurrentPeriod ? 4 : 2, // Thicker border for current period
                    isPrayer: current.isPrayer,
                    isCurrentPeriod: isCurrentPeriod,
                });
            }

            return segments;
        };

        const chartData = computed(() => {
            const segments = calculateSegmentData();
            return {
                datasets: [
                    {
                        data: segments.map((segment) => segment.value),
                        backgroundColor: segments.map(
                            (segment) => segment.backgroundColor
                        ),
                        borderColor: segments.map(
                            (segment) => segment.borderColor
                        ),
                        borderWidth: segments.map(
                            (segment) => segment.borderWidth
                        ),
                        labels: segments.map((segment) => segment.label),
                    },
                ],
            };
        });

        const chartOptions = computed(() => {
            return {
                responsive: true,
                maintainAspectRatio: true,
                plugins: {
                    legend: {
                        display: false, // We'll show our own legend
                    },
                    tooltip: {
                        enabled: !isMobile.value, // Disable tooltips on mobile
                        callbacks: {
                            label: function (context) {
                                const segments = calculateSegmentData();
                                const segment = segments[context.dataIndex];

                                // Calculate start and end times for this segment
                                const startTime = formatTimeFromMinutes(
                                    segment.startMinutes
                                );
                                const endTime = formatTimeFromMinutes(
                                    segment.endMinutes
                                );

                                const periodType = segment.isCurrentPeriod
                                    ? " (Current)"
                                    : "";
                                return `${segment.label}${periodType}: ${startTime} - ${endTime}`;
                            },
                        },
                    },
                },
                rotation: 90, // Fixed rotation: puts 12 o'clock (midnight) at the top
                circumference: 360,
                onClick: handleChartClick, // Handle clicks on chart
            };
        });

        return {
            currentTime,
            currentPrayerPeriod,
            chartData,
            chartOptions,
            showDrawer,
            selectedPrayerData,
            closeDrawer,
            chartRef,
            handleChartClick,
        };
    },
};
</script>

<style scoped>
.prayer-pie-chart-container {
    @apply w-full max-w-md mx-auto;
}
</style>
