<template>
    <div class="relative w-full bg-secondary space-y-16 overflow-hidden">
        <div class="relative">
            <div
                class="bg-gradient-to-t from-transparent via-[#18162e] to-[#18162e] w-full h-full absolute top-0 z-10"
            />

            <div
                class="w-full px-6 md:px-8 lg:px-24 -mt-32 md:-mt-80 lg:-mt-80 text-white z-0"
            >
                <!--            <div id="notedly-end" class="relative rounded-b-3xl overflow-hidden glow-purple-large" :style="{ transform: `perspective(700px) rotateX(${rotation}deg)` }">-->
                <div
                    id="papi-end"
                    class="relative rounded-b-3xl overflow-hidden glow-purple-large"
                >
                    <div class="border-pulse rounded-b-3xl">
                        <!--                        <img src="https://i.imgur.com/QUnzCg6.png"-->
                        <img
                            src="../../../img/impulse.png"
                            class="relative object-cover rounded-b-3xl w-full h-full z-10 select-none"
                            alt="AI Papi User Interface"
                        />
                    </div>
                </div>
            </div>
        </div>

        <div class="relative h-full max-w-5xl px-4 mx-auto">
            <TwinklingStars />

            <div class="heading-xl pb-6 md:text-4xl lg:text-5xl">
                Once-in-a-lifetime ideas
            </div>
            <div class="heading-sm text-center text-white">
                Deserve once-in-a-lifetime websites.
            </div>
            <div
                class="max-w-lg mx-auto mt-5 text-secondary text-white leading-relaxed text-center"
            >
                Syntak has experience growing all kinds of startups - from
                launching several of our own to helping existing platforms build
                out and expand their products.
            </div>

            <!-- Calendly inline widget -->
            <!--            <div class="calendly-inline-widget" data-url="https://calendly.com/syntak/interested-in-a-website-or-app?hide_event_type_details=1&hide_gdpr_banner=1" style="min-width:320px;height:700px;"></div>-->

            <div class="max-w-xl mx-auto my-12 lg:my-20 z-10">
                <div
                    class="bg-gradient-to-tl from-[#100e25] to-[#100e2525] rounded-xl border border-gray-700/50 w-full px-8 py-6 glow-purple-large"
                >
                    <span
                        class="text-2xl lg:text-4xl font-semibold font-display tracking-tighter !text-center text-white"
                    >
                        Whether your product needs
                        <span class="heading-xl text-2xl lg:text-4xl"
                            >AI, payments, API's</span
                        >, or more, we've got you covered.
                    </span>
                </div>
            </div>

            <div
                class="max-w-xl mx-auto my-12 lg:my-20 lg:mb-32 z-10 flex justify-center"
            >
                <SecondaryButton @click="scrollToProjects" class="mr-2">
                    Our work
                    <BriefcaseIcon class="w-4 h-4" />
                </SecondaryButton>
                <ContactUsButton :dark="true" />
            </div>
        </div>
    </div>
</template>

<script>
import PrimaryButton from "@/Components/Buttons/PrimaryButton.vue";
import SecondaryButton from "@/Components/Buttons/SecondaryButton.vue";
import { BriefcaseIcon } from "@heroicons/vue/20/solid";
import TwinklingStars from "@/Components/Decoration/TwinklingStars.vue";
import ContactUsButton from "@/Components/Buttons/ContactUsButton.vue";
export default {
    name: "CallToAction",

    components: {
        ContactUsButton,
        SecondaryButton,
        TwinklingStars,
        PrimaryButton,
        BriefcaseIcon,
    },

    created() {
        // window.addEventListener('scroll', this.handleScroll2);
    },

    unmounted() {
        // window.removeEventListener('scroll', this.handleScroll2);
    },

    data() {
        return {
            rotation: 10,
        };
    },

    methods: {
        handleScroll2() {
            const element = document.getElementById("papi-end");
            const height = element.offsetTop - window.scrollY;
            const rotationValue = height / 50 + 44;
            if (rotationValue > 0) {
                this.rotation = rotationValue;
                element.style.filter = `blur(${rotationValue}px)`;
            } else {
                this.rotation = 0;
            }
        },

        scrollToProjects() {
            const projectsHeading = document.querySelector("h6");
            if (
                projectsHeading &&
                projectsHeading.textContent.includes("Our projects")
            ) {
                projectsHeading.scrollIntoView({ behavior: "smooth" });
            }
        },
    },
};
</script>

<style scoped>
.glow-purple-large {
    box-shadow: 0 0 200px rgba(110, 103, 238, 0.2);
}
.glow-purple {
    box-shadow: 0 0 200px rgb(110 103 238);
}
</style>
