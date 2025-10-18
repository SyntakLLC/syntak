<template>
    <div class="flex border border-b-0 screen-line-after border-edge">
        <div class="border-r shrink-0 border-edge">
            <div class="mx-[2px] my-[3px]">
                <img
                    class="rounded-full ring-1 ring-offset-2 select-none size-32 ring-border ring-offset-background sm:size-40"
                    src="../../../img/amaan.jpg"
                    :alt="`${USER.displayName}'s avatar`"
                />
            </div>
        </div>

        <div class="flex flex-col flex-1">
            <div class="flex items-end pb-1 pl-4 grow stripe-pattern"></div>

            <div class="border-t border-edge">
                <h1
                    class="flex items-center pl-4 text-3xl font-semibold tracking-tight font-display"
                >
                    {{ USER.displayName }}
                </h1>

                <div class="py-1 pl-4 border-t min-h-12 border-edge sm:h-auto">
                    <div class="py-2 text-base text-muted-foreground">
                        {{ USER.bio }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script setup lang="ts">
import { USER } from "@/config/user";
</script>

<style scoped>
.stripe-pattern {
    background-image: repeating-linear-gradient(
        315deg,
        rgba(228, 228, 231, 0.56) 0,
        rgba(228, 228, 231, 0.56) 1px,
        transparent 0,
        transparent 50%
    );
    background-size: 10px 10px;
}

/* Dark mode */
.dark .stripe-pattern {
    background-image: repeating-linear-gradient(
        315deg,
        rgba(39, 39, 42, 0.56) 0,
        rgba(39, 39, 42, 0.56) 1px,
        transparent 0,
        transparent 50%
    );
}
</style>
