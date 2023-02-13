<script setup>
    import HoverArrow from "@/Components/garnish/HoverArrow";

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
        class="group inline-flex items-center px-4 py-1 bg-white border border-transparent rounded-full font-semibold text-md text-slate-900 hover:bg-slate-200 hover:shadow-lg active:bg-slate-300 active:scale-[0.98] focus:outline-none focus:border-brand-800 focus:ring focus:ring-brand-800 disabled:opacity-25 transition-all duration-75">
        <slot />
        <HoverArrow color="primary"/>
    </button>
</template>
