<template>
    <svg :class="[computedColor, 'mt-0.5 ml-2 -mr-1 stroke-2']" fill="none" width="10" height="10" viewBox="0 0 10 10" aria-hidden="true">
        <path class="opacity-0 transition group-hover:opacity-100" d="M0 5h7"></path>
        <path class="transition group-hover:translate-x-[3px]" d="M1 1l4 4-4 4"></path>
    </svg>
</template>

<script>
export default {
    name: "HoverArrow",

    props: ['color'],

    computed: {
        computedColor() {
            switch (this.color) {
                case "primary": return "stroke-[#010b40]";
                default: return "stroke-white";
            }
        }
    }
}
</script>

<style scoped>

</style>
