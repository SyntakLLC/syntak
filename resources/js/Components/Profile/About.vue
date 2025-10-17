<template>
    <Panel id="about">
        <PanelHeader>
            <PanelTitle>About</PanelTitle>
        </PanelHeader>

        <PanelContent>
            <div
                class="prose prose-zinc dark:prose-invert max-w-none"
                v-html="renderedAbout"
            />
        </PanelContent>
    </Panel>
</template>

<script setup lang="ts">
import { computed } from "vue";
import { marked } from "marked";
import Panel from "./Panel.vue";
import PanelHeader from "./PanelHeader.vue";
import PanelTitle from "./PanelTitle.vue";
import PanelContent from "./PanelContent.vue";
import { USER } from "@/config/user";

const renderedAbout = computed(() => {
    return marked(USER.about, { breaks: true });
});
</script>

<style>
.prose a {
    color: var(--link);
    text-decoration: underline;
    text-underline-offset: 4px;
}

.prose a:hover {
    text-decoration: none;
}
</style>
