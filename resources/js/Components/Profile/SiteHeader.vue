<template>
    <div
        class="overflow-x-hidden sticky top-0 z-50 px-2 pt-2 transition-shadow duration-300 max-w-screen bg-background"
        :class="{ 'shadow-[0_0_16px_0_rgba(0,0,0,0.08)]': isScrolled }"
    >
        <div
            class="flex gap-2 justify-between items-center px-2 mx-auto h-12 screen-line-before screen-line-after border-x border-edge sm:gap-4 md:max-w-3xl"
        >
            <div class="flex-1" />

            <DesktopNav :items="navItems" />

            <div class="flex gap-2 items-center">
                <ThemeToggle />
                <MobileNav :items="navItems" />
            </div>
        </div>
    </div>
</template>

<script setup lang="ts">
import { ref, onMounted, onUnmounted } from "vue";
import Logo from "@/Components/App/Logo.vue";
import ThemeToggle from "./ThemeToggle.vue";
import MobileNav from "./MobileNav.vue";
import DesktopNav from "./DesktopNav.vue";

const navItems = [
    { title: "About", href: "#about" },
    { title: "Projects", href: "#projects" },
    { title: "GitHub", href: "#github" },
];

const isScrolled = ref(false);

const handleScroll = () => {
    isScrolled.value = window.scrollY > 10;
};

onMounted(() => {
    window.addEventListener("scroll", handleScroll);
});

onUnmounted(() => {
    window.removeEventListener("scroll", handleScroll);
});
</script>
