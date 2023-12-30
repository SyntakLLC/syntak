<script setup>
import BaseButton from "@/Components/Buttons/BaseButton.vue";

defineProps({
    type: {
        type: String,
        default: 'button',
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
    <BaseButton :loading="loading"
                :class="[
                    disabled || loading ? 'cursor-not-allowed border-b-2 border-gray-600 bg-gray-400 hover:bg-gray-400 active:bg-gray-400' : 'cursor-pointer',
                    'border-b-2 border-red-800 bg-red-600 active:bg-red-700 focus:bg-red-700 text-white focus:outline-none focus:ring-2 focus:ring-red-700 focus:ring-offset-2'
                ]">
        <slot />
    </BaseButton>
</template>
