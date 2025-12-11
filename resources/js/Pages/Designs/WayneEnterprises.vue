<script setup>
import { ref } from "vue";
import { Head } from "@inertiajs/vue3";
import DesignLayout from "@/Layouts/DesignLayout.vue";

const isNightMode = ref(true);

const heroDay = new URL('../../../designs/WayneEnterprises/hero-background-day.png', import.meta.url).href;
const heroNight = new URL('../../../designs/WayneEnterprises/hero-background-night.png', import.meta.url).href;

const navLinks = ["Investors", "Defense Contracts", "Careers", "Press"];

const divisions = [
    { title: "Wayne Security", desc: "Urban pacification & defense systems.", stat: "Active Contracts: 42" },
    { title: "Wayne Energy", desc: "Fusion power for a sustainable grid.", stat: "Output: 4.2 GW" },
    { title: "Wayne Biotech", desc: "Regenerative medicine & prosthetics.", stat: "Patents: 12,040" }
];

const innovations = [
    { id: "01", name: "The Tumbler Prototype", category: "Bridging Vehicle", status: "Classified" },
    { id: "02", name: "Memory Cloth", category: "Textiles", status: "In Production" },
    { id: "03", name: "Sonar Mapping", category: "Surveillance", status: "R&D Only" },
];

const press = [
    { date: "OCT 12", title: "Bruce Wayne returns to public eye at Gala." },
    { date: "SEP 28", title: "Q3 Earnings beat expectations by 14%." },
    { date: "AUG 15", title: "Merger with Daggett Industries rumored." },
];
</script>

<template>
    <Head>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Forum:wght@400;700;900&family=Manrope:wght@300;400;600&display=swap" rel="stylesheet">
    </Head>

    <div :class="['min-h-screen font-sans transition-colors duration-1000 ease-in-out selection:bg-emerald-500 selection:text-white', isNightMode ? 'bg-[#050b14] text-gray-300' : 'bg-[#f4f4f4] text-slate-600']">

        <nav class="absolute top-0 left-0 right-0 z-50 px-8 py-6 flex justify-between items-center">

            <div class="flex items-center gap-3">
                <div :class="['w-10 h-10 flex items-center justify-center border-2 transition-colors duration-1000', isNightMode ? 'border-white text-white' : 'border-slate-900 text-slate-900']">
                    <span class="font-serif font-bold text-xl">W</span>
                </div>
                <span :class="['hidden md:block text-xs tracking-[0.25em] font-bold uppercase transition-colors duration-1000', isNightMode ? 'text-white' : 'text-slate-900']">Wayne Ent.</span>
            </div>

            <div class="flex items-center gap-10">
                <div class="hidden md:flex gap-8">
                    <a v-for="link in navLinks" :key="link" href="#" :class="['text-[11px] font-bold uppercase tracking-widest hover:underline decoration-1 underline-offset-8 transition-colors duration-1000', isNightMode ? 'text-gray-400 hover:text-white' : 'text-slate-600 hover:text-slate-900']">
                        {{ link }}
                    </a>
                </div>

                <button
                    @click="isNightMode = !isNightMode"
                    :class="['relative w-14 h-7 border-2 transition-colors duration-300 flex items-center', isNightMode ? 'border-gray-600 bg-transparent' : 'border-gray-800 bg-transparent']"
                >
                    <div :class="['absolute w-5 h-5 bg-white transition-all duration-500 cubic-bezier(0.19, 1, 0.22, 1) flex items-center justify-center shadow-sm', isNightMode ? 'left-1 bg-slate-800' : 'left-7 bg-slate-100']">
                        <svg v-if="!isNightMode" xmlns="http://www.w3.org/2000/svg" class="w-3.5 h-3.5" viewBox="0 0 24 24" fill="none" stroke="#F59E0B" stroke-width="2.5" stroke-linecap="square" stroke-linejoin="miter"><circle cx="12" cy="12" r="5"></circle><line x1="12" y1="1" x2="12" y2="3"></line><line x1="12" y1="21" x2="12" y2="23"></line><line x1="4.22" y1="4.22" x2="5.64" y2="5.64"></line><line x1="18.36" y1="18.36" x2="19.78" y2="19.78"></line><line x1="1" y1="12" x2="3" y2="12"></line><line x1="21" y1="12" x2="23" y2="12"></line><line x1="4.22" y1="19.78" x2="5.64" y2="18.36"></line><line x1="18.36" y1="5.64" x2="19.78" y2="4.22"></line></svg>
                        <svg v-if="isNightMode" xmlns="http://www.w3.org/2000/svg" class="w-3.5 h-3.5" viewBox="0 0 24 24" fill="none" stroke="#6366f1" stroke-width="2.5" stroke-linecap="square" stroke-linejoin="miter"><path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"></path></svg>
                    </div>
                </button>
            </div>
        </nav>

        <div class="relative h-screen w-full overflow-hidden">
            <div class="absolute inset-0 z-0 bg-gray-900">
                <img
                    :src="heroDay"
                    alt="day-hero"
                    :class="['absolute inset-0 w-full h-full object-cover transition-opacity duration-[1500ms] ease-in-out', isNightMode ? 'opacity-0' : 'opacity-100']"
                />
                <img
                    :src="heroNight"
                    alt="night-hero"
                    :class="['absolute inset-0 w-full h-full object-cover transition-opacity duration-[1500ms] ease-in-out', isNightMode ? 'opacity-100' : 'opacity-0']"
                />

                <div :class="['absolute inset-0 bg-gradient-to-b from-white/50 via-transparent to-[#f4f4f4] transition-opacity duration-[1500ms]', isNightMode ? 'opacity-0' : 'opacity-100']"></div>
                <div :class="['absolute inset-0 bg-gradient-to-b from-[#050b14]/60 via-transparent to-[#050b14] transition-opacity duration-[1500ms]', isNightMode ? 'opacity-100' : 'opacity-0']"></div>
            </div>

            <div class="relative z-10 flex flex-col items-center justify-center h-full text-center px-4 pt-20">
                <h2 :class="['text-xs font-bold uppercase tracking-[0.3em] mb-6 transition-colors duration-1000', isNightMode ? 'text-emerald-400' : 'text-slate-800']">
                    Since 1890
                </h2>

                <h1
                    :class="[
                        'uppercase text-5xl md:text-6xl lg:text-7xl transition-colors duration-1000 tracking-widest leading-tight',
                        isNightMode ? 'text-white' : 'text-slate-900'
                    ]"
                    style="font-family: 'Forum', serif;"
                >
                    Illuminating<br />Gotham's Future.
                </h1>

                <div class="mt-10 h-px w-16 bg-current opacity-50" :class="isNightMode ? 'text-white' : 'text-slate-900'"></div>

                <button :class="[
                    'mt-10 px-8 py-3 text-[10px] uppercase font-bold tracking-[0.2em] border transition-all duration-500 hover:scale-105',
                    isNightMode
                        ? 'border-white/30 text-white hover:bg-white hover:text-slate-900'
                        : 'border-slate-900 text-slate-900 hover:bg-slate-900 hover:text-white'
                ]">
                    Explore Our Legacy
                </button>
            </div>
        </div>

        <div :class="['w-full py-3 border-y transition-colors duration-1000 flex justify-center items-center gap-12 overflow-hidden whitespace-nowrap text-[10px] md:text-xs font-mono uppercase tracking-widest', isNightMode ? 'bg-[#050b14] border-white/10 text-gray-500' : 'bg-white border-gray-300 text-gray-500']">
            <span>WYN <span class="text-emerald-500">▲ 4,291.02</span></span>
            <span class="opacity-30">|</span>
            <span>Security Contracts <span class="text-emerald-500">▲ 12%</span></span>
            <span class="opacity-30">|</span>
            <span>Applied Sciences <span class="text-red-400">▼ 0.4%</span></span>
            <span class="opacity-30">|</span>
            <span>Gotham Rebuild Fund <span class="text-emerald-500">▲ 45%</span></span>
        </div>

        <section class="py-24 px-6 md:px-12 lg:px-24">
            <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-3 gap-0 border border-collapse" :class="isNightMode ? 'border-white/10' : 'border-gray-300'">
                <div v-for="(division, index) in divisions" :key="index" :class="['group relative p-12 border-b md:border-b-0 md:border-r last:border-r-0 transition-all duration-500 hover:z-10', isNightMode ? 'border-white/10 bg-transparent hover:bg-white/5' : 'border-gray-300 bg-transparent hover:bg-white hover:shadow-2xl']">
                    <h4 :class="['text-3xl mb-4', isNightMode ? 'text-white' : 'text-slate-900']" style="font-family: 'Forum', serif;">{{ division.title }}</h4>
                    <p class="text-sm opacity-70 mb-12 leading-relaxed">{{ division.desc }}</p>
                    <div class="absolute bottom-10 left-12 text-xs font-mono tracking-widest opacity-50">{{ division.stat }}</div>
                </div>
            </div>
        </section>

        <section :class="['py-32 px-6 transition-colors duration-1000', isNightMode ? 'bg-[#02050a]' : 'bg-slate-900 text-white']">
            <div class="max-w-7xl mx-auto flex flex-col md:flex-row gap-16">
                <div class="md:w-1/3">
                    <h3 class="text-xs font-bold uppercase tracking-[0.3em] text-emerald-500 mb-4">Applied Sciences</h3>
                    <h2 class="text-5xl md:text-6xl text-white mb-6" style="font-family: 'Forum', serif;">Innovation in Shadows.</h2>
                    <p class="text-gray-400 text-sm leading-relaxed mb-8">
                        The Applied Sciences division operates with full autonomy to develop defense prototypes that the public isn't ready for yet.
                    </p>
                    <button class="px-6 py-3 border border-emerald-500/30 text-emerald-500 text-xs uppercase tracking-widest hover:bg-emerald-500 hover:text-black transition-colors">
                        Access Restricted Area
                    </button>
                </div>

                <div class="md:w-2/3 grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div v-for="item in innovations" :key="item.id" :class="['p-6 border transition-colors', isNightMode ? 'border-white/10 bg-white/5' : 'border-white/20 bg-white/10']">
                        <div class="flex justify-between items-start mb-4">
                            <span class="font-mono text-xs text-emerald-500">ID: {{ item.id }}</span>
                            <span class="w-2 h-2 rounded-full bg-emerald-500 animate-pulse"></span>
                        </div>
                        <h4 class="text-xl text-white mb-1">{{ item.name }}</h4>
                        <p class="text-xs text-gray-400 uppercase tracking-wider">{{ item.category }}</p>
                        <div class="mt-8 pt-4 border-t border-white/10 text-[10px] font-mono text-gray-500">
                            STATUS: {{ item.status }}
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section :class="['py-24 px-6 md:px-12 border-t transition-colors duration-1000', isNightMode ? 'border-white/10' : 'border-gray-200']">
            <div class="max-w-7xl mx-auto grid grid-cols-1 lg:grid-cols-2 gap-24">

                <div>
                    <h3 :class="['text-xs font-bold uppercase tracking-[0.3em] mb-6', isNightMode ? 'text-gray-500' : 'text-gray-400']">The Foundation</h3>
                    <h2 :class="['text-4xl mb-6', isNightMode ? 'text-white' : 'text-slate-900']" style="font-family: 'Forum', serif;">
                        "Why do we fall?"
                    </h2>
                    <p :class="['text-sm leading-7 mb-8', isNightMode ? 'text-gray-400' : 'text-gray-600']">
                        The Thomas & Martha Wayne Foundation is dedicated to helping Gotham's citizens pick themselves up. From orphanage funding to transit infrastructure, we are rebuilding the soul of the city.
                    </p>
                    <a href="#" :class="['text-xs font-bold uppercase tracking-widest border-b pb-1', isNightMode ? 'border-white text-white' : 'border-slate-900 text-slate-900']">Read Our Mission</a>
                </div>

                <div>
                    <h3 :class="['text-xs font-bold uppercase tracking-[0.3em] mb-6', isNightMode ? 'text-gray-500' : 'text-gray-400']">Latest Press</h3>
                    <div class="space-y-6">
                        <div v-for="(news, i) in press" :key="i" class="group cursor-pointer">
                            <div class="flex items-baseline gap-4 mb-1">
                                <span class="text-xs font-mono text-emerald-500">{{ news.date }}</span>
                                <h4 :class="['text-lg transition-colors group-hover:text-emerald-500', isNightMode ? 'text-white' : 'text-slate-900']" style="font-family: 'Forum', serif;">
                                    {{ news.title }}
                                </h4>
                            </div>
                            <p :class="['text-xs pl-[4.5rem]', isNightMode ? 'text-gray-600' : 'text-gray-400']">Read Full Article &rarr;</p>
                        </div>
                    </div>
                </div>

            </div>
        </section>

        <footer :class="['py-12 border-t text-center transition-colors duration-1000', isNightMode ? 'bg-black border-white/10 text-gray-600' : 'bg-slate-100 border-gray-300 text-gray-500']">
            <h1 class="text-4xl md:text-6xl opacity-20 mb-6 font-serif select-none">WAYNE</h1>
            <p class="text-[10px] uppercase tracking-widest">© 2025 Wayne Enterprises. Gotham City.</p>
        </footer>

    </div>
</template>
