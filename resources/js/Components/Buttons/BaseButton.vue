<script setup>
import Spinner from "@/Components/Progress/Spinner.vue";

defineProps({
    type: {
        type: String,
        default: 'submit',
    },
    loading: {
        type: Boolean,
        default: false,
    },
    disabled: {
        type: Boolean,
        default: false,
    }
});
</script>

<template>
    <button :type="type" :disabled="disabled || loading" :class="[
            'group inline-flex items-center px-4 py-1 gap-2 rounded-full font-semibold text-md hover:shadow-lg active:scale-[0.98] focus:outline-none focus:border-brand-800 focus:ring focus:ring-brand-800 disabled:opacity-25 transition-all duration-75'
        ]">
        <Spinner v-if="loading"/>
        <slot/>
    </button>
</template>
