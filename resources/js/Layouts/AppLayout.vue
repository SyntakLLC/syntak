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
    <div class="w-screen h-4" />

    <!-- TODO - Fill in main content here -->
    <div
        id="content"
        class="relative min-h-screen bg-primary rounded-t-3xl w-screen overflow-hidden transition shadow-[0_-4px_6px_-1px_rgba(0,0,0,0.1)]"
    >
        <div id="menu-button-location" class="absolute top-8 right-8 z-50">
            <PrimaryButton @click="open = !open">
                {{ open ? "Close" : "Menu" }}
                <XMarkIcon v-if="open" class="-ml-1 w-4 h-4" />
                <Bars3Icon v-else class="w-4 h-4" />
            </PrimaryButton>
        </div>

        <slot />
    </div>
</template>

<script>
import { Head, Link } from "@inertiajs/vue3";
import { Bars3Icon, XMarkIcon } from "@heroicons/vue/20/solid";
import NavigationBar from "@/Partials/NavigationBar.vue";
import PrimaryButton from "@/Components/Buttons/PrimaryButton.vue";

export default {
    name: "Landing",

    components: {
        Bars3Icon,
        XMarkIcon,
        PrimaryButton,
        NavigationBar,
        Head,
        Link,
    },

    props: {
        title: {
            type: String,
            default: "Startup Websites",
        },
    },

    data() {
        return {
            open: false,
        };
    },
};
</script>
