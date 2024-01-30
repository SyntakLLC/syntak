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

        <CallToAction />

        <Footer />

    </AppLayout>
</template>

<script>
import { Head, Link } from '@inertiajs/vue3';
import AppLayout from "@/Layouts/AppLayout.vue";
import Hero from "@/Partials/Landing/Hero.vue";
import NotedlyDisplay from "@/Partials/Landing/NotedlyDisplay.vue";
import Testimonial from "@/Partials/Landing/Testimonial.vue";
import CallToAction from "@/Partials/Landing/CallToAction.vue";
import Footer from "@/Partials/Footer.vue";

export default {
    name: "Landing",

    components: {
        Footer,
        CallToAction,
        Testimonial,
        NotedlyDisplay,
        Hero,
        Head,
        Link,
        AppLayout
    }
}
</script>
