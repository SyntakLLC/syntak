<template>
    <footer class="max-w-screen overflow-x-hidden px-2">
        <div
            class="screen-line-before mx-auto border-x border-edge pt-4 md:max-w-3xl"
        >
            <p
                class="mb-1 px-4 text-center font-mono text-sm text-balance text-muted-foreground"
            >
                Inspired by tailwindcss.com & ui.shadcn.com
            </p>

            <p
                class="mb-4 px-4 text-center font-mono text-sm text-balance text-muted-foreground"
            >
                Built by
                <a
                    class="font-medium underline underline-offset-4 hover:text-foreground"
                    href="https://syntak.dev"
                    target="_blank"
                    rel="noopener"
                >
                    Syntak
                </a>
                . The source code is available on
                <a
                    class="font-medium underline underline-offset-4 hover:text-foreground"
                    href="https://github.com/syntak"
                    target="_blank"
                    rel="noopener"
                >
                    GitHub
                </a>
                .
            </p>

            <div
                class="screen-line-before screen-line-after flex w-full before:z-1 after:z-1 footer-stripe"
            >
                <div
                    class="mx-auto flex items-center justify-center gap-3 border-x border-edge bg-background px-4"
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
