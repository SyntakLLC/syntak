<template>
    <div class="flex gap-2 items-center text-sm">
        <span
            class="inline-flex items-center px-1 py-1 text-xs font-medium rounded-md border aspect-square border-border bg-muted text-muted-foreground"
        >
            <component
                :is="icon"
                class="size-4 shrink-0 text-muted-foreground"
                aria-hidden="true"
            />
        </span>
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
