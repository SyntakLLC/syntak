<template>
    <div class="w-full bg-primary border-y border-color">
        <div class="relative max-w-2xl mx-auto">
            <VerticalBars id="bars-2" class="z-0" />

            <div class="relative py-20 px-6">
                <div class="heading-xl py-4 md:text-4xl lg:text-5xl">
                    "You won’t find more readily accessible, reliable, and
                    diligent web developers."
                </div>
                <div class="heading-lg pt-6 text-center-desktop">
                    Harry Eppers, Athlete Pass
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import VerticalBars from "@/Components/Decoration/VerticalBars.vue";
export default {
    name: "Testimonial",
    components: { VerticalBars },
};
</script>

<style scoped></style>
