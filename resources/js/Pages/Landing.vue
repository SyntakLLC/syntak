<template>
    <AppLayout>
        <!--
         Should explain who we are.
         An agency that builds web applications for other businesses, and has our own products.
         The second part is purely for the legitimacy.
         -->
        <Hero />

        <!-- <div class="relative w-screen overflow-hidden py-8">
            <ProjectCarousel />
        </div> -->

        <NotedlyDisplay />

        <Testimonial />

        <CallToAction />

        <Footer />
    </AppLayout>
</template>

<script>
import { Head, Link } from "@inertiajs/vue3";
import AppLayout from "@/Layouts/AppLayout.vue";
import Hero from "@/Partials/Landing/Hero.vue";
import NotedlyDisplay from "@/Partials/Landing/NotedlyDisplay.vue";
import Testimonial from "@/Partials/Landing/Testimonial.vue";
import CallToAction from "@/Partials/Landing/CallToAction.vue";
import Footer from "@/Partials/Footer.vue";
import ProjectCarousel from "@/Partials/Landing/ProjectCarousel.vue";

export default {
    name: "Landing",

    components: {
        Footer,
        CallToAction,
        Testimonial,
        NotedlyDisplay,
        Hero,
        ProjectCarousel,
        Head,
        Link,
        AppLayout,
    },
};
</script>
