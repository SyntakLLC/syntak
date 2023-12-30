<script setup>
import Spinner from "@/Components/Progress/Spinner";

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
            'text-center font-display font-bold inline-flex items-center px-6 py-2 rounded-full shadow font-semibold text-base tracking-normal'
        ]">
        <Spinner v-if="loading"/>
        <slot/>
    </button>
</template>
