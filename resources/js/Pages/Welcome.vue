<template>
    <Head>
        <title>Startup Websites</title>
    </Head>

    <div id="nav-backdrop" class="relative pt-4 shadow-inner" style="background: radial-gradient(#f2fbff, #7dd3fb, #6d61ed);">

        <div class="absolute w-full">
            <div id="navigation" class="relative px-16 py-12 w-full text-[#010b40] space-y-8">

                <div class="text-5xl font-semibold tracking-tight">Our work</div>

                <div class="grid md:grid-cols-4 gap-8 w-full">
                    <a v-for="item in navigation"
                       target="_blank"
                       :href="item.href"
                       class="flex flex-col group">
                        <div class="heading-lg flex items-center justify-between">
                            {{ item.title }} <HoverArrow color="primary" class="ml-4 scale-150 opacity-50"/>
                        </div>
                        <div class="text-sm md:text-base mt-4 text-[#00126a]">
                            {{ item.description }}
                        </div>
                    </a>
                </div>
            </div>
        </div>

        <div id="hero" :class="[isMenuOpen ? 'top-[652px] md:top-72' : 'top-0', 'relative bg-dark-primary rounded-t-3xl transition-all overflow-hidden min-h-screen']">

            <!-- Stars -->
            <Stars class="absolute w-screen opacity-50"/>

            <!-- Logo -->
            <div id="logo" class="absolute top-8 left-8 z-50">
                <Link :href="route('welcome')"
                      class="max-w-[12rem] -skew-y-6 flex text-center pt-0 pb-3 px-3">
                    <Gradient class="block absolute -inset-1"/>
                    <span class="mx-auto z-50 relative text-white font-display font-bold text-2xl">Syntak</span>
                </Link>
            </div>

            <!-- Menu button -->
            <div id="menu-button-location" class="absolute top-8 right-8 z-50">
                <DarkButton @click="toggleMenu">
                    {{ isMenuOpen ? 'Close' : 'Menu' }}
                    <template #icon>
                        <XIcon v-if="isMenuOpen" class="-ml-1 w-4 h-4" />
                        <MenuIcon v-else class="w-4 h-4"/>
                    </template>
                </DarkButton>
            </div>

            <!-- Horizontal bars -->
            <div id="horizontal-bars" class="absolute mt-48 border-y border-color-dark w-full h-64" />

            <!-- Center of the hero -->
            <div id="hero-center" class="relative max-w-2xl mx-auto border-x border-color-dark h-full min-h-screen">

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
                    <Button @click="toggleMenu" class="mr-2">
                        Our work
                        <template #icon>
                            <BriefcaseIcon class="w-4 h-4"/>
                        </template>
                    </Button>
                    <ContactUsButton :dark="true"/>

                    <div class="block md:hidden hero-text-secondary mt-24">We've worked with some of the most talented business owners.</div>

                    <!-- Logo cloud -->
                    <div id="logo-cloud" class="md:hidden relative bg-gradient-to-b from-transparent via-[#100e25] to-[#100e25] z-10 max-w-4xl mx-auto py-10 grid grid-cols-4 items-center gap-x-8 gap-y-10 sm:grid-cols-6 sm:gap-x-10 lg:grid-cols-5">
                        <img class="col-span-2 max-h-12 w-full object-contain lg:col-span-1" src="https://tailwindui.com/img/logos/158x48/transistor-logo-white.svg" alt="Transistor" width="158" height="48" />
                        <img class="col-span-2 max-h-12 w-full object-contain lg:col-span-1" src="https://tailwindui.com/img/logos/158x48/reform-logo-white.svg" alt="Reform" width="158" height="48" />
                        <img class="col-span-2 max-h-12 w-full object-contain lg:col-span-1" src="https://tailwindui.com/img/logos/158x48/tuple-logo-white.svg" alt="Tuple" width="158" height="48" />
                        <img class="col-span-2 max-h-12 w-full object-contain sm:col-start-2 lg:col-span-1" src="https://tailwindui.com/img/logos/158x48/savvycal-logo-white.svg" alt="SavvyCal" width="158" height="48" />
                        <img class="col-span-2 col-start-2 max-h-12 w-full object-contain sm:col-start-auto lg:col-span-1" src="https://tailwindui.com/img/logos/158x48/statamic-logo-white.svg" alt="Statamic" width="158" height="48" />
                    </div>
                </div>
            </div>

            <!-- Planet -->
            <div id="planet" class="hidden-mobile">
                <div class="absolute w-[200vw] aspect-square blur-[50px] top-2/3 -left-full">
                    <div class="w-[200vw] absolute aspect-square rounded-full bg-white glow-purple"/>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import { Head, Link } from '@inertiajs/inertia-vue3';
import Gradient from "@/Components/gradient/Gradient.vue";
import Stars from "@/Components/garnish/Stars.vue";
import { MenuIcon, XIcon, BriefcaseIcon } from '@heroicons/vue/solid';
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
        Gradient, Stars,
        DarkButton,
        ContactUsButton,
        AppLayout,
        HoverArrow,
        SecondaryLink,
        Head, Link,
        Button,
        MenuIcon, XIcon, BriefcaseIcon
    },

    setup() {
        const navigation = [
            {
                title: 'Notedly AI',
                description: 'AI powered note-taking for college students, researchers, and professionals.',
                href: 'https://notedly.ai',
            },
            {
                title: 'Athlete Pass',
                description: 'A meeting place for content creating athletes and sports-lovers.',
                href: 'https://myathletepass.com',
            },
            {
                title: 'Homexe Realty',
                description: 'Metrics tracking for real estate agents on the go.',
                href: 'https://apps.apple.com/us/app/homexe-win/id1601072257',
            },
            {
                title: 'MacDrone Media',
                href: 'https://apps.apple.com/us/app/cheat-sheet-re-photography/id1530704766',
                description: 'A companion app for an online course on real estate photography.',
            },
        ];

        return {
            navigation
        }
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

<style lang="css">
.glow-purple {
    box-shadow: 0 0 200px rgb(110 103 238);
}
</style>
