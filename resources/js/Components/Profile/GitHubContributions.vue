<template>
    <Panel id="github">
        <h2 class="sr-only">GitHub Contributions</h2>

        <div class="flex justify-center items-center p-4">
            <img
                :src="`https://ghchart.rshah.org/${USER.githubUsername}`"
                :alt="`${USER.displayName}'s GitHub contributions`"
                class="w-full max-w-full rounded-lg dark:invert"
            />
        </div>
    </Panel>
</template>

<script setup lang="ts">
import Panel from "./Panel.vue";
import { USER } from "@/config/user";
</script>
