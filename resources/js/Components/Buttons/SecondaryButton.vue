<script setup>
import BaseButton from "@/Components/Buttons/BaseButton.vue"

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
                    'bg-white border border-transparent text-slate-900 hover:bg-slate-200 hover:shadow-lg active:bg-slate-300',
                ]">
        <slot/>
    </BaseButton>
</template>
