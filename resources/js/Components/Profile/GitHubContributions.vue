<template>
    <Panel id="github">
        <h2 class="sr-only">GitHub Contributions</h2>

        <div class="p-4 flex items-center justify-center">
            <img
                :src="`https://ghchart.rshah.org/${USER.githubUsername}`"
                :alt="`${USER.displayName}'s GitHub contributions`"
                class="w-full max-w-full rounded-lg"
            />
        </div>
    </Panel>
</template>

<script setup lang="ts">
import Panel from "./Panel.vue";
import { USER } from "@/config/user";
</script>
