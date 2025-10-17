<template>
    <Panel id="brand">
        <PanelHeader>
            <PanelTitle>Brand</PanelTitle>
        </PanelHeader>

        <div class="grid grid-cols-[2rem_1fr]">
            <div
                class="flex h-28 items-center justify-center border-r border-dashed border-edge bg-background"
            >
                <span
                    class="rotate-270 text-sm text-muted-foreground select-none"
                >
                    Mark
                </span>
            </div>

            <div
                class="screen-line-after flex items-center justify-center pr-8 after:z-1"
            >
                <Logo class="h-8 w-auto sm:h-12" />
            </div>

            <div
                class="flex h-28 items-center justify-center border-r border-dashed border-edge bg-background"
            >
                <span
                    class="rotate-270 text-sm text-muted-foreground select-none"
                >
                    Logotype
                </span>
            </div>

            <div
                class="screen-line-after flex items-center justify-center pr-8 after:z-1"
            >
                <Logo class="h-6 w-auto sm:h-10" />
            </div>
        </div>
    </Panel>
</template>

<script setup lang="ts">
import Panel from "./Panel.vue";
import PanelHeader from "./PanelHeader.vue";
import PanelTitle from "./PanelTitle.vue";
import Logo from "@/Components/App/Logo.vue";
</script>
