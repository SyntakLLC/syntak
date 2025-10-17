<template>
    <Panel id="stack">
        <PanelHeader>
            <PanelTitle>Stack</PanelTitle>
        </PanelHeader>

        <PanelContent class="tech-stack-bg bg-size-[10px_10px] bg-center">
            <div class="flex flex-wrap gap-4 select-none">
                <a
                    v-for="tech in techStack"
                    :key="tech.name"
                    :href="tech.href"
                    target="_blank"
                    rel="noopener noreferrer"
                    :title="tech.name"
                    class="flex"
                >
                    <img
                        :src="tech.icon"
                        :alt="tech.name"
                        width="32"
                        height="32"
                        class="size-8"
                    />
                </a>
            </div>
        </PanelContent>
    </Panel>
</template>

<script>
import Panel from "./Panel.vue";
import PanelHeader from "./PanelHeader.vue";
import PanelTitle from "./PanelTitle.vue";
import PanelContent from "./PanelContent.vue";

const techStack = [
    {
        name: "TypeScript",
        icon: "https://cdn.simpleicons.org/typescript/3178C6",
        href: "https://www.typescriptlang.org/",
    },
    {
        name: "JavaScript",
        icon: "https://cdn.simpleicons.org/javascript/F7DF1E",
        href: "https://developer.mozilla.org/en-US/docs/Web/JavaScript",
    },
    {
        name: "React",
        icon: "https://cdn.simpleicons.org/react/61DAFB",
        href: "https://react.dev/",
    },
    {
        name: "Vue.js",
        icon: "https://cdn.simpleicons.org/vuedotjs/4FC08D",
        href: "https://vuejs.org/",
    },
    {
        name: "Next.js",
        icon: "https://cdn.simpleicons.org/nextdotjs/000000",
        href: "https://nextjs.org/",
    },
    {
        name: "Tailwind CSS",
        icon: "https://cdn.simpleicons.org/tailwindcss/06B6D4",
        href: "https://tailwindcss.com/",
    },
    {
        name: "Node.js",
        icon: "https://cdn.simpleicons.org/nodedotjs/339933",
        href: "https://nodejs.org/",
    },
    {
        name: "Python",
        icon: "https://cdn.simpleicons.org/python/3776AB",
        href: "https://www.python.org/",
    },
    {
        name: "Laravel",
        icon: "https://cdn.simpleicons.org/laravel/FF2D20",
        href: "https://laravel.com/",
    },
    {
        name: "PHP",
        icon: "https://cdn.simpleicons.org/php/777BB4",
        href: "https://www.php.net/",
    },
    {
        name: "PostgreSQL",
        icon: "https://cdn.simpleicons.org/postgresql/4169E1",
        href: "https://www.postgresql.org/",
    },
    {
        name: "MySQL",
        icon: "https://cdn.simpleicons.org/mysql/4479A1",
        href: "https://www.mysql.com/",
    },
    {
        name: "MongoDB",
        icon: "https://cdn.simpleicons.org/mongodb/47A248",
        href: "https://www.mongodb.com/",
    },
    {
        name: "Redis",
        icon: "https://cdn.simpleicons.org/redis/DC382D",
        href: "https://redis.io/",
    },
    {
        name: "Docker",
        icon: "https://cdn.simpleicons.org/docker/2496ED",
        href: "https://www.docker.com/",
    },
    {
        name: "Git",
        icon: "https://cdn.simpleicons.org/git/F05032",
        href: "https://git-scm.com/",
    },
    {
        name: "Figma",
        icon: "https://cdn.simpleicons.org/figma/F24E1E",
        href: "https://www.figma.com/",
    },
    {
        name: "ChatGPT",
        icon: "https://cdn.simpleicons.org/openai/412991",
        href: "https://chatgpt.com/",
    },
];

export default {
    name: "TechStack",

    components: {
        Panel,
        PanelHeader,
        PanelTitle,
        PanelContent,
    },

    setup() {
        return {
            techStack,
        };
    },
};
</script>

<style scoped>
.tech-stack-bg {
    background: oklch(0 0 0 / 0.75);
    background-image: radial-gradient(
        color-mix(in oklab, oklch(0.141 0.005 285.823) 5%, transparent) 1px,
        transparent 0
    );
}

.dark .tech-stack-bg {
    background: oklch(1 0 0 / 0.75);
    background-image: radial-gradient(
        color-mix(in oklab, oklch(1 0 0) 5%, transparent) 1px,
        transparent 0
    );
}
</style>
