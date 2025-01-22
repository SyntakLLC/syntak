<template>
    <div class="relative overflow-hidden border-b border-color">
        <Stars class="absolute w-screen opacity-50 z-10" />
        <div id="logo" class="absolute top-8 left-8 z-50">
            <Logo />
        </div>

        <div
            class="hidden-mobile absolute mt-48 border-y border-color w-full h-80 md:h-64"
        />

        <!-- Center of the hero -->
        <div
            class="relative max-w-2xl mx-auto md:border-x border-color h-full pb-16 md:pb-40"
        >
            <VerticalBars />

            <div
                id="datetime"
                class="hidden-mobile relative h-48 w-full text-secondary-semibold text-center text-white pt-8"
            >
                {{ dateTime }}
            </div>

            <div class="pt-28 md:pt-0">
                <div
                    id="hero-center-content"
                    class="relative flex items-center border-y border-color px-4 py-12 my-12 md:my-0 md:py-0 h-auto md:h-64"
                >
                    <h1
                        id="heading"
                        class="heading-xl text-5xl md:text-6xl lg:text-7xl"
                    >
                        Startup websites that are out of this world.
                        <!-- Bringing your company into hyperspace with AI. -->
                    </h1>
                </div>
            </div>

            <div
                id="button-section"
                class="relative h-full w-full text-center text-md text-white pt-8 md:py-8 z-50"
            >
                <SecondaryButton @click="scrollToProjects" class="mr-2">
                    Our work
                    <BriefcaseIcon class="w-4 h-4" />
                </SecondaryButton>
                <ContactUsButton :dark="true" />
            </div>
        </div>

        <!-- Planet -->
        <!--        <div id="planet" class="hidden-mobile z-0">-->
        <!--            <div class="absolute w-[200vw] aspect-square blur-[50px] top-2/3 -left-full">-->
        <!--                <div class="w-[200vw] absolute aspect-square rounded-full bg-white glow-purple"/>-->
        <!--            </div>-->
        <!--        </div>-->
    </div>
</template>

<script>
import Stars from "@/Components/Decoration/Stars.vue";
import Logo from "@/Components/App/Logo.vue";
import VerticalBars from "@/Components/Decoration/VerticalBars.vue";
import moment from "moment";
import { BriefcaseIcon } from "@heroicons/vue/20/solid";
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
        BriefcaseIcon,
    },

    methods: {
        scrollToProjects() {
            const projectsHeading = document.querySelector("h6");
            console.log(projectsHeading);
            console.log(projectsHeading.textContent.includes("More projects"));
            if (
                projectsHeading &&
                projectsHeading.textContent.includes("More projects")
            ) {
                projectsHeading.scrollIntoView({ behavior: "smooth" });
            }
        },
    },

    computed: {
        dateTime() {
            return moment().format("MMM DD, h:mm");
        },
    },
};
</script>

<style scoped>
.glow-purple {
    box-shadow: 0 0 200px rgb(110 103 238);
}
</style>
