<template>
    <div class="relative overflow-hidden">
        <Stars class="absolute w-screen opacity-50 z-10"/>
        <div id="logo" class="absolute top-8 left-8 z-50">
            <Logo />
        </div>

        <div class="absolute mt-48 border-y border-color w-full h-80 md:h-64" />

        <!-- Center of the hero -->
        <div class="relative max-w-2xl mx-auto md:border-x border-color h-full md:min-h-screen pb-16 md:pb-0">

            <VerticalBars />

            <div id="datetime" class="relative h-48 w-full text-secondary-semibold text-center text-white pt-8">
                <span class="hidden-mobile">
                    {{ dateTime }}
                </span>
            </div>

            <div id="hero-center-content" class="relative flex items-center border-y border-color p-2 h-80 md:h-64">
                <h1 id="heading" class="heading-xl">
                    Startup websites that are out of this world.
                </h1>
            </div>

            <div id="button-section" class="relative h-full w-full text-center text-md text-white py-8 z-50">
                <SecondaryButton class="mr-2">
                    Our work
                    <BriefcaseIcon class="w-4 h-4"/>
                </SecondaryButton>
                <ContactUsButton :dark="true"/>
            </div>
        </div>

        <!-- Planet -->
        <div id="planet" class="hidden-mobile z-0">
            <div class="absolute w-[200vw] aspect-square blur-[50px] top-2/3 -left-full">
                <div class="w-[200vw] absolute aspect-square rounded-full bg-white glow-purple"/>
            </div>
        </div>
    </div>
</template>

<script>
import Stars from '@/Components/Decoration/Stars.vue';
import Logo from "@/Components/App/Logo.vue";
import VerticalBars from "@/Components/Decoration/VerticalBars.vue";
import moment from 'moment';
import {BriefcaseIcon} from "@heroicons/vue/20/solid";
import ContactUsButton from "@/Components/Buttons/ContactUsButton.vue";
import SecondaryButton from "@/Components/Buttons/SecondaryButton.vue";

export default {
    name: "Hero",

    components: {
        SecondaryButton,
        ContactUsButton,
        VerticalBars,
        Logo,
        Stars,
        BriefcaseIcon
    },

    computed: {
        dateTime() {
            return moment().format('MMM DD, h:mm')
        }
    }
}
</script>

<style scoped>
     .glow-purple {
         box-shadow: 0 0 200px rgb(110 103 238);
     }
</style>
