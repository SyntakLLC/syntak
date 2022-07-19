<script setup>
    import { Link } from '@inertiajs/inertia-vue3';
    import ApplicationLogoVue from './ApplicationLogo.vue';
</script>

<template>
    <Link :href="'/'">
        <ApplicationLogoVue />
    </Link>
</template>
