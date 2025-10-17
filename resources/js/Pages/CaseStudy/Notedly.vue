<template>
    <AppLayout>
        <div class="relative h-full w-full">
            <!-- Stars and Meteors for ambiance -->
            <Meteors />
            <Stars class="opacity-50" />

            <div
                class="relative max-w-3xl mx-auto md:border-x border-color h-full pb-16 md:pb-40"
            >
                <!-- <VerticalBars /> -->

                <!-- Hero Section -->
                <div class="heading-xl relative py-7 px-4 z-5">
                    Notedly AI
                </div>

                <!-- Hero Stats Section -->
                <div class="px-4 space-y-4 mb-16">
                    <div
                        class="heading-sm text-center-desktop text-white opacity-80"
                    >
                        Full-Stack AI Application Development
                    </div>
                    <div
                        class="grid grid-cols-3 gap-4 py-6 text-center-desktop"
                    >
                        <div>
                            <div class="heading-xl text-2xl md:text-3xl">
                                90k+
                            </div>
                            <div class="text-secondary-light text-sm">
                                Total Users
                            </div>
                        </div>
                        <div>
                            <div class="heading-xl text-2xl md:text-3xl">
                                $70,000
                            </div>
                            <div class="text-secondary-light text-sm">ARR</div>
                        </div>
                        <div>
                            <div class="heading-xl text-2xl md:text-3xl">
                                99.9%
                            </div>
                            <div class="text-secondary-light text-sm">
                                Uptime
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
                <div class="px-4 mt-24">
                    <div class="grid md:grid-cols-2 gap-12 md:gap-24">
                        <section class="space-y-6">
                            <h2 class="heading-xl text-2xl md:text-3xl">
                                Technical Challenge
                            </h2>
                            <p class="text-secondary-light leading-relaxed">
                                We needed to build a scalable, real-time
                                application that could handle:
                            </p>
                            <ul class="space-y-3 text-secondary-light">
                                <li>
                                    • Processing and analyzing thousands of
                                    documents per minute
                                </li>
                                <li>
                                    • Real-time collaborative editing with
                                    conflict resolution
                                </li>
                                <li>
                                    • Complex AI integrations with sub-second
                                    response times
                                </li>
                                <li>
                                    • Enterprise-grade security and data privacy
                                </li>
                            </ul>
                        </section>

                        <section class="space-y-6">
                            <h2 class="heading-xl text-2xl md:text-3xl">
                                Our Solution
                            </h2>
                            <p class="text-secondary-light leading-relaxed">
                                We built an AI-powered platform that transforms
                                the way students learn:
                            </p>
                            <ul class="space-y-4 relative">
                                <!-- Vertical connecting line -->
                                <div
                                    class="absolute left-[0.6rem] top-4 bottom-2 w-0.5 bg-linear-to-b from-brand-500 to-transparent"
                                ></div>

                                <li class="flex items-start gap-3">
                                    <div
                                        class="mt-1 w-5 h-5 shrink-0 rounded-full bg-brand-500 flex items-center justify-center"
                                    >
                                        <span class="text-xs">1</span>
                                    </div>
                                    <div>
                                        <h3 class="heading-sm text-white">
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
                                        class="mt-1 w-5 h-5 shrink-0 rounded-full bg-brand-500 flex items-center justify-center"
                                    >
                                        <span class="text-xs">2</span>
                                    </div>
                                    <div>
                                        <h3 class="heading-sm text-white">
                                            Interactive Learning
                                        </h3>
                                        <p class="text-secondary-light">
                                            Dynamic quizzes and explanations
                                        </p>
                                    </div>
                                </li>
                                <li class="flex items-start gap-3">
                                    <div
                                        class="mt-1 w-5 h-5 shrink-0 rounded-full bg-brand-500 flex items-center justify-center"
                                    >
                                        <span class="text-xs">3</span>
                                    </div>
                                    <div>
                                        <h3 class="heading-sm text-white">
                                            24/7 Study Assistant
                                        </h3>
                                        <p class="text-secondary-light">
                                            Always-available AI tutor
                                        </p>
                                    </div>
                                </li>
                                <li class="flex items-start gap-3">
                                    <div
                                        class="mt-1 w-5 h-5 shrink-0 rounded-full bg-brand-500 flex items-center justify-center"
                                    >
                                        <span class="text-xs">4</span>
                                    </div>
                                    <div>
                                        <h3 class="heading-sm text-white">
                                            Real-time Collaboration
                                        </h3>
                                        <p class="text-secondary-light">
                                            Study with peers seamlessly
                                        </p>
                                    </div>
                                </li>
                                <li class="flex items-start gap-3">
                                    <div
                                        class="mt-1 w-5 h-5 shrink-0 rounded-full bg-brand-500 flex items-center justify-center"
                                    >
                                        <span class="text-xs">5</span>
                                    </div>
                                    <div>
                                        <h3 class="heading-sm text-white">
                                            Progress Tracking
                                        </h3>
                                        <p class="text-secondary-light">
                                            Analytics and learning insights
                                        </p>
                                    </div>
                                </li>
                            </ul>
                        </section>
                    </div>
                </div>

                <!-- Technical Implementation - Diagonal Layout -->
                <section class="mt-24 space-y-8">
                    <h2 class="px-4 heading-xl text-2xl md:text-3xl">
                        Technical Implementation
                    </h2>

                    <div class="relative">
                        <!-- Replace diagonal gradient with subtle border -->
                        <div
                            class="absolute inset-0 border-y border-color"
                        ></div>

                        <!-- Tech Stack Grid -->
                        <div
                            class="px-4 relative grid grid-cols-2 gap-4 md:grid-cols-4 py-12"
                        >
                            <div
                                class="bg-secondary/10 backdrop-blur-sm rounded-xl p-6 border border-color"
                            >
                                <div class="heading-sm text-white">
                                    Frontend
                                </div>
                                <p class="text-secondary-light text-sm">
                                    Vue.js, TailwindCSS
                                </p>
                            </div>
                            <div
                                class="bg-secondary/10 backdrop-blur-sm rounded-xl p-6 border border-color"
                            >
                                <div class="heading-sm text-white">Backend</div>
                                <p class="text-secondary-light text-sm">
                                    Laravel, MySQL
                                </p>
                            </div>
                            <div
                                class="bg-secondary/10 backdrop-blur-sm rounded-xl p-6 border border-color"
                            >
                                <div class="heading-sm text-white">AI</div>
                                <p class="text-secondary-light text-sm">
                                    LLMs, Impulse
                                </p>
                            </div>
                            <div
                                class="bg-secondary/10 backdrop-blur-sm rounded-xl p-6 border border-color"
                            >
                                <div class="heading-sm text-white">
                                    Infrastructure
                                </div>
                                <p class="text-secondary-light text-sm">
                                    AWS, RDS
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Feature Showcase - Overlapping Cards -->
                    <div class="px-4 pt-12 space-y-24">
                        <div class="relative md:flex items-center gap-8">
                            <div class="md:w-2/5 space-y-4 z-10">
                                <h3 class="heading-sm text-white text-xl">
                                    Smart Note Organization
                                </h3>
                                <p class="text-secondary-light leading-relaxed">
                                    Revolutionary AI-powered system that
                                    automatically categorizes and enhances
                                    student notes.
                                </p>
                                <ul class="space-y-2">
                                    <li class="flex items-center gap-2">
                                        <div
                                            class="w-1.5 h-1.5 rounded-full bg-brand-500"
                                        ></div>
                                        <span class="text-secondary-light"
                                            >Auto-categorization</span
                                        >
                                    </li>
                                    <!-- ... more features ... -->
                                </ul>
                            </div>
                            <div class="md:w-3/5 mt-8 md:mt-0">
                                <div
                                    class="relative aspect-video rounded-xl overflow-hidden border border-color glow-purple-small transform md:rotate-3"
                                >
                                    <img
                                        src="../../../img/notedly-notes.png"
                                        class="w-full h-full object-cover"
                                        alt="Notedly Notes Interface"
                                    />
                                </div>
                            </div>
                        </div>

                        <!-- Reversed layout for second feature -->
                        <div
                            class="relative md:flex items-center gap-8 flex-row-reverse"
                        >
                            <div class="md:w-2/5 space-y-4 z-10">
                                <h3 class="heading-sm text-white text-xl">
                                    Interactive Learning
                                </h3>
                                <p class="text-secondary-light leading-relaxed">
                                    Dynamic quiz generation and personalized
                                    explanations powered by advanced AI.
                                </p>
                                <ul class="space-y-2">
                                    <li class="flex items-center gap-2">
                                        <div
                                            class="w-1.5 h-1.5 rounded-full bg-brand-500"
                                        ></div>
                                        <span class="text-secondary-light"
                                            >Smart quiz generation</span
                                        >
                                    </li>
                                    <li class="flex items-center gap-2">
                                        <div
                                            class="w-1.5 h-1.5 rounded-full bg-brand-500"
                                        ></div>
                                        <span class="text-secondary-light"
                                            >Adaptive difficulty</span
                                        >
                                    </li>
                                    <li class="flex items-center gap-2">
                                        <div
                                            class="w-1.5 h-1.5 rounded-full bg-brand-500"
                                        ></div>
                                        <span class="text-secondary-light"
                                            >Real-time feedback</span
                                        >
                                    </li>
                                </ul>
                            </div>
                            <div class="md:w-3/5 mt-8 md:mt-0">
                                <div
                                    class="relative aspect-video rounded-xl overflow-hidden border border-color glow-purple-small transform md:-rotate-3"
                                >
                                    <img
                                        src="../../../img/notedly-dashboard.png"
                                        class="w-full h-full object-cover"
                                        alt="Notedly Quiz Interface"
                                    />
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Results Section - Replace floating elements -->
                <section class="px-4 mt-24 space-y-8">
                    <h2 class="heading-xl text-2xl md:text-3xl">
                        Technical Achievements
                    </h2>

                    <div class="relative">
                        <!-- Remove floating gradient elements -->
                        <div class="relative grid grid-cols-2 gap-4">
                            <div
                                class="bg-secondary/10 backdrop-blur-sm rounded-xl p-8 border border-color hover:border-brand-500/50 transition-colors"
                            >
                                <div
                                    class="text-white font-[MarvinVisions] font-bold text-4xl mb-2"
                                >
                                    <MechanicalCounter
                                        :start="0"
                                        :end="99.9"
                                        after="%"
                                    />
                                </div>
                                <p class="text-secondary-light">
                                    System Uptime
                                </p>
                            </div>
                            <div
                                class="bg-secondary/10 backdrop-blur-sm rounded-xl p-8 border border-color hover:border-brand-500/50 transition-colors"
                            >
                                <div
                                    class="text-white font-[MarvinVisions] font-bold text-4xl mb-2"
                                >
                                    <MechanicalCounter
                                        :start="0"
                                        :end="150"
                                        after="ms"
                                    />
                                </div>
                                <p class="text-secondary-light">
                                    Average Response Time
                                </p>
                            </div>
                            <div
                                class="bg-secondary/10 backdrop-blur-sm rounded-xl p-8 border border-color hover:border-brand-500/50 transition-colors"
                            >
                                <div
                                    class="text-white font-[MarvinVisions] font-bold text-4xl mb-2"
                                >
                                    <MechanicalCounter
                                        :start="0"
                                        :end="1000000"
                                        after="+"
                                    />
                                </div>
                                <p class="text-secondary-light">
                                    Daily API Requests
                                </p>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Next Steps -->
                <section class="mt-12 space-y-6 px-4">
                    <h2 class="heading-xl text-2xl md:text-3xl">
                        Technical Roadmap
                    </h2>
                    <p class="text-secondary-light leading-relaxed">
                        Our engineering team is focused on these key
                        initiatives:
                    </p>
                    <div class="space-y-4">
                        <div class="flex items-center gap-3">
                            <div
                                class="w-2 h-2 rounded-full bg-brand-500"
                            ></div>
                            <p class="text-secondary-light">
                                Native mobile apps with offline capabilities
                            </p>
                        </div>
                        <div class="flex items-center gap-3">
                            <div
                                class="w-2 h-2 rounded-full bg-brand-500"
                            ></div>
                            <p class="text-secondary-light">
                                GraphQL API implementation
                            </p>
                        </div>
                        <div class="flex items-center gap-3">
                            <div
                                class="w-2 h-2 rounded-full bg-brand-500"
                            ></div>
                            <p class="text-secondary-light">
                                Multi-region deployment architecture
                            </p>
                        </div>
                    </div>
                </section>

                <!-- CTA Section -->
                <section class="mt-12 relative">
                    <!-- <div
                        class="absolute inset-0 bg-linear-to-r from-brand-500/20 to-transparent"
                    ></div> -->
                    <div class="relative p-8 text-center bg-secondary">
                        <h2 class="heading-xl text-2xl md:text-3xl mb-4">
                            Want to see it in action?
                        </h2>

                        <a href="https://notedly.ai" target="_blank">
                            <SecondaryButton>
                                View Site
                                <HoverArrow color="primary" />
                            </SecondaryButton>
                        </a>
                    </div>
                </section>
            </div>
        </div>
    </AppLayout>
</template>

<script lang="ts">
import AppLayout from "@/Layouts/AppLayout.vue";
import VerticalBars from "@/Components/Decoration/VerticalBars.vue";
import Meteors from "@/Components/Decoration/Meteors.vue";
import Stars from "@/Components/Decoration/Stars.vue";
import MechanicalCounter from "@/Components/Decoration/MechanicalCounter.vue";
import SecondaryButton from "@/Components/Buttons/SecondaryButton.vue";
import HoverArrow from "@/Components/Decoration/HoverArrow.vue";

export default {
    components: {
        AppLayout,
        VerticalBars,
        Meteors,
        Stars,
        MechanicalCounter,
        SecondaryButton,
        HoverArrow,
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
                {
                    quote: "I've improved my grades significantly since using Notedly. The AI explanations are incredibly helpful.",
                    name: "Maria Rodriguez",
                    title: "Engineering Student",
                    avatar: "../../../img/testimonials/maria.jpg",
                },
                {
                    quote: "The collaborative features make group study sessions so much more productive.",
                    name: "David Park",
                    title: "Business Student",
                    avatar: "../../../img/testimonials/david.jpg",
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

.glow-purple-small {
    box-shadow: 0 0 50px rgba(110, 103, 238, 0.1);
}

/* Add hover effects */
/* .border-color {
    @apply border-gray-800/30 hover:border-brand-500/50 transition-colors;
} */
</style>
