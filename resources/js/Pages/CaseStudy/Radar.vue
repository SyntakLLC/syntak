<template>
    <AppLayout>
        <div class="relative h-full w-full">
            <!-- Background Effects -->
            <Meteors />
            <Stars class="opacity-50" />

            <div
                class="relative max-w-3xl mx-auto md:border-x border-color h-full pb-16 md:pb-40"
            >
                <!-- Hero Section -->
                <div class="heading-xl relative py-7 px-4 z-5">Radar AI</div>

                <!-- Hero Stats Section -->
                <div class="px-4 space-y-4 mb-16">
                    <div
                        class="heading-sm text-center-desktop text-white opacity-80"
                    >
                        AI-Powered Job Application Automation
                    </div>
                    <div
                        class="grid grid-cols-3 gap-4 py-6 text-center-desktop"
                    >
                        <div>
                            <div class="heading-xl text-2xl md:text-3xl">
                                50k+
                            </div>
                            <div class="text-secondary-light text-sm">
                                Applications Sent
                            </div>
                        </div>
                        <div>
                            <div class="heading-xl text-2xl md:text-3xl">
                                $50,000
                            </div>
                            <div class="text-secondary-light text-sm">MRR</div>
                        </div>
                        <div>
                            <div class="heading-xl text-2xl md:text-3xl">
                                98%
                            </div>
                            <div class="text-secondary-light text-sm">
                                Success Rate
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Main Screenshot Section -->
                <div class="relative w-full px-4">
                    <div
                        id="radar-landing-screenshot"
                        class="relative rounded-3xl overflow-hidden glow-green-large"
                        :style="{
                            transform: `perspective(500px) rotateX(${rotation}deg)`,
                        }"
                    >
                        <div class="border-pulse rounded-3xl">
                            <img
                                src="../../../img/radar-landing.png"
                                class="relative object-cover rounded-3xl w-full h-full z-10 select-none"
                                alt="Radar AI Dashboard"
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
                                We needed to build a complex automation system
                                that could:
                            </p>
                            <ul class="space-y-3 text-secondary-light">
                                <li>
                                    • Navigate and interact with multiple job
                                    board websites
                                </li>
                                <li>
                                    • Process and analyze job descriptions in
                                    real-time
                                </li>
                                <li>
                                    • Generate personalized cover letters using
                                    AI
                                </li>
                                <li>
                                    • Handle complex browser automation at scale
                                </li>
                            </ul>
                        </section>

                        <section class="space-y-6">
                            <h2 class="heading-xl text-2xl md:text-3xl">
                                Our Solution
                            </h2>
                            <p class="text-secondary-light leading-relaxed">
                                We built an AI-powered platform that automates
                                the entire job application process:
                            </p>
                            <ul class="space-y-4 relative">
                                <!-- Vertical connecting line -->
                                <div
                                    class="absolute left-[0.6rem] top-4 bottom-2 w-0.5 bg-linear-to-b from-brand-500 to-transparent"
                                ></div>

                                <li class="flex items-start gap-3">
                                    <div
                                        class="mt-1 w-5 h-5 shrink-0 rounded-full bg-[#50ab88] flex items-center justify-center"
                                    >
                                        <span class="text-xs">1</span>
                                    </div>
                                    <div>
                                        <h3 class="heading-sm text-white">
                                            Intelligent Job Matching
                                        </h3>
                                        <p class="text-secondary-light">
                                            AI-powered job relevancy scoring and
                                            matching
                                        </p>
                                    </div>
                                </li>

                                <li class="flex items-start gap-3">
                                    <div
                                        class="mt-1 w-5 h-5 shrink-0 rounded-full bg-[#50ab88] flex items-center justify-center"
                                    >
                                        <span class="text-xs">2</span>
                                    </div>
                                    <div>
                                        <h3 class="heading-sm text-white">
                                            Automated Applications
                                        </h3>
                                        <p class="text-secondary-light">
                                            Browser automation for seamless job
                                            applications
                                        </p>
                                    </div>
                                </li>

                                <li class="flex items-start gap-3">
                                    <div
                                        class="mt-1 w-5 h-5 shrink-0 rounded-full bg-[#50ab88] flex items-center justify-center"
                                    >
                                        <span class="text-xs">3</span>
                                    </div>
                                    <div>
                                        <h3 class="heading-sm text-white">
                                            AI Cover Letters
                                        </h3>
                                        <p class="text-secondary-light">
                                            Dynamic cover letter generation
                                            tailored to each job
                                        </p>
                                    </div>
                                </li>

                                <li class="flex items-start gap-3">
                                    <div
                                        class="mt-1 w-5 h-5 shrink-0 rounded-full bg-[#50ab88] flex items-center justify-center"
                                    >
                                        <span class="text-xs">4</span>
                                    </div>
                                    <div>
                                        <h3 class="heading-sm text-white">
                                            Analytics Dashboard
                                        </h3>
                                        <p class="text-secondary-light">
                                            Real-time tracking of application
                                            status and metrics
                                        </p>
                                    </div>
                                </li>
                            </ul>
                        </section>
                    </div>
                </div>

                <!-- Technical Implementation Section -->
                <section class="mt-24 space-y-8">
                    <h2 class="px-4 heading-xl text-2xl md:text-3xl">
                        Technical Implementation
                    </h2>

                    <!-- Feature Screenshots -->
                    <div class="flex flex-col gap-8">
                        <!-- Feature 1: Job Matching -->
                        <div class="space-y-8">
                            <div class="px-4">
                                <h3 class="heading-xl text-xl md:text-2xl mb-4">
                                    Intelligent Job Matching
                                </h3>
                                <p
                                    class="text-secondary-light leading-relaxed text-center-desktop"
                                >
                                    Our AI analyzes job descriptions and user
                                    profiles to find the perfect matches,
                                    considering skills, experience, and company
                                    culture fit.
                                </p>
                            </div>
                            <div class="relative w-full px-4">
                                <div
                                    class="relative rounded-3xl overflow-hidden glow-green-small"
                                >
                                    <img
                                        src="../../../img/radar-match-score.png"
                                        class="w-full h-full object-cover rounded-3xl"
                                        alt="Radar AI Job Matching"
                                    />
                                </div>
                            </div>
                        </div>

                        <!-- Feature 2: Application Automation -->
                        <div class="space-y-8">
                            <div class="px-4">
                                <h3 class="heading-xl text-xl md:text-2xl mb-4">
                                    Automated Application Process
                                </h3>
                                <p
                                    class="text-secondary-light leading-relaxed text-center-desktop"
                                >
                                    Our browser automation technology handles
                                    the entire application process, from form
                                    filling to document uploads, with perfect
                                    accuracy.
                                </p>
                            </div>
                            <div class="relative w-full px-4">
                                <div
                                    class="relative rounded-3xl overflow-hidden glow-green-small"
                                >
                                    <img
                                        src="../../../img/radar-extension.png"
                                        class="w-full h-full object-cover rounded-3xl"
                                        alt="Radar AI Automation"
                                    />
                                </div>
                            </div>
                        </div>

                        <!-- Feature 3: AI Cover Letters -->
                        <div class="space-y-8">
                            <div class="px-4">
                                <h3 class="heading-xl text-xl md:text-2xl mb-4">
                                    AI-Generated Cover Letters
                                </h3>
                                <p
                                    class="text-secondary-light leading-relaxed text-center-desktop"
                                >
                                    Our advanced language models create
                                    personalized, compelling cover letters that
                                    highlight relevant experience for each
                                    position.
                                </p>
                            </div>
                            <div class="relative w-full px-4">
                                <div
                                    class="relative rounded-3xl overflow-hidden glow-green-small"
                                >
                                    <img
                                        src="../../../img/radar-dashboard.png"
                                        class="w-full h-full object-cover rounded-3xl"
                                        alt="Radar AI Cover Letters"
                                    />
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Tech Stack Section -->
                    <div class="relative">
                        <div
                            class="absolute inset-0 border-none border-color"
                        ></div>

                        <!-- Tech Stack Grid -->
                        <div
                            class="px-4 relative grid grid-cols-2 gap-4 md:grid-cols-4 py-12"
                        >
                            <div class="space-y-2">
                                <div class="heading-sm text-white">
                                    Frontend
                                </div>
                                <ul class="space-y-1 text-secondary-light">
                                    <li>Vue.js</li>
                                    <li>TailwindCSS</li>
                                    <li>TypeScript</li>
                                </ul>
                            </div>

                            <div class="space-y-2">
                                <div class="heading-sm text-white">Backend</div>
                                <ul class="space-y-1 text-secondary-light">
                                    <li>Node.js</li>
                                    <li>Express</li>
                                    <li>PostgreSQL</li>
                                </ul>
                            </div>

                            <div class="space-y-2">
                                <div class="heading-sm text-white">AI/ML</div>
                                <ul class="space-y-1 text-secondary-light">
                                    <li>OpenAI GPT-4</li>
                                    <li>LangChain</li>
                                    <li>Vector DB</li>
                                </ul>
                            </div>

                            <div class="space-y-2">
                                <div class="heading-sm text-white">
                                    Infrastructure
                                </div>
                                <ul class="space-y-1 text-secondary-light">
                                    <li>AWS</li>
                                    <li>Docker</li>
                                    <li>Kubernetes</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- CTA Section -->
                <section class="mt-12 relative">
                    <div class="relative p-8 text-center bg-secondary">
                        <h2 class="heading-xl text-2xl md:text-3xl mb-4">
                            Ready to automate your job search?
                        </h2>

                        <a href="https://useradar.ai" target="_blank">
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
            const element = document.getElementById("radar-landing-screenshot");
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
.glow-green-large {
    box-shadow: 0 0 200px rgba(80, 171, 136, 0.2);
}

.glow-green-small {
    box-shadow: 0 0 50px rgba(80, 171, 136, 0.1);
}
</style>
