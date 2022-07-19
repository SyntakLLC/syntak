<script setup>
    defineProps({
        type: {
            type: String,
            default: 'submit',
        },
    });
</script>

<template>
    <button
        :type="type"
        class="inline-flex items-center px-4 py-2 bg-brand-500 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-brand-700 active:bg-brand-800 focus:outline-none focus:border-brand-800 focus:ring focus:ring-brand-300 disabled:opacity-25 transition">
        <slot />
    </button>
</template>
