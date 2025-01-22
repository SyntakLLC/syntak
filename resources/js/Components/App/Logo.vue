<template>
    <div class="h-full w-full flex items-center justify-center">
        <Link v-if="color && isPrebuiltColor" :href="route('landing')"
              :class="[actualColor, 'max-w-[12rem] -skew-y-3 flex text-center pt-0.5 pb-1 px-3']">
            <span class="z-50 relative text-white font-[Lexend] skew-y-3 font-bold text-3xl">Syntak</span>
        </Link>

        <Link v-else-if="color" :href="route('landing')"
              :style="actualColor"
              :class="['max-w-[12rem] -skew-y-3 flex text-center pt-0.5 pb-1 px-3']">
            <span class="z-50 relative text-white font-[Lexend] skew-y-3 font-bold text-3xl">Syntak</span>
        </Link>

        <Link v-else :href="route('landing')"
              class="max-w-[12rem] -skew-y-6 flex text-center pt-0 pb-3 px-3">
            <Gradient class="block absolute -inset-1"/>
            <span class="-ml-1 z-50 relative text-white font-[Lexend] font-bold text-2xl">Syntak</span>
        </Link>
    </div>
</template>

<script>
import { Link } from '@inertiajs/vue3';
import Gradient from "@/Components/gradient/Gradient.vue";

export default {
    name: "Logo",

    components: {
        Link,
        Gradient
    },

    data() {
        return {
            // pulls from the query param color={string}
            color: null,
        }
    },

    mounted() {
        this.color = document.location.search.includes('color=') ? document.location.search.split('color=')[1] : null
    },

    computed: {
        actualColor() {
            switch (this.color) {
                case 'green':
                    return 'bg-green-500';
                case 'pink':
                    return 'bg-pink-500';
                case 'gold':
                    return 'bg-gradient-to-r from-yellow-500 to-yellow-400';
                case 'platinum':
                    return 'bg-gradient-to-r from-slate-700 to-slate-500';
                default:
                    return `backgroundColor: #${this.color}`
            }
        },

        isPrebuiltColor() {
            const colors = [
                'green',
                'pink',
                'gold',
                'platinum',
            ];

            return colors.includes(this.color);
        }
    }
}
</script>

<style scoped>

</style>
