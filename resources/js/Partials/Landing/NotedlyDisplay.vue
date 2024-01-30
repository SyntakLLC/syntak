<template>
    <div class="relative w-full bg-secondary space-y-16 py-16 overflow-hidden">
        <!-- bg-gradient-to-b from-[#18162e] to-[#100e25] -->
        <Meteors />
        <Stars class="opacity-50" />

        <div>
            <div class="heading-xl pb-6 text-5xl">First impressions last.</div>
            <div class="heading-sm text-center text-white">This first impression by us landed 50,000+ users and over $70,000 ARR.</div>
        </div>

        <div class="w-full px-24 text-white">
            <div id="notedly" class="relative rounded-3xl overflow-hidden glow-purple-large" :style="{ transform: `perspective(500px) rotateX(${rotation}deg)` }">
                <div class="border-pulse rounded-3xl">
                    <img src="https://i.imgur.com/vkLoRx8.png"
                         class="relative object-cover rounded-3xl w-full h-full z-10"
                         alt="Notedly AI User Interface" />
                </div>
            </div>
        </div>

        <div class="bg-gradient-to-b from-transparent via-[#18162e] to-[#18162e] w-full absolute bottom-0 h-screen">
            <div class="w-full h-1/3 flex items-end p-24">
<!--                <Link :href="route('landing')"-->
<!--                      class="heading-xl text-4xl mx-auto pt-24">-->
<!--                    Read the full story &rarr;-->
<!--                </Link>-->
            </div>

            <div class="w-full h-2/3 p-24 space-y-10 my-10">
                <div class="heading-lg">
                    More projects
                </div>

                <div class="w-full grid md:grid-cols-2 lg:grid-cols-3 gap-16">
                    <div v-for="project in projects.slice(0, 3)"
                         class=" w-full rounded-2xl flex flex-col gap-2 p-6">
                            <img :src="project.icon"
                                 class="w-8 h-8 rounded-full"
                                 :alt="`${project.name} Logo`" />

                        <span class="heading-lg">
<!--                              :style="`text-shadow: 2px 2px 0 #000, 4px 4px 0 ${project.color};`">-->
                            <!-- 2px 2px 0 #000,  -->
                            {{ project.name }}
                        </span>

                        <span class="text-secondary text-white leading-relaxed">
                            {{ project.description }}
                        </span>

                        <span class="heading-xl text-left text-2xl">
                            Read &rarr;
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import { Link } from '@inertiajs/vue3';
import Meteors from "@/Components/Decoration/Meteors.vue";
import Stars from "@/Components/Decoration/Stars.vue";
import HoverArrow from "@/Components/Decoration/HoverArrow.vue";
import projects from "@/config/projects";

export default {
    name: "NotedlyDisplay",

    components: {HoverArrow, Stars, Meteors, Link},

    created () {
        window.addEventListener('scroll', this.handleScroll);
    },

    unmounted () {
        window.removeEventListener('scroll', this.handleScroll);
    },

    setup() {
        return {
            projects
        }
    },

    data() {
        return {
            rotation: 10,
        };
    },

    methods: {
        handleScroll() {
            const element = document.getElementById('notedly');
            const height = element.offsetTop - window.scrollY;
            const rotationValue = 10 + ((height) / 50);
            const scaleValue = height / 250;

            if (rotationValue > 0) {
                this.rotation = rotationValue;
            } else {
                this.rotation = 0;
            }

            if (scaleValue > 0) {
                this.element.scale = scaleValue + '%';
            }
            //
            //
            // const element2 = document.getElementById('notedly-end');
            // const height2 = element2.offsetTop - window.scrollY;
            // const rotationValue2 = 10 + ((height2) / 50);
            // const scaleValue2 = height2 / 250;
            //
            // if (rotationValue2 > 0) {
            //     this.rotation = rotationValue2;
            // } else {
            //     this.rotation = 0;
            // }
            //
            // if (scaleValue2 > 0) {
            //     this.element.scale = scaleValue2 + '%';
            // }
        },
    },
}
</script>

<style scoped>
.glow-purple-large {
    box-shadow: 0 0 200px rgba(110, 103, 238, 0.2);
}
.glow-purple-small {
    box-shadow: 0 0 20px rgba(110, 103, 238, 0.1);
}
</style>
