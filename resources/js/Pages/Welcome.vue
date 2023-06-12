<template>
    <Head>
        <title>Startup Websites</title>
    </Head>

    <div id="nav-backdrop" class="relative pt-4 shadow-inner bg-gradient-blue">

        <!-- Navigation menu -->
        <div class="absolute w-full">
            <div id="navigation" class="relative px-16 py-12 w-full text-[#010b40] space-y-8">

                <div class="text-5xl font-semibold font-display tracking-tighter">Our work</div>

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

        <div id="hero" :class="[isMenuOpen ? 'top-[652px] md:top-72' : 'top-0', 'relative bg-dark-primary rounded-t-3xl transition-all overflow-hidden md:min-h-screen z-50']">

            <!-- Stars -->
            <Stars class="absolute w-screen opacity-50"/>

            <!-- Logo -->
            <div id="logo" class="absolute top-8 left-8 z-50">
                <Link :href="route('welcome')"
                      class="max-w-[12rem] -skew-y-6 flex text-center pt-0 pb-3 px-3">
                    <Gradient class="block absolute -inset-1"/>
                    <span class="-ml-1 z-50 relative text-white font-logo font-bold text-2xl">Syntak</span>
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
            <div id="horizontal-bars" class="absolute mt-48 border-y border-color-dark w-full h-80 md:h-64" />

            <!-- Center of the hero -->
            <div id="hero-center" class="relative max-w-2xl mx-auto border-x border-color-dark h-full md:min-h-screen pb-16 md:pb-0">

                <VerticalBars id="bars" />

                <div id="datetime" class="relative h-48 w-full hero-text-secondary pt-8">
                    <span class="hidden-mobile">
                        {{ dateTime }}
                    </span>
                </div>

                <div id="hero-center-content" class="relative flex items-center border-y border-color-dark p-2 h-80 md:h-64">
                    <h1 id="heading" class="heading-xl">
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
                </div>
            </div>

            <!-- Planet -->
            <div id="planet" class="hidden-mobile">
                <div class="absolute w-[200vw] aspect-square blur-[50px] top-2/3 -left-full">
                    <div class="w-[200vw] absolute aspect-square rounded-full bg-white glow-purple"/>
                </div>
            </div>
        </div>

        <!-- Main content -->
        <main class="relative w-full bg-dark-primary border-t border-color-dark">
            <!-- Section #1 -->
            <div class="relative bg-dark-secondary border-b border-color-dark pt-16 px-6">
                <div class="heading-xl pb-6 text-5xl">Impressions last.</div>
                <div class="heading-lg text-center text-white">Make yours perfect.</div>

                <!-- Three points -->
                <div id="three-points" class="relative mt-16 border-y border-color-dark border-dashed">
                    <div class="relative z-10 bg-dark-secondary max-w-2xl mx-auto divide-y divide-dashed divide-[#35334c] md:border-x border-color-dark p-8">
                        <!-- Point 1 - attitude -->
                        <div id="attitude" class="pb-8">
                            <div class="flex flex-row space-x-6">
                                <div class="h-8 w-8 aspect-square text-gray-800 font-display tracking-tighter font-bold flex items-center justify-center rounded-full bg-gradient-blue"
                                     data-aos="fade-up">
                                    1
                                </div>

                                <div>
                                    <div class="heading-lg text-white" data-aos="fade-up">The brand attitude</div>
                                    <p class="pt-4 hero-text-secondary-sm text-left">
                                        Any time a potential customer looks at your brand, they should <span class="italic">feel</span> the unique personality of your brand. We've helped startups from all different industries –– education, real estate, sports, and AI –– develop a unique brand that helped carve out a space for their product in each industry.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Point 2 - complex -->
                        <div id="complex" class="py-8">
                            <div class="flex flex-row space-x-6">
                                <div class="h-8 w-8 aspect-square text-gray-800 font-display tracking-tighter font-bold flex items-center justify-center rounded-full bg-gradient-blue"
                                     data-aos="fade-up">
                                    2
                                </div>

                                <div>
                                    <div class="heading-lg text-white" data-aos="fade-up">The complexity</div>
                                    <p class="pt-4 hero-text-secondary-sm text-left">
                                        Whether you need to support integrations with external APIs, marketplace interactions between users, or anything else, we've got you covered.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Point 3 - powerful -->
                        <div id="powerful" class="pt-8">
                            <div class="flex flex-row space-x-6">
                                <div class="h-8 w-8 aspect-square text-gray-800 font-display tracking-tighter font-bold flex items-center justify-center rounded-full bg-gradient-blue"
                                     data-aos="fade-up">
                                    3
                                </div>

                                <div>
                                    <div class="heading-lg text-white" data-aos="fade-up">The user experience</div>
                                    <p class="pt-4 hero-text-secondary-sm text-left">
                                        With experience designing both business-facing and consumer facing products for Millenials to Gen Z-ers, we know how to design an impressive user experience that leaves potential customers hooked.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Section #2 - Testimonial -->
            <div class="relative max-w-2xl mx-auto bg-dark-primary">
                <VerticalBars id="bars-2" class="opacity-50"/>

                <div class="relative z-10 py-20 px-6">
                    <div class="heading-xl py-4 text-5xl">
                        "You won’t find more readily accessible, reliable, and diligent web developers."
                    </div>
                    <div class="heading-lg pt-6 text-center text-white">Harry Eppers, Athlete Pass</div>
                </div>
            </div>


            <!-- Section #3 -->
            <div class="relative bg-dark-secondary border-y border-color-dark py-16 px-6">
                <div class="heading-xl text-5xl">Be the real deal.</div>
                <div class="heading-lg pt-6 text-center text-white">Jaw dropping websites your customers will adore.</div>

                <!-- Three images -->
                <div class="max-w-2xl pt-16 mx-auto w-full">
                    <div class="grid grid-cols-3" data-aos="fade-up">
                        <img src="https://i.imgur.com/WhKeGzv.png"
                             alt="Athlete Pass Dashboard"
                             class="border border-color-dark rounded-3xl w-40 aspect-square object-cover rotate-[10deg]"/>
                        <img src="https://i.imgur.com/vkLoRx8.png"
                             alt="Notedly AI Homepage"
                             class="border border-color-dark rounded-3xl w-72 aspect-square object-cover rotate-[-10deg] md:-ml-3 z-10"/>
                        <img src="https://i.imgur.com/cWpmCQl.png"
                             alt="Homexe Realty Dashboards"
                             class="border border-color-dark rounded-3xl w-40 aspect-square object-cover rotate-[10deg] md:ml-12"/>
                    </div>
                </div>
            </div>
        </main>

        <footer class="w-full max-w-7xl mx-auto text-[#010b40] py-12 space-y-8 px-6">
            <div class="text-5xl font-semibold font-display tracking-tighter">Contact us</div>

            <div class="space-y-2">
                <div class="heading-lg">Email: <a href="mailto:contact@syntak.co" class="underline">contact@syntak.co</a></div>
                <div class="heading-lg">Calendly: <a target="_blank" class="underline" href="https://calendly.com/syntak/interested-in-a-website-or-app">Meeting link</a></div>
            </div>
        </footer>
    </div>
</template>

<script>
import AOS from 'aos'
import 'aos/dist/aos.css'
import { Head, Link } from '@inertiajs/inertia-vue3';
import Gradient from "@/Components/gradient/Gradient.vue";
import Stars from "@/Components/garnish/Stars.vue";
import { MenuIcon, XIcon, BriefcaseIcon } from '@heroicons/vue/solid';
import Button from "@/Components/buttons/Button";
import SecondaryLink from "@/Components/buttons/SecondaryLink";
import HoverArrow from "@/Components/garnish/HoverArrow";
import ContactUsButton from "@/Components/buttons/ContactUsButton";
import DarkButton from "@/Components/buttons/DarkButton";
import moment from "moment";
import VerticalBars from "@/Components/garnish/VerticalBars";

export default {
    name: 'Welcome',

    components: {
        VerticalBars,
        Gradient, Stars,
        DarkButton,
        ContactUsButton,
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

    mounted() {
        AOS.init();
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
