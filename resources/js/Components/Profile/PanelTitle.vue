<template>
    <h2
        class="text-3xl font-semibold tracking-tight font-display"
        :class="className"
    >
        <slot />
    </h2>
</template>

<script setup lang="ts">
defineProps<{
    className?: string;
}>();
</script>
