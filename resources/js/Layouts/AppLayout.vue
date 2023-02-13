<template>

    <Head>
        <title>Our Work</title>
    </Head>

    <div class="bg-[#090f1a] w-screen h-screen">

        <!-- Space theme -->
        <Meteors v-if="route().current() === 'welcome'" />

        <div class="fixed w-screen top-[60%]">
            <Stars class="absolute w-screen bottom-1/2 opacity-50"/>
        </div>
        <div class="fixed w-[200vw] aspect-square blur-[50px] top-2/3 -left-full">
            <div class="w-[200vw] absolute aspect-square rounded-full bg-white glow-purple"/>
        </div>
        <div class="fixed w-[200vw] aspect-square blur-[200px] top-2/3 -left-full">
            <div class="w-[200vw] absolute aspect-square rounded-full bg-transparent glow-purple"/>
        </div>
        <div class="fixed w-[200vw] aspect-square blur-[20px] top-2/3 -left-full">
            <div class="w-[200vw] absolute aspect-square rounded-full glow-blue"/>
        </div>
        <!-- End of Space theme -->


        <!-- Logo -->
        <Link :href="route('welcome')"
              class="absolute m-10 max-w-[12rem] -skew-y-6 flex text-center pt-0 pb-3 px-3">
            <Gradient class="block absolute -inset-1"/>
            <span class="mx-auto z-50 relative text-white font-display font-bold text-3xl">Syntak</span>
        </Link>
        <!-- End of Logo -->


        <!-- Main content -->
        <main class="mx-auto max-w-xl px-8 pt-8 md:pt-0 top-20 relative flex flex-col space-y-8">
            <slot />
        </main>
        <!-- End of Main content -->
    </div>
</template>

<style lang="css">
.glow-purple {
    box-shadow: 0 0 100px rgba(155,0,255, 1);
}
.glow-blue {
    box-shadow: 0 0 100px rgba(0,50,255, 1);
}
</style>

<script>
import { Head, Link } from '@inertiajs/inertia-vue3';
import Gradient from "@/Components/gradient/Gradient.vue";
import Button from "@/Components/buttons/Button";
import {ChevronRightIcon, ArrowRightIcon} from "@heroicons/vue/solid"
import SecondaryLink from "@/Components/buttons/SecondaryLink";
import Meteors from "@/Components/garnish/Meteors";
import ApplicationLogo from "@/Jetstream/ApplicationLogo";
import Stars from "@/Components/garnish/Stars";
import HoverArrow from "@/Components/garnish/HoverArrow";

export default {
    name: 'AppLayout',

    components: {
        HoverArrow,
        Stars,
        ApplicationLogo,
        Meteors,
        SecondaryLink,
        Head, Link,
        Gradient,
        Button,
        ChevronRightIcon, ArrowRightIcon,
    },
}
</script>
