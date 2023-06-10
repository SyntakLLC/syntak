<template>
    <Button @click="openCalendlyModal">Contact Us</Button>
</template>

<script>
import Button from "@/Components/buttons/Button";

export default {
    name: "ContactUsButton",
    components: {Button},

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
