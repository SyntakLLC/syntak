<template>
    <div class="min-h-screen bg-background text-foreground">
        <Head>
            <title>Design Gallery | Syntak</title>
        </Head>

        <!-- Header -->
        <header
            class="sticky top-0 z-50 px-2 pt-2 transition-shadow duration-300 max-w-screen bg-background"
            :class="{ 'shadow-[0_0_16px_0_rgba(0,0,0,0.08)]': isScrolled }"
        >
            <div
                class="flex gap-4 justify-between items-center px-4 mx-auto h-12   border-x border-edge md:max-w-3xl"
            >
                <!-- Logo -->
                <Link
                    :href="route('landing')"
                    class="flex items-center gap-3 group"
                >
                    <div
                        class="bg-pink-500 -skew-y-6 flex text-center pt-0.5 pb-1 px-2"
                    >
                        <span
                            class="text-white font-[MarvinVisions] font-bold text-lg"
                        >
                            Syntak
                        </span>
                    </div>
                </Link>

                <span
                    class="text-sm font-medium text-muted-foreground"
                >
                    Design Gallery
                </span>
            </div>
        </header>

        <!-- Main Content -->
        <main class="px-2">
            <div class="mx-auto md:max-w-3xl border-x border-edge">
                <!-- Hero Section -->
                <div class="p-8 md:p-12 ">
                    <div class="max-w-2xl">
                        <h1
                            class="text-4xl md:text-5xl font-semibold tracking-tight font-display mb-4"
                        >
                            Design Gallery
                        </h1>
                        <p class="text-lg text-muted-foreground">
                            A collection of fictional brand designs and landing
                            pages I've created for fun and practice. Each design
                            explores different styles, aesthetics, and UI
                            patterns.
                        </p>
                    </div>
                </div>

                <!-- Designs List -->
                <div class="p-4 md:p-8">
                    <nav class="space-y-1 max-w-md">
                        <Link
                            v-for="design in designs"
                            :key="design.slug"
                            :href="`/designs/${design.slug}`"
                            class="flex items-center gap-4 px-4 py-3 rounded-md transition-colors group hover:bg-accent2"
                        >
                            <div
                                class="w-10 h-10 rounded-md flex items-center justify-center text-sm font-mono font-medium shrink-0 transition-colors"
                                :style="{
                                    backgroundColor: design.tagBg,
                                    color: design.tagColor,
                                }"
                            >
                                {{ design.id }}
                            </div>
                            <div class="flex-1 min-w-0">
                                <div
                                    class="text-base font-medium truncate group-hover:text-pink-500 transition-colors"
                                >
                                    {{ design.name }}
                                </div>
                                <div class="text-sm text-muted-foreground">
                                    {{ design.category }}
                                </div>
                            </div>
                            <ArrowRightIcon
                                class="size-4 text-muted-foreground group-hover:text-foreground transition-all group-hover:translate-x-1"
                            />
                        </Link>
                    </nav>
                </div>

                <!-- Back Link -->
                <div class="p-4 md:p-8 pt-0 ">
                    <Link
                        :href="route('landing')"
                        class="inline-flex items-center gap-2 text-sm text-muted-foreground hover:text-foreground transition-colors"
                    >
                        <ArrowLeftIcon class="size-4" />
                        Back to Portfolio
                    </Link>
                </div>
            </div>
        </main>

        <!-- Footer -->
        <footer class="px-2 mt-8">
            <div
                class="mx-auto md:max-w-3xl border-x border-t border-edge "
            >
                <div class="p-4 text-center">
                    <p class="text-sm text-muted-foreground">
                        Design experiments by
                        <a
                            href="https://syntak.co"
                            target="_blank"
                            rel="noopener"
                            class="font-medium underline underline-offset-4 hover:text-foreground"
                        >
                            Syntak
                        </a>
                    </p>
                </div>

                <!-- Footer Stripe -->
                <div
                    class="flex w-full   before:z-1 after:z-1 footer-stripe"
                >
                    <div
                        class="flex gap-3 justify-center items-center px-4 py-2 mx-auto border-x border-edge bg-background"
                    >
                        <span class="font-mono text-xs text-muted-foreground">
                            &copy; {{ new Date().getFullYear() }} Syntak
                        </span>
                    </div>
                </div>
            </div>
            <div class="pb-2">
                <div class="flex h-2" />
            </div>
        </footer>
    </div>
</template>

<script setup lang="ts">
import { ref, onMounted, onUnmounted } from "vue";
import { Head, Link } from "@inertiajs/vue3";
import { ArrowLeftIcon, ArrowRightIcon } from "lucide-vue-next";

const designs = [
    {
        id: "01",
        slug: "better-call-saul",
        name: "Better Call Saul",
        category: "TV Show",
        description:
            "A retro lawyer website inspired by the iconic TV show character Saul Goodman.",
        bgColor: "#fae126",
        textColor: "#fae126",
        tagBg: "#fae12610",
        tagColor: "#fae126",
    },
    {
        id: "02",
        slug: "wayne-enterprises",
        name: "Wayne Enterprises",
        category: "Fictional Corp",
        description:
            "A sleek corporate website for Gotham's most prominent company with day/night mode.",
        bgColor: "#050b14",
        textColor: "#10b981",
        tagBg: "rgba(16, 185, 129, 0.1)",
        tagColor: "#10b981",
    },
    {
        id: "03",
        slug: "death-star",
        name: "Death Star",
        category: "Film Icon",
        description:
            "A terrifying propaganda website for the galaxy's newest technological terror.",
        bgColor: "#050b14",
        textColor: "#ff3333",
        tagBg: "#ff333310",
        tagColor: "#ff3333",
    },
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

<style scoped>
.footer-stripe {
    background-image: repeating-linear-gradient(
        315deg,
        color-mix(in oklab, var(--color-edge) 56%, transparent) 0,
        color-mix(in oklab, var(--color-edge) 56%, transparent) 1px,
        transparent 0,
        transparent 50%
    );
    background-size: 10px 10px;
}
</style>
