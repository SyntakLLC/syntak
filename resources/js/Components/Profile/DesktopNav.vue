<template>
    <nav class="flex items-center gap-6 max-sm:hidden">
        <a
            v-for="item in items"
            :key="item.href"
            :href="item.href"
            class="text-sm font-medium text-muted-foreground transition-colors hover:text-foreground"
        >
            {{ item.title }}
        </a>
    </nav>
</template>

<script setup lang="ts">
interface NavItem {
    title: string;
    href: string;
}

defineProps<{
    items: NavItem[];
}>();
</script>
