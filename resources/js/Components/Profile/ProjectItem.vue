<template>
    <Disclosure :default-open="project.isExpanded" v-slot="{ open }">
        <div>
            <div class="flex items-center">
                <div
                    v-if="project.logo"
                    class="flex mx-4 select-none size-6 shrink-0"
                >
                    <img
                        :src="project.logo"
                        :alt="project.title"
                        width="32"
                        height="32"
                        class="size-6"
                    />
                </div>
                <div
                    v-else
                    class="flex justify-center items-center mx-4 rounded-lg border ring-1 ring-offset-1 select-none size-6 shrink-0 border-muted-foreground/15 bg-muted text-muted-foreground ring-edge ring-offset-background"
                >
                    <PackageIcon class="size-4" />
                </div>

                <div class="flex-1 border-l border-dashed border-edge">
                    <DisclosureButton
                        class="flex gap-4 items-center p-4 pr-2 w-full text-left select-none"
                    >
                        <div class="flex-1">
                            <h3
                                class="mb-1 font-medium leading-snug text-balance"
                            >
                                {{ project.title }}
                            </h3>

                            <dl class="text-sm text-muted-foreground">
                                <dt class="sr-only">Period</dt>
                                <dd class="flex gap-0.5 items-center">
                                    <span>{{ project.period.start }}</span>
                                    <span class="font-mono">—</span>
                                    <InfinityIcon
                                        v-if="!project.period.end"
                                        class="size-4.5 translate-y-[0.5px]"
                                        aria-label="Present"
                                    />
                                    <span v-else>{{ project.period.end }}</span>
                                </dd>
                            </dl>
                        </div>

                        <a
                            :href="project.link"
                            target="_blank"
                            rel="noopener"
                            class="flex relative justify-center items-center size-6 shrink-0 text-muted-foreground after:absolute after:-inset-2 hover:text-foreground"
                            @click.stop
                        >
                            <LinkIcon class="pointer-events-none size-4" />
                            <span class="sr-only">Open Project Link</span>
                        </a>

                        <div class="shrink-0 text-muted-foreground">
                            <ChevronDownIcon
                                class="transition-transform size-4"
                                :class="{ 'rotate-180': open }"
                            />
                        </div>
                    </DisclosureButton>
                </div>
            </div>

            <transition
                enter-active-class="transition duration-200 ease-out"
                enter-from-class="opacity-0 transform"
                enter-to-class="opacity-100 transform"
                leave-active-class="transition duration-200 ease-out"
                leave-from-class="opacity-100 transform"
                leave-to-class="opacity-0 transform"
            >
                <DisclosurePanel class="overflow-hidden">
                    <div class="border-t border-dashed border-edge">
                        <div class="p-4 space-y-4">
                            <div
                                v-if="project.description"
                                class="max-w-none prose prose-sm prose-zinc dark:prose-invert"
                                v-html="renderedDescription"
                            />

                            <ul
                                v-if="project.skills.length > 0"
                                class="flex flex-wrap gap-1.5"
                            >
                                <li
                                    v-for="(skill, index) in project.skills"
                                    :key="index"
                                    class="flex"
                                >
                                    <span
                                        class="inline-flex items-center px-2 py-1 text-xs font-medium rounded-md border border-border bg-muted text-muted-foreground"
                                    >
                                        {{ skill }}
                                    </span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </DisclosurePanel>
            </transition>
        </div>
    </Disclosure>
</template>

<script setup lang="ts">
import { computed } from "vue";
import { Disclosure, DisclosureButton, DisclosurePanel } from "@headlessui/vue";
import {
    ChevronDownIcon,
    InfinityIcon,
    LinkIcon,
    PackageIcon,
} from "lucide-vue-next";
import { marked } from "marked";
import type { Project } from "@/config/projects";

const props = defineProps<{
    project: Project;
}>();

const renderedDescription = computed(() => {
    return marked(props.project.description, { breaks: true });
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
