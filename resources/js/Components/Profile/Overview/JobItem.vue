<template>
    <div class="flex gap-2 items-center text-sm">
        <span
            class="inline-flex items-center px-1 py-1 text-xs font-medium rounded-md border aspect-square border-border bg-muted text-muted-foreground"
        >
            <BriefcaseIcon
                class="size-4 shrink-0 text-muted-foreground"
                aria-hidden="true"
            />
        </span>
        <span class="text-foreground">
            {{ title }} at
            <a
                :href="website"
                target="_blank"
                rel="noopener noreferrer"
                class="font-medium hover:underline"
            >
                {{ company }}
            </a>
        </span>
    </div>
</template>

<script setup lang="ts">
import { BriefcaseIcon } from "lucide-vue-next";

defineProps<{
    title: string;
    company: string;
    website: string;
}>();
</script>
