<template>
    <footer class="overflow-x-hidden px-2 max-w-screen">
        <div
            class="pt-4 mx-auto screen-line-before border-x border-edge md:max-w-3xl"
        >
            <p
                class="px-4 mb-1 font-mono text-sm text-center text-balance text-muted-foreground"
            >
                Inspired by chanhdai.com
            </p>

            <p
                class="px-4 mb-4 font-mono text-sm text-center text-balance text-muted-foreground"
            >
                Built by
                <a
                    class="font-medium underline underline-offset-4 hover:text-foreground"
                    href="https://syntak.co"
                    target="_blank"
                    rel="noopener"
                >
                    Syntak.
                </a>
            </p>

            <div
                class="flex w-full screen-line-before screen-line-after before:z-1 after:z-1 footer-stripe"
            >
                <div
                    class="flex gap-3 justify-center items-center px-4 mx-auto border-x border-edge bg-background"
                >
                    <a
                        class="flex font-mono text-xs font-medium text-muted-foreground hover:text-foreground"
                        href="https://github.com/syntak"
                        target="_blank"
                        rel="noopener noreferrer"
                    >
                        © {{ new Date().getFullYear() }} Syntak
                    </a>
                </div>
            </div>
        </div>
        <div class="pb-2">
            <div class="flex h-2" />
        </div>
    </footer>
</template>

<script setup lang="ts"></script>

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
