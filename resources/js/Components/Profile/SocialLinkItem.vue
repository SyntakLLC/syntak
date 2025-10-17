<template>
    <a
        :href="href"
        target="_blank"
        rel="noopener"
        class="group/link flex cursor-pointer items-center gap-4 rounded-2xl p-4 pr-2 transition-colors select-none hover:bg-accent2"
    >
        <div class="relative size-12 shrink-0">
            <img
                class="rounded-xl"
                :src="icon"
                :alt="title"
                width="48"
                height="48"
            />
            <div
                class="pointer-events-none absolute inset-0 rounded-xl ring-1 ring-black/10 ring-inset dark:ring-white/10"
            />
        </div>

        <div class="flex-1">
            <h3
                class="flex items-center font-medium underline-offset-4 group-hover/link:underline"
            >
                {{ title }}
            </h3>

            <p v-if="description" class="text-sm text-muted-foreground">
                {{ description }}
            </p>
        </div>

        <ArrowUpRightIcon class="size-4 text-muted-foreground" />
    </a>
</template>

<script setup lang="ts">
import { ArrowUpRightIcon } from "lucide-vue-next";

defineProps<{
    icon: string;
    title: string;
    description: string;
    href: string;
}>();
</script>
