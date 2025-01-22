<template>
    <div class="noise absolute inset-0" />
</template>

<script>
export default {
    name: "Noise",
};
</script>

<style scoped>
.noise {
    /*position: fixed;*/
    pointer-events: none;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    display: block;
    z-index: 5;
    opacity: 0.5;
    mix-blend-mode: soft-light;
    /*animation: grain 400ms steps(1) infinite;*/
    height: 100%;
    width: 100%;
    background: url("../../../img/grain.webp");
}
</style>
