<template>
    <Link
        :href="href"
        class="font-semibold text-sm text-brand-700 hover:text-brand-900">
        <slot />
        <div class="w-full h-1 bg-brand-400 -mt-1.5 opacity-50" />
    </Link>
</template>

<script>
    import { Link } from '@inertiajs/inertia-vue3';

    export default {
        components: {
            Link,
        },

        props: {
            href: {
                type: String,
                required: true,
            },
        },
    };
</script>
