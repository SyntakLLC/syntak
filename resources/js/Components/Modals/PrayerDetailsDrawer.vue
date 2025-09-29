<script setup>
import { computed, onMounted, onUnmounted, watch } from "vue";

const props = defineProps({
    show: {
        type: Boolean,
        default: false,
    },
    prayerData: {
        type: Object,
        default: null,
    },
    closeable: {
        type: Boolean,
        default: true,
    },
});

const emit = defineEmits(["close"]);

watch(
    () => props.show,
    () => {
        if (props.show) {
            document.body.style.overflow = "hidden";
        } else {
            document.body.style.overflow = null;
        }
    }
);

const close = () => {
    if (props.closeable) {
        emit("close");
    }
};

const closeOnEscape = (e) => {
    if (e.key === "Escape" && props.show) {
        close();
    }
};

onMounted(() => document.addEventListener("keydown", closeOnEscape));

onUnmounted(() => {
    document.removeEventListener("keydown", closeOnEscape);
    document.body.style.overflow = null;
});

// Helper function to format time from minutes
const formatTimeFromMinutes = (totalMinutes) => {
    const hours = Math.floor(totalMinutes / 60) % 24;
    const minutes = totalMinutes % 60;
    const period = hours >= 12 ? "PM" : "AM";
    const displayHours = hours % 12 || 12;
    return `${displayHours}:${minutes.toString().padStart(2, "0")} ${period}`;
};

const startTime = computed(() => {
    if (!props.prayerData) return "";
    return formatTimeFromMinutes(props.prayerData.startMinutes);
});

const endTime = computed(() => {
    if (!props.prayerData) return "";
    return formatTimeFromMinutes(props.prayerData.endMinutes);
});

const isCurrentPeriod = computed(() => {
    return props.prayerData?.isCurrentPeriod || false;
});
</script>

<template>
    <teleport to="body">
        <transition leave-active-class="duration-200">
            <div
                v-show="show"
                class="overflow-y-auto fixed inset-0 z-50"
                scroll-region
            >
                <!-- Backdrop -->
                <transition
                    enter-active-class="duration-300 ease-out"
                    enter-from-class="opacity-0"
                    enter-to-class="opacity-100"
                    leave-active-class="duration-200 ease-in"
                    leave-from-class="opacity-100"
                    leave-to-class="opacity-0"
                >
                    <div
                        v-show="show"
                        class="fixed inset-0 transition-all transform"
                        @click="close"
                    >
                        <div
                            class="absolute inset-0 bg-gray-500 opacity-50 dark:bg-gray-900"
                        />
                    </div>
                </transition>

                <!-- Drawer Panel -->
                <transition
                    enter-active-class="duration-300 ease-out"
                    enter-from-class="opacity-0 translate-y-full"
                    enter-to-class="opacity-100 translate-y-0"
                    leave-active-class="duration-200 ease-in"
                    leave-from-class="opacity-100 translate-y-0"
                    leave-to-class="opacity-0 translate-y-full"
                >
                    <div
                        v-show="show"
                        class="overflow-y-auto fixed right-0 bottom-0 left-0 max-h-96 bg-white rounded-t-2xl shadow-xl transition-all transform dark:bg-gray-800"
                        @click.stop
                    >
                        <!-- Handle bar -->
                        <div class="flex justify-center pt-3 pb-2">
                            <div
                                class="w-10 h-1 bg-gray-300 rounded-full dark:bg-gray-600"
                            ></div>
                        </div>

                        <!-- Content -->
                        <div class="px-6 pb-6">
                            <div v-if="prayerData" class="text-center">
                                <h3
                                    class="mb-2 text-2xl font-bold text-gray-900 dark:text-white"
                                >
                                    {{ prayerData.label }}
                                </h3>

                                <div
                                    class="flex gap-2 justify-center items-center mb-4"
                                >
                                    <span
                                        class="inline-flex items-center px-3 py-1 text-sm font-medium rounded-full"
                                        :class="
                                            isCurrentPeriod
                                                ? 'bg-emerald-100 text-emerald-800 dark:bg-emerald-900 dark:text-emerald-200'
                                                : 'bg-gray-100 text-gray-800 dark:bg-gray-700 dark:text-gray-200'
                                        "
                                    >
                                        {{
                                            isCurrentPeriod
                                                ? "Current Period"
                                                : "Prayer Time"
                                        }}
                                    </span>
                                </div>

                                <div class="space-y-3">
                                    <div
                                        class="flex justify-between items-center py-2 border-b border-gray-200 dark:border-gray-700"
                                    >
                                        <span
                                            class="text-gray-600 dark:text-gray-400"
                                            >Start Time:</span
                                        >
                                        <span
                                            class="font-medium text-gray-900 dark:text-white"
                                            >{{ startTime }}</span
                                        >
                                    </div>
                                    <div
                                        class="flex justify-between items-center py-2 border-b border-gray-200 dark:border-gray-700"
                                    >
                                        <span
                                            class="text-gray-600 dark:text-gray-400"
                                            >End Time:</span
                                        >
                                        <span
                                            class="font-medium text-gray-900 dark:text-white"
                                            >{{ endTime }}</span
                                        >
                                    </div>
                                    <!-- <div
                                        class="flex justify-between items-center py-2"
                                    >
                                        <span
                                            class="text-gray-600 dark:text-gray-400"
                                            >Duration:</span
                                        >
                                        <span
                                            class="font-medium text-gray-900 dark:text-white"
                                        >
                                            {{
                                                Math.round(prayerData.value)
                                            }}
                                            minutes
                                        </span>
                                    </div> -->
                                </div>

                                <div class="mt-6">
                                    <button
                                        @click="close"
                                        class="px-6 py-3 w-full font-medium text-white bg-gray-900 rounded-lg transition-colors dark:bg-gray-700 hover:bg-gray-800 dark:hover:bg-gray-600"
                                    >
                                        Close
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </transition>
            </div>
        </transition>
    </teleport>
</template>
