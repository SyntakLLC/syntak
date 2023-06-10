<template>
    <Head>
        <title>Startup Websites</title>
    </Head>

    <div id="nav-backdrop" class="pt-4 shadow-inner" style="background: radial-gradient(#f2fbff, #7dd3fb, #6d61ed);">
        <div id="hero" :class="[isMenuOpen ? 'top-48' : 'top-0', 'relative bg-dark-primary rounded-t-3xl min-h-screen transition-all']">

            <div id="menu-button-location" class="absolute top-8 right-8 z-50">
                <DarkButton @click="toggleMenu">
                    {{ isMenuOpen ? 'Close' : 'Menu' }}
                    <template #icon>
                        <XIcon v-if="isMenuOpen" class="-ml-1 w-4 h-4" />
                        <MenuIcon v-else class="w-4 h-4"/>
                    </template>
                </DarkButton>
            </div>

            <div id="horizontal-bars" class="absolute mt-48 border-y border-color-dark w-full h-64" />

            <div id="hero-center" class="relative max-w-2xl mx-auto border-x border-color-dark h-full">

                <div id="bars" class="absolute grid grid-cols-4 md:grid-cols-6 gap-10 w-full h-full z-0">
                    <div class="bg-dark-secondary w-full h-full border-x border-dashed border-slate-800 -ml-px"/>
                    <div class="bg-dark-secondary w-full h-full border-x border-dashed border-slate-800"/>
                    <div class="bg-dark-secondary w-full h-full border-x border-dashed border-slate-800 hidden-mobile"/>
                    <div class="bg-dark-secondary w-full h-full border-x border-dashed border-slate-800 hidden-mobile"/>
                    <div class="bg-dark-secondary w-full h-full border-x border-dashed border-slate-800"/>
                    <div class="bg-dark-secondary w-full h-full border-x border-dashed border-slate-800 -mr-px"/>
                </div>

                <div id="datetime" class="relative h-48 w-full hero-text-secondary pt-8">
                    <span class="hidden-mobile">
                        {{ dateTime }}
                    </span>
                </div>

                <div id="hero-center-content" class="relative flex items-center border-y border-color-dark p-2 h-64">
                    <h1 id="heading" class="heading-xl"
                        style="
                            background: radial-gradient(#f2fbff, #7dd3fb, #6d61ed);
                            -webkit-background-clip: text;
                            -webkit-text-fill-color: transparent;
                        ">
                        Startup websites that are out of this world.
                    </h1>
                </div>

                <div id="button-section" class="relative h-full w-full text-center text-md text-white py-8">
                    <ContactUsButton/>

                    <div class="hero-text-secondary mt-48 pb-20">We've worked with some of the most talented business owners.</div>
                </div>
            </div>

            <div id="logo-cloud" class="relative bg-gradient-to-b from-transparent via-[#100e25] to-[#100e25] -mt-28 z-10 max-w-4xl mx-auto py-10 grid grid-cols-4 items-center gap-x-8 gap-y-10 sm:grid-cols-6 sm:gap-x-10 lg:grid-cols-5">
                <img class="col-span-2 max-h-12 w-full object-contain lg:col-span-1" src="https://tailwindui.com/img/logos/158x48/transistor-logo-white.svg" alt="Transistor" width="158" height="48" />
                <img class="col-span-2 max-h-12 w-full object-contain lg:col-span-1" src="https://tailwindui.com/img/logos/158x48/reform-logo-white.svg" alt="Reform" width="158" height="48" />
                <img class="col-span-2 max-h-12 w-full object-contain lg:col-span-1" src="https://tailwindui.com/img/logos/158x48/tuple-logo-white.svg" alt="Tuple" width="158" height="48" />
                <img class="col-span-2 max-h-12 w-full object-contain sm:col-start-2 lg:col-span-1" src="https://tailwindui.com/img/logos/158x48/savvycal-logo-white.svg" alt="SavvyCal" width="158" height="48" />
                <img class="col-span-2 col-start-2 max-h-12 w-full object-contain sm:col-start-auto lg:col-span-1" src="https://tailwindui.com/img/logos/158x48/statamic-logo-white.svg" alt="Statamic" width="158" height="48" />
            </div>
        </div>
    </div>
</template>

<script>
import { Head, Link } from '@inertiajs/inertia-vue3';
import { MenuIcon, XIcon } from '@heroicons/vue/solid';
import Button from "@/Components/buttons/Button";
import SecondaryLink from "@/Components/buttons/SecondaryLink";
import HoverArrow from "@/Components/garnish/HoverArrow";
import AppLayout from "@/Layouts/AppLayout";
import ContactUsButton from "@/Components/buttons/ContactUsButton";
import DarkButton from "@/Components/buttons/DarkButton";
import moment from "moment";

export default {
    name: 'Welcome',

    components: {
        DarkButton,
        ContactUsButton,
        AppLayout,
        HoverArrow,
        SecondaryLink,
        Head, Link,
        Button,
        MenuIcon, XIcon
    },

    data() {
        return {
            isMenuOpen: false,
        }
    },

    methods: {
        toggleMenu() {
            this.isMenuOpen = !this.isMenuOpen;
        }
    },

    computed: {
        dateTime() {
            return moment().format('MMM DD, h:mm')
        }
    }
}
</script>
