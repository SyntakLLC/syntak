<template>
    <div class="flex gap-2 items-center text-sm">
        <span
            class="inline-flex items-center px-1 py-1 text-xs font-medium rounded-md border aspect-square border-border bg-muted text-muted-foreground"
        >
            <MailIcon
                class="size-4 shrink-0 text-muted-foreground"
                aria-hidden="true"
            />
        </span>
        <a
            :href="`mailto:${decodedEmail}`"
            class="text-foreground hover:underline"
        >
            {{ decodedEmail }}
        </a>
    </div>
</template>

<script setup lang="ts">
import { computed } from "vue";
import { MailIcon } from "lucide-vue-next";

const props = defineProps<{
    email: string;
}>();

const decodedEmail = computed(() => {
    try {
        return atob(props.email);
    } catch {
        return props.email;
    }
});
</script>
