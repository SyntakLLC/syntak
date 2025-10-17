<template>
    <div class="flex items-center gap-2 text-sm">
        <MailIcon
            class="size-4 shrink-0 text-muted-foreground"
            aria-hidden="true"
        />
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
