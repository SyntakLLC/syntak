<template>
    <AppLayout>
        <div class="relative h-full w-full">
            <!-- Stars and Meteors for ambiance -->
            <Meteors />
            <Stars class="opacity-50" />

            <div
                class="relative max-w-2xl mx-auto md:border-x border-color h-full pb-16 md:pb-40"
            >
                <!-- <VerticalBars /> -->

                <!-- Hero Section -->
                <div class="heading-xl relative py-7 px-4 z-[5]">
                    Notedly AI
                </div>

                <!-- Hero Stats Section -->
                <div class="px-4 space-y-4 mb-16">
                    <div
                        class="heading-sm text-center-desktop text-white opacity-80"
                    >
                        AI-Powered Study Assistant
                    </div>
                    <div
                        class="grid grid-cols-3 gap-4 py-6 text-center-desktop"
                    >
                        <div>
                            <div class="heading-xl text-2xl md:text-3xl">
                                90k+
                            </div>
                            <div class="text-secondary-light text-sm">
                                Active Users
                            </div>
                        </div>
                        <div>
                            <div class="heading-xl text-2xl md:text-3xl">
                                $70k
                            </div>
                            <div class="text-secondary-light text-sm">ARR</div>
                        </div>
                        <div>
                            <div class="heading-xl text-2xl md:text-3xl">
                                5mo
                            </div>
                            <div class="text-secondary-light text-sm">
                                Development time
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Main Screenshot Section -->
                <div class="relative w-full px-4">
                    <div
                        id="notedly-case"
                        class="relative rounded-3xl overflow-hidden glow-purple-large"
                        :style="{
                            transform: `perspective(500px) rotateX(${rotation}deg)`,
                        }"
                    >
                        <div class="border-pulse rounded-3xl">
                            <img
                                src="../../../img/notedly.png"
                                class="relative object-cover rounded-3xl w-full h-full z-10 select-none"
                                alt="Notedly AI User Interface"
                            />
                        </div>
                    </div>
                </div>

                <!-- Content Sections -->
                <div class="px-4 mt-24 space-y-24">
                    <!-- Challenge Section -->
                    <section class="space-y-6">
                        <h2 class="heading-xl text-2xl md:text-3xl">
                            The Challenge
                        </h2>
                        <p class="text-secondary-light leading-relaxed">
                            Students worldwide struggle with effective study
                            methods and understanding complex topics.
                            Traditional study aids often fall short in providing
                            personalized, interactive learning experiences.
                        </p>
                    </section>

                    <!-- Solution Section -->
                    <section class="space-y-6">
                        <h2 class="heading-xl text-2xl md:text-3xl">
                            Our Solution
                        </h2>
                        <p class="text-secondary-light leading-relaxed">
                            We built an AI-powered platform that transforms the
                            way students learn:
                        </p>
                        <ul class="space-y-4">
                            <li class="flex items-start gap-3">
                                <div
                                    class="mt-1 w-5 h-5 rounded-full bg-brand-500 flex items-center justify-center"
                                >
                                    <span class="text-xs">1</span>
                                </div>
                                <div>
                                    <h3 class="heading-lg">
                                        Smart Note Taking
                                    </h3>
                                    <p class="text-secondary-light">
                                        AI-powered note organization and
                                        enhancement
                                    </p>
                                </div>
                            </li>
                            <li class="flex items-start gap-3">
                                <div
                                    class="mt-1 w-5 h-5 rounded-full bg-brand-500 flex items-center justify-center"
                                >
                                    <span class="text-xs">2</span>
                                </div>
                                <div>
                                    <h3 class="heading-lg">
                                        Interactive Learning
                                    </h3>
                                    <p class="text-secondary-light">
                                        Dynamic quizzes and explanations
                                    </p>
                                </div>
                            </li>
                            <li class="flex items-start gap-3">
                                <div
                                    class="mt-1 w-5 h-5 rounded-full bg-brand-500 flex items-center justify-center"
                                >
                                    <span class="text-xs">3</span>
                                </div>
                                <div>
                                    <h3 class="heading-lg">
                                        24/7 Study Assistant
                                    </h3>
                                    <p class="text-secondary-light">
                                        Always-available AI tutor
                                    </p>
                                </div>
                            </li>
                        </ul>
                    </section>

                    <!-- Technical Implementation -->
                    <section class="space-y-8">
                        <h2 class="heading-xl text-2xl md:text-3xl">
                            Technical Implementation
                        </h2>

                        <!-- Tech Stack Grid -->
                        <div class="grid grid-cols-2 gap-4">
                            <div
                                class="bg-secondary/20 rounded-xl p-4 border border-color"
                            >
                                <div class="heading-lg">Frontend</div>
                                <p class="text-secondary-light text-sm">
                                    Vue.js, TailwindCSS
                                </p>
                            </div>
                            <div
                                class="bg-secondary/20 rounded-xl p-4 border border-color"
                            >
                                <div class="heading-lg">Backend</div>
                                <p class="text-secondary-light text-sm">
                                    Laravel, MySQL
                                </p>
                            </div>
                            <div
                                class="bg-secondary/20 rounded-xl p-4 border border-color"
                            >
                                <div class="heading-lg">AI</div>
                                <p class="text-secondary-light text-sm">
                                    OpenAI, LangChain
                                </p>
                            </div>
                            <div
                                class="bg-secondary/20 rounded-xl p-4 border border-color"
                            >
                                <div class="heading-lg">Infrastructure</div>
                                <p class="text-secondary-light text-sm">
                                    AWS, Redis
                                </p>
                            </div>
                        </div>

                        <!-- Feature Showcase -->
                        <div class="mt-12 space-y-12">
                            <!-- Feature 1 -->
                            <div class="relative">
                                <div class="heading-lg mb-4">Screenshots</div>
                                <div
                                    class="aspect-video rounded-xl overflow-hidden border border-color"
                                >
                                    <img
                                        src="../../../img/notedly-notes.png"
                                        class="w-full h-full object-cover"
                                        alt="Notedly Notes Interface"
                                    />
                                </div>
                            </div>

                            <!-- Feature 2 -->
                            <div class="relative">
                                <!-- <div class="heading-lg mb-4">
                                    AI Study Assistant -->
                                <!-- </div> -->
                                <div
                                    class="aspect-video rounded-xl overflow-hidden border border-color"
                                >
                                    <img
                                        src="../../../img/notedly-dashboard.png"
                                        class="w-full h-full object-cover"
                                        alt="Notedly AI Assistant Interface"
                                    />
                                </div>
                            </div>
                        </div>
                    </section>

                    <!-- Results Section -->
                    <section class="space-y-8">
                        <h2 class="heading-xl text-2xl md:text-3xl">Results</h2>

                        <!-- Growth Stats -->
                        <div class="grid grid-cols-2 gap-4">
                            <div
                                class="bg-secondary/20 rounded-xl p-6 border border-color"
                            >
                                <div class="heading-xl text-4xl mb-2">94%</div>
                                <p
                                    class="text-secondary-light text-center-desktop"
                                >
                                    User Retention Rate
                                </p>
                            </div>
                            <div
                                class="bg-secondary/20 rounded-xl p-6 border border-color"
                            >
                                <div class="heading-xl text-4xl mb-2">4.8</div>
                                <p
                                    class="text-secondary-light text-center-desktop"
                                >
                                    App Store Rating
                                </p>
                            </div>
                        </div>

                        <!-- Growth Chart -->
                        <!-- <div
                            class="relative h-64 bg-secondary/20 rounded-xl p-6 border border-color"
                        >
                            <GrowthChart />
                        </div> -->
                    </section>

                    <!-- Testimonials -->
                    <section class="space-y-8">
                        <h2 class="heading-xl text-2xl md:text-3xl">
                            User Testimonials
                        </h2>
                        <div class="grid gap-4">
                            <div
                                v-for="testimonial in testimonials"
                                class="bg-secondary/20 rounded-xl p-6 border border-color"
                            >
                                <p class="text-secondary-light italic mb-4">
                                    "{{ testimonial.quote }}"
                                </p>
                                <div class="flex items-center gap-3">
                                    <img
                                        :src="testimonial.avatar"
                                        class="w-10 h-10 rounded-full"
                                        :alt="testimonial.name"
                                    />
                                    <div>
                                        <div class="heading-lg">
                                            {{ testimonial.name }}
                                        </div>
                                        <div
                                            class="text-secondary-light text-sm"
                                        >
                                            {{ testimonial.title }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                    <!-- Next Steps -->
                    <section class="space-y-6">
                        <h2 class="heading-xl text-2xl md:text-3xl">
                            What's Next
                        </h2>
                        <p class="text-secondary-light leading-relaxed">
                            We're continuing to innovate and expand Notedly's
                            capabilities:
                        </p>
                        <div class="space-y-4">
                            <div class="flex items-center gap-3">
                                <div
                                    class="w-2 h-2 rounded-full bg-brand-500"
                                ></div>
                                <p class="text-secondary-light">
                                    Mobile app development
                                </p>
                            </div>
                            <div class="flex items-center gap-3">
                                <div
                                    class="w-2 h-2 rounded-full bg-brand-500"
                                ></div>
                                <p class="text-secondary-light">
                                    Advanced AI features
                                </p>
                            </div>
                            <div class="flex items-center gap-3">
                                <div
                                    class="w-2 h-2 rounded-full bg-brand-500"
                                ></div>
                                <p class="text-secondary-light">
                                    International expansion
                                </p>
                            </div>
                        </div>
                    </section>

                    <!-- CTA Section -->
                    <section class="relative">
                        <div
                            class="absolute inset-0 bg-gradient-to-r from-brand-500/20 to-transparent rounded-xl"
                        ></div>
                        <div class="relative p-8 text-center space-y-4">
                            <h2 class="heading-xl text-2xl md:text-3xl">
                                Ready to transform your learning?
                            </h2>
                            <a
                                href="https://notedly.ai"
                                target="_blank"
                                class="inline-block bg-brand-500 text-white px-6 py-3 rounded-lg heading-lg"
                            >
                                Try Notedly AI
                                <span class="ml-2">→</span>
                            </a>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </AppLayout>
</template>

<script lang="ts">
import AppLayout from "@/Layouts/AppLayout.vue";
import VerticalBars from "@/Components/Decoration/VerticalBars.vue";
import Meteors from "@/Components/Decoration/Meteors.vue";
import Stars from "@/Components/Decoration/Stars.vue";
// import GrowthChart from "@/Components/Charts/GrowthChart.vue";

export default {
    components: {
        AppLayout,
        VerticalBars,
        Meteors,
        Stars,
        // GrowthChart,
    },

    data() {
        return {
            rotation: 10,
            testimonials: [
                {
                    quote: "Notedly has completely transformed how I study. The AI assistant feels like having a personal tutor available 24/7.",
                    name: "Sarah Chen",
                    title: "Medical Student",
                    avatar: "../../../img/testimonials/sarah.jpg",
                },
                {
                    quote: "The smart note organization has saved me countless hours. It's like having a second brain.",
                    name: "James Wilson",
                    title: "Law Student",
                    avatar: "../../../img/testimonials/james.jpg",
                },
            ],
        };
    },

    created() {
        window.addEventListener("scroll", this.handleScroll);
    },

    unmounted() {
        window.removeEventListener("scroll", this.handleScroll);
    },

    methods: {
        handleScroll() {
            const element = document.getElementById("notedly-case");
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
        },
    },
};
</script>

<style scoped>
.glow-purple-large {
    box-shadow: 0 0 200px rgba(110, 103, 238, 0.2);
}
</style>
