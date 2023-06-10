<template>
    <DarkButton v-if="dark" @click="openCalendlyModal">
        Contact Us
        <template #icon>
            <HoverArrow />
        </template>
    </DarkButton>
    <Button v-else @click="openCalendlyModal">Contact Us</Button>
</template>

<script>
import Button from "@/Components/buttons/Button";
import DarkButton from "@/Components/buttons/DarkButton";
import HoverArrow from "@/Components/garnish/HoverArrow";

export default {
    name: "ContactUsButton",
    components: {HoverArrow, DarkButton, Button},
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
