<template>
    <Head>
        <title>{{ title }}</title>
    </Head>
    <div class="min-h-screen bg-background text-foreground">
        <div class="mx-auto md:max-w-3xl">
            <slot />
        </div>
    </div>
</template>

<script>
import { Head, Link } from "@inertiajs/vue3";
import { Bars3Icon, XMarkIcon } from "@heroicons/vue/20/solid";
import NavigationBar from "@/Partials/NavigationBar.vue";
import PrimaryButton from "@/Components/Buttons/PrimaryButton.vue";

export default {
    name: "AppLayout",

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
