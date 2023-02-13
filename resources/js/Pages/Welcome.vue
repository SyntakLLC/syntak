<template>
    <Head>
        <title>Startup Websites</title>
    </Head>

    <AppLayout>
            <p class="text-lg text-white">Hi! I'm Amaan. I build...</p>

            <h1 class="text-6xl text-white font-semibold tracking-tight"
                style="
                    background: radial-gradient(#a5e0f1, #6d61ed);
                    -webkit-background-clip: text;
                    -webkit-text-fill-color: transparent;
                ">
                Startup websites that are out of this world.
            </h1>

            <div class="flex pt-2 space-x-4 items-center">
                <Button @click="openCalendlyModal">Contact Us</Button>

                <button class="group flex items-center">
                    <Link :href="route('project.index')"
                        class="mb-2 text-secondary text-white group-hover:text-slate-200 font-semibold opacity-70">
                        Our work
                    </Link>
                    <HoverArrow/>
                </button>
            </div>
    </AppLayout>
</template>

<script>
import { Head, Link } from '@inertiajs/inertia-vue3';
import Button from "@/Components/buttons/Button";
import SecondaryLink from "@/Components/buttons/SecondaryLink";
import HoverArrow from "@/Components/garnish/HoverArrow";
import AppLayout from "@/Layouts/AppLayout";

export default {
    name: 'Welcome',

    components: {
        AppLayout,
        HoverArrow,
        SecondaryLink,
        Head, Link,
        Button,
    },

    methods: {
        openCalendlyModal() {
            Calendly.initPopupWidget({url: 'https://calendly.com/syntak/interested-in-a-website-or-app'});
            return false;
        }
    }
}
</script>
