<template>
    <Link :href="route('landing')"
          class="max-w-[12rem] -skew-y-6 flex text-center pt-0 pb-3 px-3">
        <Gradient class="block absolute -inset-1"/>
        <span class="-ml-1 z-50 relative text-white font-[Lexend] font-bold text-2xl">Syntak</span>
    </Link>
</template>

<script>
import { Link } from '@inertiajs/vue3';
import Gradient from "@/Components/gradient/Gradient.vue";

export default {
    name: "Logo",

    components: {
        Link,
        Gradient
    }
}
</script>

<style scoped>

</style>
