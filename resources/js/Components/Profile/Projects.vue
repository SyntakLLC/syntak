<template>
    <Panel id="projects">
        <PanelHeader>
            <PanelTitle> Projects </PanelTitle>
        </PanelHeader>

        <div>
            <ProjectItem
                v-for="project in PROJECTS"
                :key="project.id"
                :project="project"
            />
        </div>
    </Panel>
</template>

<script setup lang="ts">
import Panel from "./Panel.vue";
import PanelHeader from "./PanelHeader.vue";
import PanelTitle from "./PanelTitle.vue";
import ProjectItem from "./ProjectItem.vue";
import { PROJECTS } from "@/config/projects";
</script>
