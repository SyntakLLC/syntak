<script setup>
import BaseButton from "@/Components/Buttons/BaseButton";

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
    <BaseButton :type="type"
                :disabled="disabled"
                :loading="loading"
                :class="[
                disabled || loading ? 'cursor-not-allowed border-b-2 border-gray-300 bg-gray-400 hover:bg-gray-400 active:bg-gray-400' : 'cursor-pointer',
                'primary-clickable flex justify-center text-white'
            ]">
        <slot/>
    </BaseButton>
</template>
