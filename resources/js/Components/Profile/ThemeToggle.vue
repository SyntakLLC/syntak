<template>
    <button
        @click="toggleTheme"
        class="inline-flex items-center justify-center rounded-md border border-border bg-background px-3 py-2 text-sm font-medium text-foreground hover:bg-accent hover:text-accent-foreground focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2"
        aria-label="Toggle theme"
    >
        <MoonIcon v-if="!isDark" class="h-4 w-4" />
        <SunIcon v-else class="h-4 w-4" />
        <span class="sr-only">Toggle theme</span>
    </button>
</template>

<script setup lang="ts">
import { ref, onMounted } from "vue";
import { MoonIcon, SunIcon } from "lucide-vue-next";

const isDark = ref(false);

const toggleTheme = () => {
    isDark.value = !isDark.value;

    if (isDark.value) {
        document.documentElement.classList.add("dark");
        localStorage.setItem("theme", "dark");
    } else {
        document.documentElement.classList.remove("dark");
        localStorage.setItem("theme", "light");
    }
};

onMounted(() => {
    const theme = localStorage.getItem("theme");
    const prefersDark = window.matchMedia(
        "(prefers-color-scheme: dark)"
    ).matches;

    isDark.value = theme === "dark" || (!theme && prefersDark);

    if (isDark.value) {
        document.documentElement.classList.add("dark");
    }
});
</script>
