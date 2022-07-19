<template>
    <h1
        :class="[
            'before:block before:absolute before:-inset-1 before:-skew-y-3 before:bg-pink-500 relative inline-block px-2',
            padding,
        ]">
        <span :class="['relative font-display font-bold text-white', size]"
            >Syntak</span
        >
    </h1>
</template>

<script>
    export default {
        props: {
            size: {
                type: String,
                default: 'md',
            },
        },

        computed: {
            size() {
                switch (this.size) {
                    case 'sm':
                        return 'text-lg';
                    case 'md':
                        return 'text-3xl';
                    case 'lg':
                        return 'text-6xl';
                    default:
                        return 'text-3xl';
                }
            },
            padding() {
                switch (this.size) {
                    case 'sm':
                        return 'before:-inset-0 pt-1';
                    case 'md':
                        return 'before:-inset-1';
                    case 'lg':
                        return 'before:-inset-1';
                    default:
                        return 'before:-inset-1';
                }
            },
        },
    };
</script>
