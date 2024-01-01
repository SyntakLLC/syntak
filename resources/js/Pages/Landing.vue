<template>
    <AppLayout>
        <!--
         Should explain who we are.
         An agency that builds web applications for other businesses, and has our own products.
         The second part is purely for the legitimacy.
         -->
        <Hero />

        <NotedlyDisplay />

        <Testimonial />

    </AppLayout>
</template>

<script>
import { Head, Link } from '@inertiajs/vue3';
import AppLayout from "@/Layouts/AppLayout.vue";
import Hero from "@/Partials/Landing/Hero.vue";
import NotedlyDisplay from "@/Partials/Landing/NotedlyDisplay.vue";
import Testimonial from "@/Partials/Landing/Testimonial.vue";

export default {
    name: "Landing",

    components: {
        Testimonial,
        NotedlyDisplay,
        Hero,
        Head,
        Link,
        AppLayout
    }
}
</script>
