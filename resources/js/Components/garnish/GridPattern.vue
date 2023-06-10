<template>
    {{width}}
    <svg aria-hidden="true">
        <defs>
            <pattern
                id="patternId"
                :width="width"
                :height="height"
                patternUnits="userSpaceOnUse"
                :x="x"
                :y="y"
            >
                <path :d="`M.5 ${height}V.5H${width}`" fill="none" />
            </pattern>
        </defs>
        <rect
            width="100%"
            height="100%"
            stroke-width={0}
            :fill="`url(#patternId)`"
        />
        <svg v-if="squares" :x="x" :y="y" class="overflow-visible">
            <rect
                v-for="coord in squares"
                stroke-width="0"
                :key="`${coord.x}-${coord.y}`"
                :width="width + 1"
                :height="height + 1"
                :x="x * width"
                :y="y * height"
            />
        </svg>
    </svg>
</template>

<script>
export default {
    name: "GridPattern",

    props: [
        "width",
        "height",
        "x",
        "y",
        "squares"
    ]
}
</script>

<style scoped>

</style>
