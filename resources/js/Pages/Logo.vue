<template>
    <div class="pt-3 pb-1 pl-1 inline-flex">
        <LogoComponent />
    </div>
</template>

<script>
import { Link } from '@inertiajs/vue3';
import LogoComponent from '@/Components/App/Logo.vue';

export default {
    name: "Logo",

    components: {
        Link,
        LogoComponent
    }
}
</script>
