<template>
    <div class="p-4" :class="className">
        <slot />
    </div>
</template>

<script setup lang="ts">
defineProps<{
    className?: string;
}>();
</script>
