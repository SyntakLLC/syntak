<template>
    <div class="flex items-center gap-2 text-sm">
        <component
            :is="icon"
            class="size-4 shrink-0 text-muted-foreground"
            aria-hidden="true"
        />
        <a
            v-if="href"
            :href="href"
            target="_blank"
            rel="noopener noreferrer"
            class="text-foreground hover:underline"
        >
            {{ content }}
        </a>
        <span v-else class="text-foreground">{{ content }}</span>
    </div>
</template>

<script setup lang="ts">
import type { Component } from "vue";

defineProps<{
    icon: Component;
    content: string;
    href?: string;
}>();
</script>
