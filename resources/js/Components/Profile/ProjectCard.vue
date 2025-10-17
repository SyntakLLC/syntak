<template>
    <a
        :href="project.href"
        target="_blank"
        rel="noopener"
        class="group/project flex flex-col gap-2 p-2"
    >
        <div v-if="project.backgroundImage" class="relative select-none">
            <img
                :src="project.backgroundImage"
                :alt="project.title"
                class="aspect-[1200/630] rounded-xl w-full object-cover"
            />

            <div
                class="pointer-events-none absolute inset-0 rounded-xl ring-1 ring-black/10 ring-inset dark:ring-white/10"
            />
        </div>

        <div class="flex flex-col gap-1 p-2">
            <h3
                class="text-lg leading-snug font-medium text-balance underline-offset-4 group-hover/project:underline"
            >
                {{ project.title }}
            </h3>

            <p class="text-sm text-muted-foreground">
                {{ project.description }}
            </p>
        </div>
    </a>
</template>

<script>
export default {
    name: "ProjectCard",

    props: {
        project: {
            type: Object,
            required: true,
        },
    },
};
</script>
