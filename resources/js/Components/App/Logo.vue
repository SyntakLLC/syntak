<template>
    <div class="flex justify-center items-center w-full h-full">
        <Link
            v-if="colorData && isPrebuiltColor"
            :href="route('landing')"
            :class="[
                actualColor,
                'max-w-48 -skew-y-6 flex text-center pt-1 pb-1.5 px-3',
            ]"
        >
            <span
                class="z-50 relative text-white font-[MarvinVisions] font-bold text-xl sm:text-2xl"
            >
                Syntak
            </span>
        </Link>

        <Link
            v-else-if="colorData"
            :href="route('landing')"
            :style="actualColor"
            :class="['max-w-48 -skew-y-3 flex text-center pt-0.5 pb-1 px-3']"
        >
            <span
                class="z-50 relative text-white font-[MarvinVisions] skew-y-3 font-bold text-3xl"
                >Syntak</span
            >
        </Link>

        <Link
            v-else
            :href="route('landing')"
            class="flex px-3 pb-3 text-center -skew-y-6 max-w-48 sm:pt-0 sm:pb-3"
        >
            <Gradient class="block absolute -inset-1" />
            <span
                class="-ml-1 z-50 relative text-white font-[MarvinVisions] font-bold text-xl sm:text-2xl"
            >
                Syntak
            </span>
        </Link>
    </div>
</template>

<script>
import { Link } from "@inertiajs/vue3";
import Gradient from "@/Components/Gradient/Gradient.vue";

export default {
    name: "Logo",

    components: {
        Link,
        Gradient,
    },

    props: {
        color: {
            type: String,
            default: null,
        },
    },

    data() {
        return {
            // pulls from the query param color={string}
            colorData: null,
        };
    },

    mounted() {
        if (document.location.search.includes("color=")) {
            this.colorData = document.location.search.split("color=")[1];
        } else if (this.color) {
            this.colorData = this.color;
        }
    },

    computed: {
        actualColor() {
            switch (this.colorData) {
                case "green":
                    return "bg-green-500";
                case "pink":
                    return "bg-pink-500";
                case "gold":
                    return "bg-linear-to-r from-yellow-500 to-yellow-400";
                case "platinum":
                    return "bg-linear-to-r from-slate-700 to-slate-500";
                default:
                    return `backgroundColor: #${this.colorData}`;
            }
        },

        isPrebuiltColor() {
            const colors = ["green", "pink", "gold", "platinum"];

            return colors.includes(this.colorData);
        },
    },
};
</script>

<style scoped></style>
