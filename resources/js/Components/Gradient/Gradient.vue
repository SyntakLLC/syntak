<template>
    <canvas id="gradient-canvas" class="w-full h-full rounded-sm"></canvas>
</template>

<script>
import "./Gradient";
import {Gradient} from "@/Components/gradient/Gradient";

export default {
    name: "Gradient",

    mounted() {
        const plugin = document.createElement("script");
        plugin.setAttribute(
            "src",
            "./Gradient"
        );
        plugin.async = true;
        document.head.appendChild(plugin);
        // const gradient = null;
        const gradient = new Gradient();
        gradient?.initGradient("#gradient-canvas");
    }
}
</script>

<style scoped>
body {
    margin: 0;
    padding: 0;
    max-height: 32px;
    transform: skew(10);
}
#gradient-canvas {
    /* Reddish colors */
    /*--gradient-color-1: #8b5cf6;*/
    /*--gradient-color-2: #ec4899;*/
    /*--gradient-color-3: #e11d48;*/
    /*--gradient-color-4: #fb7185;*/
    /* Greenish colors */
    /*--gradient-color-1: #2dc25b;*/
    /*--gradient-color-2: #ffb43a;*/
    /*--gradient-color-3: #8dc14e;*/
    /*--gradient-color-4: #ffe85e;*/
    /* Blueish colors */
    --gradient-color-1: #8b5cf6;
    --gradient-color-2: #5953ac;
    --gradient-color-3: #8ca6f0;
    --gradient-color-4: #5953ac;
}
</style>
