<template>
    <Panel id="brand">
        <PanelHeader>
            <PanelTitle>Brand</PanelTitle>
        </PanelHeader>

        <div class="grid grid-cols-[2rem_1fr]">
            <div
                class="flex justify-center items-center h-28 border-r border-dashed border-edge bg-background"
            >
                <span
                    class="text-sm select-none rotate-270 text-muted-foreground"
                >
                    Mark
                </span>
            </div>

            <div
                class="flex justify-center items-center pr-8 screen-line-after after:z-1"
            >
                <Logo class="w-auto h-8 sm:h-12" color="pink" />
            </div>

            <!-- <div
                class="flex justify-center items-center h-28 border-r border-dashed border-edge bg-background"
            >
                <span
                    class="text-sm select-none rotate-270 text-muted-foreground"
                >
                    Logotype
                </span>
            </div>

            <div
                class="flex justify-center items-center pr-8 screen-line-after after:z-1"
            >
                <Logo class="w-auto h-6 sm:h-10" />
            </div> -->
        </div>
    </Panel>
</template>

<script setup lang="ts">
import Panel from "./Panel.vue";
import PanelHeader from "./PanelHeader.vue";
import PanelTitle from "./PanelTitle.vue";
import Logo from "@/Components/App/Logo.vue";
</script>
