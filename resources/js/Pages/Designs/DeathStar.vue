<script setup>
import { Head } from "@inertiajs/vue3";

const heroImage = new URL('../../../designs/DeathStar/hero-background-2.png', import.meta.url).href;

const benefits = [
    {
        icon: "M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z",
        title: "Total Protection",
        description: "Sleep soundly knowing the Empire's might shields you from chaos, pirates, and the terrorist Rebel Alliance."
    },
    {
        icon: "M13 2L3 14h9l-1 8 10-12h-9l1-8z",
        title: "Unlimited Power",
        description: "Access to Imperial energy grids. Your sector will never experience blackouts again. We guarantee it."
    },
    {
        icon: "M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z",
        title: "Simplified Governance",
        description: "No more confusing elections or political debates. One Empire. One vision. One future."
    },
];

const testimonials = [
    {
        quote: "After the Empire arrived, crime dropped to zero. Mostly because there's no one left to commit crimes.",
        author: "Grateful Citizen",
        location: "Alderaan Adjacent Sector",
        note: "(Relocated)"
    },
    {
        quote: "I used to worry about my children's future. Now I don't worry about anything anymore.",
        author: "Anonymous Parent",
        location: "Jedha City",
        note: "(Formerly)"
    },
    {
        quote: "The stormtroopers are always watching. I've never felt more... observed.",
        author: "Loyal Subject",
        location: "Lothal",
        note: ""
    },
];

const stats = [
    { number: "2,000,000+", label: "Loyal Citizens Relocated", subtext: "to better opportunities" },
    { number: "847", label: "Rebel Cells Neutralized", subtext: "this standard month" },
    { number: "100%", label: "Compliance Rate", subtext: "in pacified sectors" },
    { number: "1", label: "Operational Death Stars", subtext: "and counting" },
];
</script>

<template>
    <Head>
        <title>Death Star</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Bruno+Ace&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Quantico&display=swap" rel="stylesheet">
    </Head>

    <div class="min-h-screen bg-black text-white font-[Quantico] selection:bg-[#ff3333] selection:text-black overflow-x-hidden">

        <div class="absolute top-0 left-0 right-0 z-50 ">
        <div class="bg-[#ff3333] py-1 overflow-hidden flex whitespace-nowrap">
                <span class="text-black text-[10px] font-bold tracking-[0.5em] animate-marquee">
                     /// ALERT: REBEL SYMPATHIZERS WILL BE REPORTED /// CURFEW IN EFFECT FOR SECTORS 7G-9A /// OBEY ///
                     /// ALERT: REBEL SYMPATHIZERS WILL BE REPORTED /// CURFEW IN EFFECT FOR SECTORS 7G-9A /// OBEY ///
                </span>
        </div>
        <nav class="px-6 md:px-12 lg:px-16 py-4 flex justify-between items-center uppercase">
            <div class="flex items-center gap-4">
                <svg class="w-8 h-8 text-[#ff3333] animate-spin-slow" viewBox="0 0 24 24" fill="currentColor">
                    <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8zm3.88-11.71L13 10.17V6h-2v4.17L8.12 8.29 6.71 9.71l2.83 2.83-2.83 2.83 1.41 1.41L11 14.83V19h2v-4.17l2.88 1.88 1.41-1.41-2.83-2.83 2.83-2.83-1.41-1.41z"/>
                </svg>
                <span style="font-family: 'Bruno Ace', cursive;" class="text-lg tracking-widest">Imperial Sector Control</span>
            </div>
            <div class="hidden md:flex items-center gap-6 text-xs tracking-[0.3em] text-red-500 ">
                <span>Transmission Secure // Clearance Level Red</span>
            </div>
        </nav>
        </div>

        <div class="relative h-screen w-full flex items-center">
            <div class="absolute inset-0 z-0">
                <img
                    :src="heroImage"
                    alt="DS-1 Orbital Station"
                    class="w-full h-full object-cover select-none"
                />
                <div class="absolute inset-0 bg-[radial-gradient(circle_at_center,_var(--tw-gradient-stops))] from-transparent via-black/40 to-black/90"></div>
                <div class="absolute inset-0 bg-gradient-to-r from-black/80 via-transparent to-black/20"></div>
            </div>

            <div class="relative z-10 w-full md:w-2/3 px-6 md:px-12 lg:px-24 pt-20">

                <h1
                    class="text-4xl md:text-5xl lg:text-6xl uppercase leading-none mb-6 text-transparent bg-clip-text bg-gradient-to-b from-white to-neutral-500 drop-shadow-[0_0_15px_rgba(255,255,255,0.3)]"
                    style="font-family: 'Bruno Ace', cursive;"
                >
                    Think of<br/>Your Home<br/>Planet.
                </h1>

                <div class="h-0.5 w-24 bg-[#ff3333] mb-6 drop-shadow-[0_0_8px_rgba(255,51,51,0.8)]"></div>

                <p class="max-w-lg text-xs md:text-sm text-neutral-300 leading-relaxed mb-10 tracking-wider">
                    Order is not requested. It is enforced. The DS-1 Orbital Station stands as the ultimate guarantor of Imperial peace across the Outer Rim territories. Compliance is mandatory.
                </p>

                <button class="mt-8 group relative px-6 py-3 bg-black border-2 border-white text-white uppercase tracking-[0.3em] text-xs font-bold hover:bg-[#ff3333] hover:border-[#ff3333] transition-all duration-300 overflow-hidden">
                    <span class="relative z-10">Acknowledge Authority</span>
                    <div class="absolute inset-0 h-full w-0 bg-[#ff3333] transition-all duration-300 group-hover:w-full z-0"></div>
                </button>
            </div>

            <div class="absolute right-0 top-0 bottom-0 w-24 hidden lg:flex flex-col justify-center items-end pr-4 text-[8px] text-green-900/40 pointer-events-none select-none overflow-hidden">
                <div v-for="n in 20" :key="n" class="whitespace-nowrap ">
                    XY-{{n}}94.{{n*2}} // AWAITING INPUT...
                </div>
            </div>
        </div>

        <!-- BENEFITS SECTION -->
        <section class="relative py-20 bg-gradient-to-b from-black via-[#0a0a0a] to-black">
            <div class="absolute top-0 left-0 w-full h-px bg-gradient-to-r from-transparent via-[#ff3333] to-transparent"></div>

            <div class="max-w-6xl mx-auto px-6 md:px-12 lg:px-16">
                <div class="text-center mb-16">
                    <span class="text-[#ff3333] text-[10px] uppercase tracking-[0.5em] mb-4 block">Why Comply?</span>
                    <h2 class="text-3xl md:text-4xl uppercase" style="font-family: 'Bruno Ace', cursive;">
                        Benefits of Imperial Rule
                    </h2>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <div
                        v-for="(benefit, index) in benefits"
                        :key="index"
                        class="group relative p-8 bg-gradient-to-b from-[#111] to-black border border-neutral-800 hover:border-[#ff3333]/50 transition-all duration-500"
                    >
                        <div class="absolute top-0 left-0 w-full h-1 bg-gradient-to-r from-[#ff3333] to-transparent scale-x-0 group-hover:scale-x-100 transition-transform duration-500 origin-left"></div>

                        <div class="w-12 h-12 mb-6 flex items-center justify-center border border-[#ff3333]/30 bg-[#ff3333]/5 group-hover:bg-[#ff3333]/20 transition-colors">
                            <svg class="w-6 h-6 text-[#ff3333]" viewBox="0 0 24 24" fill="currentColor">
                                <path :d="benefit.icon"/>
                            </svg>
                        </div>

                        <h3 class="text-white text-lg uppercase tracking-wider mb-3" style="font-family: 'Bruno Ace', cursive;">
                            {{ benefit.title }}
                        </h3>
                        <p class="text-neutral-500 text-sm leading-relaxed">
                            {{ benefit.description }}
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- STATS SECTION -->
        <section class="py-16 bg-[#ff3333] relative overflow-hidden">
            <div class="absolute inset-0 bg-[url('data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNDAiIGhlaWdodD0iNDAiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PGRlZnM+PHBhdHRlcm4gaWQ9ImdyaWQiIHdpZHRoPSI0MCIgaGVpZ2h0PSI0MCIgcGF0dGVyblVuaXRzPSJ1c2VyU3BhY2VPblVzZSI+PHBhdGggZD0iTSAwIDEwIEwgNDAgMTAgTSAxMCAwIEwgMTAgNDAgTSAwIDIwIEwgNDAgMjAgTSAyMCAwIEwgMjAgNDAgTSAwIDMwIEwgNDAgMzAgTSAzMCAwIEwgMzAgNDAiIGZpbGw9Im5vbmUiIHN0cm9rZT0iIzAwMCIgc3Ryb2tlLW9wYWNpdHk9IjAuMSIvPjwvcGF0dGVybj48L2RlZnM+PHJlY3Qgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgZmlsbD0idXJsKCNncmlkKSIvPjwvc3ZnPg==')] opacity-30"></div>

            <div class="max-w-6xl mx-auto px-6 md:px-12 lg:px-16 relative">
                <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center">
                    <div v-for="(stat, index) in stats" :key="index" class="group">
                        <div class="text-3xl md:text-4xl font-black text-black mb-1" style="font-family: 'Bruno Ace', cursive;">
                            {{ stat.number }}
                        </div>
                        <div class="text-black/80 text-xs uppercase tracking-wider font-bold">
                            {{ stat.label }}
                        </div>
                        <div class="text-black/50 text-[10px] italic mt-1">
                            {{ stat.subtext }}
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- TESTIMONIALS SECTION -->
        <section class="py-20 bg-black relative">
            <div class="max-w-6xl mx-auto px-6 md:px-12 lg:px-16">
                <div class="text-center mb-16">
                    <span class="text-[#ff3333] text-[10px] uppercase tracking-[0.5em] mb-4 block">Voices of the Empire</span>
                    <h2 class="text-3xl md:text-4xl uppercase" style="font-family: 'Bruno Ace', cursive;">
                        Citizen Testimonials
                    </h2>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <div
                        v-for="(testimonial, index) in testimonials"
                        :key="index"
                        class="relative p-6 bg-gradient-to-br from-[#111] to-[#0a0a0a] border-l-2 border-[#ff3333]"
                    >
                        <svg class="w-8 h-8 text-[#ff3333]/20 mb-4" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M6 17h3l2-4V7H5v6h3zm8 0h3l2-4V7h-6v6h3z"/>
                        </svg>

                        <p class="text-neutral-400 text-sm leading-relaxed mb-6 italic">
                            "{{ testimonial.quote }}"
                        </p>

                        <div class="border-t border-neutral-800 pt-4">
                            <div class="text-white text-sm font-bold">{{ testimonial.author }}</div>
                            <div class="text-neutral-600 text-xs">
                                {{ testimonial.location }}
                                <span v-if="testimonial.note" class="text-[#ff3333]">{{ testimonial.note }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- REPORT SECTION -->
        <section class="py-20 bg-gradient-to-b from-[#0a0a0a] to-black relative overflow-hidden">
            <div class="absolute inset-0 bg-[radial-gradient(ellipse_at_center,_rgba(255,51,51,0.1)_0%,_transparent_70%)]"></div>

            <div class="max-w-4xl mx-auto px-6 md:px-12 lg:px-16 text-center relative">
                <div class="inline-block mb-6 px-4 pt-1 pb-2 border border-[#ff3333] bg-[#ff3333]/10">
                    <span class="text-[#ff3333] text-[10px] uppercase tracking-[0.5em]">Civic Duty Alert</span>
                </div>

                <h2 class="text-3xl md:text-5xl uppercase mb-6" style="font-family: 'Bruno Ace', cursive;">
                    See Something?<br/>
                    <span class="text-[#ff3333]">Say Something.</span>
                </h2>

                <p class="text-neutral-500 text-sm md:text-base max-w-2xl mx-auto mb-10 leading-relaxed">
                    Suspicious activity? Unauthorized gatherings? Unlicensed droids? Report rebel sympathizers to your local Imperial garrison.
                    <span class="text-[#ff3333]">Rewards available.</span> Anonymity guaranteed.*
                </p>

                <div class="flex flex-col sm:flex-row gap-4 justify-center mb-8">
                    <button class="group relative px-8 py-4 bg-[#ff3333] text-black uppercase tracking-[0.2em] text-sm font-bold hover:bg-white transition-colors">
                        Report Now
                    </button>
                    <button class="group relative px-8 py-4 bg-transparent border-2 border-neutral-700 text-neutral-400 uppercase tracking-[0.2em] text-sm font-bold hover:border-white hover:text-white transition-colors">
                        View Wanted List
                    </button>
                </div>

                <p class="text-neutral-700 text-[10px] italic">
                    *Anonymity subject to Imperial Security Bureau review
                </p>
            </div>
        </section>

        <footer class="py-12 bg-black border-t-2 border-[#ff3333] text-center px-6 md:px-12 lg:px-16 relative overflow-hidden">
            <div class="max-w-4xl mx-auto">
                <div class="mb-6 flex justify-center">
                    <svg class="w-12 h-12 text-neutral-700" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2L1 21h22L12 2zm0 3.99L19.53 19H4.47L12 5.99zM11 16h2v2h-2v-2zm0-6h2v4h-2v-4z"/></svg>
                </div>
                <p class="text-neutral-500 text-xs uppercase tracking-[0.2em] mb-4 leading-relaxed">
                    This communication is classified by the Imperial Security Bureau (ISB). Unauthorized access or distribution is punishable by immediate termination under Imperial Code 99-A.
                </p>
                <p class="text-[#ff3333] text-[10px] uppercase tracking-[0.5em] ">
                    Long Live The Empire
                </p>
            </div>
        </footer>

    </div>
</template>

<style scoped>
/* Slow spin for the logo */
.animate-spin-slow {
    animation: spin 10s linear infinite;
}

/* Marquee animation for footer */
.animate-marquee {
    animation: marquee 20s linear infinite;
}

@keyframes marquee {
    0% { transform: translateX(0); }
    100% { transform: translateX(-50%); }
}
</style>
