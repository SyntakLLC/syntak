<template>
    <swiper
        :modules="[SwiperAutoplay, SwiperPagination, SwiperNavigation]"
        :slides-per-view="isMobile ? 1.1 : 1.2"
        :centered-slides="true"
        :space-between="20"
        :pagination="{ clickable: true }"
        :navigation="true"
        :autoplay="{ delay: 5000, disableOnInteraction: false }"
        :mousewheel="true"
        class="project-carousel"
    >
        <swiper-slide v-for="(project, index) in projects" :key="index">
            <div class="mx-auto max-w-5xl">
                <div
                    class="relative rounded-xl p-4 h-[400px] flex flex-col justify-center items-center"
                    :style="{
                        backgroundColor: project.color,
                    }"
                >
                    <Noise />

                    <!-- <img
                        class="w-full h-auto md:h-[300px] md:w-auto rounded-lg my-8 mx-auto object-contain glow-purple"
                        :src="project.backgroundImage"
                    ></img> -->

                    <div class="text-white text-left md:text-center pb-2">
                        <h2
                            class="text-2xl sm:text-3xl md:text-4xl font-display tracking-tight mb-4"
                        >
                            {{ project.title }}
                        </h2>
                        <p
                            class="text-base leading-tight mb-6 max-w-2xl mx-auto"
                        >
                            {{ project.description }}
                        </p>

                        <a :href="project.href">
                            <SecondaryButton>
                                Open project
                                <HoverArrow color="primary" />
                            </SecondaryButton>
                        </a>
                    </div>
                </div>
            </div>
        </swiper-slide>
    </swiper>
</template>

<script>
import { Swiper, SwiperSlide } from "swiper/vue";
import { Autoplay, Pagination, Navigation } from "swiper/modules";
import { ArrowRightIcon } from "@heroicons/vue/24/outline";
import HoverArrow from "@/Components/Decoration/HoverArrow.vue";
import Noise from "@/Components/Decoration/Noise.vue";
import SecondaryButton from "@/Components/Buttons/SecondaryButton.vue";
import projects from "@/config/projects";

// Import Swiper styles
import "swiper/css";
import "swiper/css/pagination";
import "swiper/css/navigation";

import { ref, onMounted } from "vue";

export default {
    name: "ProjectCarousel",

    components: {
        Swiper,
        SwiperSlide,
        ArrowRightIcon,
        SecondaryButton,
        HoverArrow,
        Noise,
    },

    setup() {
        const isMobile = ref(window.innerWidth < 768);

        onMounted(() => {
            window.addEventListener("resize", () => {
                isMobile.value = window.innerWidth < 768;
            });
        });

        return {
            SwiperAutoplay: Autoplay,
            SwiperPagination: Pagination,
            SwiperNavigation: Navigation,
            projects,
            isMobile,
        };
    },
};
</script>

<style>
.project-carousel {
    padding: 2rem 0;
    width: 100%;
    overflow: hidden;
}

.swiper {
    overflow: visible;
    position: relative;
}

.swiper-slide {
    opacity: 0.4;
    transition: opacity 0.3s ease;
}

.swiper-slide-active {
    opacity: 1;
}

.swiper-button-next,
.swiper-button-prev {
    @apply text-white/75 hover:text-white transition-colors !important;
}

.swiper-pagination {
    @apply bottom-0 !important;
}

.swiper-pagination-bullet {
    @apply bg-white/50 !important;
    width: 8px !important;
    height: 8px !important;
    margin: 0 6px !important;
}

.swiper-pagination-bullet-active {
    @apply bg-white !important;
    width: 16px !important;
    border-radius: 4px !important;
}

.glow-purple {
    box-shadow: 0 0 200px #6e67ee80;
}
</style>
