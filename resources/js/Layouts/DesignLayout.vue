<template>
    <div class="min-h-screen bg-background text-foreground">
        <Head>
            <title>{{ title }} - Design Gallery | Syntak</title>
        </Head>

        <!-- Header -->
        <header
            class="sticky top-0 z-50 px-2 pt-2 transition-shadow duration-300 max-w-screen bg-background"
            :class="{ 'shadow-[0_0_16px_0_rgba(0,0,0,0.08)]': isScrolled }"
        >
            <div
                class="flex gap-4 justify-between items-center px-4 mx-auto h-12 screen-line-before screen-line-after border-x border-edge"
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
                    <span
                        class="hidden sm:block text-xs font-medium text-muted-foreground group-hover:text-foreground transition-colors"
                    >
                        Design Gallery
                    </span>
                </Link>

                <!-- All Designs Link -->
                <Link
                    href="/designs"
                    class="text-sm text-muted-foreground hover:text-foreground transition-colors"
                >
                    All Designs
                </Link>
            </div>
        </header>

        <!-- Main Content Area -->
        <main class="px-2">
            <div class="mx-auto">
                <!-- Design Content -->
                <div class="border-x border-edge screen-line-before">
                    <!-- Design Header -->
                    <div class="p-4 screen-line-after">
                        <div class="flex items-center gap-3 mb-2">
                            <span
                                class="px-2 py-0.5 text-xs font-medium rounded bg-pink-500/10 text-pink-500 dark:bg-pink-500/20"
                            >
                                {{ currentDesign?.category || "Design" }}
                            </span>
                            <span class="text-xs text-muted-foreground">
                                #{{ currentDesign?.id || "00" }}
                            </span>
                        </div>
                        <h1
                            class="text-2xl font-semibold tracking-tight font-display"
                        >
                            {{ title }}
                        </h1>
                        <p
                            v-if="currentDesign?.description"
                            class="mt-1 text-sm text-muted-foreground"
                        >
                            {{ currentDesign.description }}
                        </p>
                    </div>

                    <!-- Slot for Design Page -->
                    <div class="design-container">
                        <slot />
                    </div>
                </div>
            </div>
        </main>

        <!-- Footer -->
        <footer class="px-2 mt-8">
            <div class="border-x border-t border-edge screen-line-before">
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
                    <p class="mt-2 text-xs text-muted-foreground">
                        These are fictional brand designs created for fun and
                        practice.
                    </p>
                </div>

                <!-- Footer Stripe -->
                <div
                    class="flex w-full screen-line-before screen-line-after before:z-1 after:z-1 footer-stripe"
                >
                    <div
                        class="flex gap-3 justify-center items-center px-4 py-2 mx-auto border-x border-edge bg-background"
                    >
                        <span
                            class="font-mono text-xs text-muted-foreground"
                        >
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
import { ref, computed, onMounted, onUnmounted } from "vue";
import { Head, Link } from "@inertiajs/vue3";

const props = defineProps<{
    title: string;
}>();

const designs = [
    {
        id: "01",
        slug: "better-call-saul",
        name: "Better Call Saul",
        category: "TV Show",
        description:
            "A retro lawyer website inspired by the iconic TV show character.",
    },
    {
        id: "02",
        slug: "wayne-enterprises",
        name: "Wayne Enterprises",
        category: "Fictional Corp",
        description:
            "A sleek corporate website for Gotham's most prominent company.",
    },
];

const isScrolled = ref(false);

const currentPath = computed(() => {
    if (typeof window !== "undefined") {
        return window.location.pathname;
    }
    return "";
});

const currentDesign = computed(() => {
    return designs.find((d) => currentPath.value.includes(d.slug));
});

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

.design-container {
    /* Allow design pages to break out of container constraints */
    position: relative;
}

.design-container :deep(> *) {
    /* Reset any inherited styles for the design content */
    color: initial;
}
</style>
