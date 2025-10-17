<template>
    <div class="sm:hidden">
        <button
            @click="isOpen = true"
            class="inline-flex flex-col gap-1 px-3 py-2 text-sm font-medium rounded-md border group/toggle border-edge bg-background text-foreground hover:bg-accent hover:text-accent-foreground focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2"
        >
            <span class="flex h-0.5 w-4 rounded-[1px] bg-foreground" />
            <span class="flex h-0.5 w-4 rounded-[1px] bg-foreground" />
            <span class="sr-only">Toggle Menu</span>
        </button>

        <!-- Overlay -->
        <Transition
            enter-active-class="transition-opacity duration-300 ease-out"
            enter-from-class="opacity-0"
            enter-to-class="opacity-100"
            leave-active-class="transition-opacity duration-200 ease-in"
            leave-from-class="opacity-100"
            leave-to-class="opacity-0"
        >
            <div
                v-if="isOpen"
                @click="isOpen = false"
                class="fixed inset-0 z-50 backdrop-blur-sm bg-background/80"
            />
        </Transition>

        <!-- Drawer -->
        <Transition
            enter-active-class="transition-transform duration-300 ease-out"
            enter-from-class="translate-x-full"
            enter-to-class="translate-x-0"
            leave-active-class="transition-transform duration-200 ease-in"
            leave-from-class="translate-x-0"
            leave-to-class="translate-x-full"
        >
            <div
                v-if="isOpen"
                class="fixed top-0 right-0 bottom-0 z-50 w-72 border-l bg-background border-edge"
            >
                <div class="flex flex-col h-full">
                    <!-- Navigation Items -->
                    <nav class="flex flex-col pt-16">
                        <a
                            v-for="(item, index) in items"
                            :key="item.href"
                            :href="item.href"
                            @click="isOpen = false"
                            class="relative px-6 py-6 text-lg font-medium border-b transition-colors text-foreground hover:bg-accent border-edge"
                        >
                            {{ item.title }}
                        </a>
                    </nav>

                    <!-- Close button -->
                    <button
                        @click="isOpen = false"
                        class="inline-flex absolute top-4 right-4 justify-center items-center p-2 rounded-md transition-colors text-muted-foreground hover:text-foreground hover:bg-accent focus:outline-none focus:ring-2 focus:ring-ring"
                    >
                        <svg
                            class="w-5 h-5"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor"
                            stroke-width="1.5"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M6 18L18 6M6 6l12 12"
                            />
                        </svg>
                        <span class="sr-only">Close menu</span>
                    </button>
                </div>
            </div>
        </Transition>
    </div>
</template>

<script setup lang="ts">
import { ref } from "vue";

interface NavItem {
    title: string;
    href: string;
}

defineProps<{
    items: NavItem[];
}>();

const isOpen = ref(false);
</script>
