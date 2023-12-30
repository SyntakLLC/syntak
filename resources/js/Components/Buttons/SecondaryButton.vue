<script setup>
import BaseButton from "@/Components/Buttons/BaseButton"

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
                :disabled="disabled"
                :class="[
                    disabled || loading ?
                    'cursor-not-allowed border border-gray-400 text-gray-400 hover:bg-transparent active:bg-transparent' :
                    'text-center flex justify-center cursor-pointer bg-gray-100 border border-gray-200 active:bg-gray-200 text-gray-800 focus:outline-none focus:ring-2 focus:ring-brand-600 focus:ring-offset-2',
                ]">
        <slot/>
    </BaseButton>
</template>
