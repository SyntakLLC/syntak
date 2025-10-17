<template>
    <Panel id="social">
        <PanelHeader>
            <PanelTitle>Social</PanelTitle>
        </PanelHeader>

        <div class="grid grid-cols-1 sm:grid-cols-2">
            <SocialLinkItem
                v-for="(link, index) in SOCIAL_LINKS"
                :key="index"
                :icon="link.icon"
                :title="link.title"
                :description="link.description"
                :href="link.href"
                :class="{
                    'screen-line-after': index < SOCIAL_LINKS.length - 1,
                    'sm:screen-line-after': index % 2 === 0,
                    'sm:border-r sm:border-edge': index % 2 === 0,
                }"
            />
        </div>
    </Panel>
</template>

<script setup lang="ts">
import Panel from "./Panel.vue";
import PanelHeader from "./PanelHeader.vue";
import PanelTitle from "./PanelTitle.vue";
import SocialLinkItem from "./SocialLinkItem.vue";
import { SOCIAL_LINKS } from "@/config/social-links";
</script>
