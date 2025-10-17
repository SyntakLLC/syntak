<template>
    <div class="flex items-center gap-2 text-sm">
        <BriefcaseIcon
            class="size-4 shrink-0 text-muted-foreground"
            aria-hidden="true"
        />
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
