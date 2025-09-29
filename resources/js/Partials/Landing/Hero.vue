<template>
    <div class="overflow-hidden relative bg-black">
        <div id="logo" class="absolute top-8 left-8 z-50">
            <Logo />
        </div>

        <!-- Two Column Layout -->
        <!-- Left Column - Content -->
        <div
            class="flex !z-10 flex-col justify-center px-4 py-16 space-y-8 md:py-32 lg:py-40 xl:py-48"
        >
            <div
                id="datetime"
                class="text-left text-white hidden-mobile text-secondary-semibold"
            >
                {{ dateTime }}
            </div>

            <h1
                id="heading"
                class="z-10 text-4xl text-left text-white heading-xl md:text-5xl lg:text-6xl"
            >
                Startup websites
                <br />
                that are out of this world.
            </h1>

            <div
                id="button-section"
                class="flex z-50 justify-start text-white text-md"
            >
                <ContactUsButton />
            </div>
        </div>

        <!-- Right Column - Video -->
        <div
            class="flex absolute top-0 bottom-0 -right-1/4 z-0 pointer-events-none select-none"
        >
            <video
                autoplay
                loop
                muted
                playsinline
                class="object-cover w-full h-full"
            >
                <source src="../../../img/black-hole.webm" type="video/webm" />
            </video>
        </div>
    </div>
</template>

<script>
import Logo from "@/Components/App/Logo.vue";
import moment from "moment";
import ContactUsButton from "@/Components/Buttons/ContactUsButton.vue";

export default {
    name: "Hero",

    components: {
        ContactUsButton,
        Logo,
    },

    computed: {
        dateTime() {
            return moment().format("MMM DD, h:mm");
        },
    },
};
</script>

<style scoped></style>
