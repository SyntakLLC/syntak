<template>
    <Head>
        <title>{{ title }}</title>
    </Head>

    <!--
     The AppLayout is organized as such:
       - NavigationBar
       - Content
       - Footer
     -->

    <div class="absolute inset-x-0">
        <NavigationBar :open="open" />
    </div>

    <!--
     This element acts as a spacer so that we can see a portion of the navbar
     glowing even while closed.
     -->
    <div class="w-screen h-4"/>

    <!-- TODO - Fill in main content here -->
    <div id="content" class="bg-primary rounded-t-2xl w-screen h-screen transition-all">
        <button @click="open = !open" class="text-white">click me </button>
    </div>
</template>

<script>
import { Head, Link } from '@inertiajs/vue3';
import NavigationBar from "@/Partials/NavigationBar.vue";

export default {
    name: "Landing",

    components: {
        NavigationBar,
        Head,
        Link
    },

    props: {
        title: {
            type: String,
            default: "Startup Websites"
        }
    },

    data() {
        return {
            open: false,
        }
    }
}
</script>
