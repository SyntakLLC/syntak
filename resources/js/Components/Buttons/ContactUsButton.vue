<template>
    <a href="https://calendly.com/syntak/interested-in-a-website-or-app" target="_blank">
        <PrimaryButton v-if="dark">
            Contact Us
            <HoverArrow />
        </PrimaryButton>
        <SecondaryButton v-else>Contact Us</SecondaryButton>
    </a>
</template>

<script>
import SecondaryButton from "@/Components/buttons/SecondaryButton.vue";
import PrimaryButton from "@/Components/Buttons/PrimaryButton.vue";
import HoverArrow from "@/Components/Decoration/HoverArrow.vue";

export default {
    name: "ContactUsButton",
    components: {HoverArrow, PrimaryButton, SecondaryButton},
    props: {
        dark: {
            type: Boolean,
            default: false,
        }
    },

    methods: {
        openCalendlyModal() {
            Calendly.initPopupWidget({url: 'https://calendly.com/syntak/interested-in-a-website-or-app'});
            return false;
        }
    }
}
</script>

<style scoped>

</style>
