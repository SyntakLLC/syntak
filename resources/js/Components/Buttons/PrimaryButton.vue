<script setup>
import BaseButton from "@/Components/Buttons/BaseButton.vue";

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
                'text-gray-100 hover:bg-gray-700 bg-[#22223e] border border-color active:bg-gray-800'
            ]">
        <slot/>
    </BaseButton>
</template>
