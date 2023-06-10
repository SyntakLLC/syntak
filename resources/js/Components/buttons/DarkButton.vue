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
        class="group inline-flex items-center px-4 py-1 bg-[#22223e] border border-color-dark rounded-full font-semibold text-md text-gray-100 hover:bg-gray-700 hover:shadow-lg active:bg-gray-800 active:scale-[0.98] focus:outline-none focus:border-brand-800 focus:ring focus:ring-brand-800 disabled:opacity-25 transition-all duration-75">
        <slot />

        <span class="pl-2">
            <slot name="icon" />
        </span>

        <HoverArrow v-if="!$slots.icon" color="primary"/>
    </button>
</template>
