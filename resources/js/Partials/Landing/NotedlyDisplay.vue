<template>
    <div
        class="relative w-full pb-8 space-y-16 overflow-hidden bg-secondary md:py-16"
    >
        <!-- bg-linear-to-b from-[#18162e] to-[#100e25] -->
        <Meteors />
        <Stars class="opacity-50 -scale-x-100" />

        <div class="px-4">
            <div class="pb-6 heading-xl md:text-4xl lg:text-5xl">
                First impressions last.
            </div>
            <div class="text-white heading-sm text-center-desktop">
                This first impression by Syntak landed 90,000+ users and over
                $70,000 ARR.
            </div>
        </div>

        <div class="w-full px-4 text-white md:px-8 lg:px-24">
            <!-- <div
                id="notedly"
                class="relative overflow-hidden rounded-3xl glow-purple-large"
            > -->
            <div
                id="notedly"
                class="relative overflow-hidden rounded-3xl glow-purple-large"
                :style="{
                    transform: `perspective(500px) rotateX(${rotation}deg)`,
                }"
            >
                <div class="border-pulse rounded-3xl">
                    <img
                        src="../../../img/notedly.png"
                        class="relative z-10 object-cover w-full h-full select-none rounded-3xl"
                        alt="Notedly AI User Interface"
                    />
                </div>
            </div>
        </div>

        <div
            class="bg-linear-to-b from-transparent via-[#18162e] to-[#18162e] w-full lg:absolute lg:bottom-0 lg:h-screen"
        >
            <div class="items-end hidden w-full p-24 lg:block lg:h-1/3"></div>

            <div class="w-full px-6 space-y-10 h-2/3 md:px-8 lg:p-24 lg:my-10">
                <h6 class="heading-lg">Our projects</h6>

                <div
                    class="grid w-full gap-4 md:grid-cols-2 lg:grid-cols-3 md:gap-16"
                >
                    <div
                        v-for="project in projects.slice(0, 3)"
                        class="flex flex-col w-full gap-2 py-6 rounded-2xl md:p-6"
                    >
                        <img
                            :src="project.icon"
                            class="object-contain w-8 h-8 rounded-full"
                            :alt="`${project.name} Logo`"
                        />

                        <span class="heading-lg">
                            <!--                              :style="`text-shadow: 2px 2px 0 #000, 4px 4px 0 ${project.color};`">-->
                            <!-- 2px 2px 0 #000,  -->
                            {{ project.name }}
                        </span>

                        <span class="leading-relaxed text-white text-secondary">
                            {{ project.description }}
                        </span>

                        <a
                            :href="project.href"
                            target="_blank"
                            class="text-2xl text-left heading-xl"
                        >
                            View &rarr;
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import { Link } from "@inertiajs/vue3";
import Meteors from "@/Components/Decoration/Meteors.vue";
import Stars from "@/Components/Decoration/Stars.vue";
import HoverArrow from "@/Components/Decoration/HoverArrow.vue";
import { PROJECTS } from "@/config/projects";

// Legacy format for old projects
const projects = PROJECTS.map((p) => ({
    name: p.title,
    href: p.link,
    icon: p.logo || "",
    description: p.description.split("\n")[0],
}));

export default {
    name: "NotedlyDisplay",

    components: { HoverArrow, Stars, Meteors, Link },

    created() {
        window.addEventListener("scroll", this.handleScroll);
    },

    unmounted() {
        window.removeEventListener("scroll", this.handleScroll);
    },

    setup() {
        return {
            projects,
        };
    },

    data() {
        return {
            rotation: 10,
        };
    },

    methods: {
        handleScroll() {
            const element = document.getElementById("notedly");
            if (!element) return;
            const height = element.offsetTop - window.scrollY;
            const rotationValue = 10 + height / 50;
            const scaleValue = height / 250;

            if (rotationValue > 0) {
                this.rotation = rotationValue;
            } else {
                this.rotation = 0;
            }

            if (scaleValue > 0) {
                element.scale = scaleValue + "%";
                element.style.transform = `perspective(500px) rotateX(${rotationValue}deg)`;
            }

            // const element2 = document.getElementById("notedly-end");
            // const height2 = element2.offsetTop - window.scrollY;
            // const rotationValue2 = 10 + height2 / 50;
            // const scaleValue2 = height2 / 250;

            // if (rotationValue2 > 0) {
            //     this.rotation = rotationValue2;
            // } else {
            //     this.rotation = 0;
            // }

            // if (scaleValue2 > 0) {
            //     this.element.scale = scaleValue2 + "%";
            // }
        },
    },
};
</script>

<style scoped>
.glow-purple-large {
    box-shadow: 0 0 200px rgba(110, 103, 238, 0.2);
}
.glow-purple-small {
    box-shadow: 0 0 20px rgba(110, 103, 238, 0.1);
}
</style>
