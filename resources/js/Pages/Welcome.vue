<script setup>
import { Head, Link } from '@inertiajs/inertia-vue3';
import Gradient from "@/Components/gradient/Gradient.vue";

defineProps({
    canLogin: Boolean,
    canRegister: Boolean,
    laravelVersion: String,
    phpVersion: String,
});
</script>

<template>
    <Head title="Welcome" />

    <div class="min-h-screen w-screen flex items-center justify-center">

        <h1 class="relative max-w-sm flex text-center pt-2 pb-6 px-6">
            <Gradient class="block absolute -inset-1 -skew-y-3"/>
            <span class="mx-auto z-50 relative text-white font-display font-bold text-8xl">Syntak</span>
        </h1>
    </div>
</template>
