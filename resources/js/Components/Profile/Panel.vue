<template>
    <section
        :id="id"
        class="screen-line-before screen-line-after border-x border-edge"
        :class="className"
    >
        <slot />
    </section>
</template>

<script setup lang="ts">
defineProps<{
    id?: string;
    className?: string;
}>();
</script>
