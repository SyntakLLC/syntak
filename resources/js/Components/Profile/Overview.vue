<template>
    <Panel>
        <h2 class="sr-only">Overview</h2>

        <PanelContent class="space-y-2">
            <JobItem
                v-for="(job, index) in USER.jobs"
                :key="index"
                :title="job.title"
                :company="job.company"
                :website="job.website"
            />

            <IntroItem :icon="MapPinIcon" :content="USER.address" />

            <EmailItem :email="USER.email" />

            <IntroItem
                :icon="GlobeIcon"
                :content="USER.website.replace('https://', '')"
                :href="USER.website"
            />
        </PanelContent>
    </Panel>
</template>

<script setup lang="ts">
import { MapPinIcon, GlobeIcon, MarsIcon, VenusIcon } from "lucide-vue-next";
import Panel from "./Panel.vue";
import PanelContent from "./PanelContent.vue";
import IntroItem from "./Overview/IntroItem.vue";
import JobItem from "./Overview/JobItem.vue";
import EmailItem from "./Overview/EmailItem.vue";
import { USER } from "@/config/user";
</script>
