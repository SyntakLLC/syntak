<template>
    <AppLayout>
        <!--
         Should explain who we are.
         An agency that builds web applications for other businesses, and has our own products.
         The second part is purely for the legitimacy.
         -->
    </AppLayout>
</template>

<script>
import { Head, Link } from '@inertiajs/vue3';
import AppLayout from "@/Layouts/AppLayout.vue";

export default {
    name: "Landing",

    components: {
        Head,
        Link,
        AppLayout
    }
}
</script>
