<script setup>
import { Head } from "@inertiajs/vue3";

const date = new Date().toLocaleDateString('en-US', {
    weekday: 'long',
    year: 'numeric',
    month: 'long',
    day: 'numeric'
});
const price = "50¢";
const vol = "Vol. XCIV No. 24,102";

const heroImage = new URL('../../../designs/DailyBugle/spider-man-swing.png', import.meta.url).href;
const villainImage = new URL('../../../designs/DailyBugle/kingpin-mugshot.png', import.meta.url).href;

const headlines = [
    { title: "FISK TOWER CONSTRUCTION HALTED", excerpt: "Union disputes or something more sinister? Rumors of underground activity plague the site." },
    { title: "OSCORP STOCK PLUMMETS 12%", excerpt: "Norman Osborn refuses to comment on the 'glider incident' at the prototype facility." },
    { title: "CAT BURGLAR STRIKES MUSEUM", excerpt: "Black Cat spotted leaving the scene with the Neogenic Tablet. Police remain baffled." },
];
</script>

<template>
    <Head>
        <title>The Daily Bugle</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=UnifrakturMaguntia&family=Playfair+Display:ital,wght@0,400;0,700;0,900;1,400&family=Merriweather:wght@300;400;700&family=Oswald:wght@500;700&display=swap" rel="stylesheet">
    </Head>

    <div class="min-h-screen bg-[#fcfbf9] text-black font-serif selection:bg-red-200 selection:text-black pb-24">

        <div class="max-w-7xl mx-auto px-4 pt-2 flex justify-between items-end border-b-2 border-black pb-1 mb-1 font-sans">
            <div class="text-xs font-bold uppercase tracking-widest">{{ vol }}</div>
            <div class="text-xs font-bold uppercase tracking-widest text-center">
                NYC Weather: <span class="font-black">Rain, 54°F</span>
            </div>
            <div class="text-xs font-bold uppercase tracking-widest">{{ price }}</div>
        </div>

<!--        <header class="max-w-7xl mx-auto px-4 text-center border-b-[5px] border-black mb-1">-->
<!--            <h1 class="text-6xl md:text-8xl lg:text-9xl leading-tight" style="font-family: 'UnifrakturMaguntia', cursive;">-->
<!--                The Daily Bugle-->
<!--            </h1>-->
<!--            <div class="flex justify-between items-center py-1 border-t-2 border-black mt-2 font-sans">-->
<!--                <span class="text-[10px] font-bold uppercase tracking-[0.2em] w-1/3 text-left">New York's Finest Daily</span>-->
<!--                <span class="text-sm font-bold uppercase w-1/3">{{ date }}</span>-->
<!--                <span class="text-[10px] font-bold uppercase tracking-[0.2em] w-1/3 text-right">Est. 1898</span>-->
<!--            </div>-->
<!--        </header>-->
        <header class="bg-[#c11b17] border-y-[3px] border-black mb-4">
            <div class="max-w-7xl mx-auto px-4 py-2 flex justify-center items-center gap-2 md:gap-6">
                <h1 class="text-white text-5xl md:text-7xl lg:text-8xl font-black tracking-tighter bugle-shadow" style="font-family: 'UnifrakturMaguntia', cursive;">
                    Daily
                </h1>

                <div class="w-12 h-12 md:w-20 md:h-20 bg-black rounded-full border-[3px] md:border-[5px] border-white flex items-center justify-center shrink-0 relative z-10 shadow-[4px_4px_0px_0px_rgba(0,0,0,1)]">
                    <img src="../../../designs/DailyBugle/logo.png" class="w-full h-full p-2 aspect-square" />
<!--                    <svg class="w-8 h-8 md:w-12 md:h-12 text-white" viewBox="0 0 24 24" fill="currentColor">-->
<!--                        <path d="M2,6V18H6V6H2M7,15.59L17.59,5L19,6.41L8.41,17H7V15.59M22,6V18H18V6H22Z" transform="rotate(-15 12 12)"/>-->
<!--                    </svg>-->
                </div>

                <h1 class="text-white text-5xl md:text-7xl lg:text-8xl font-black tracking-tighter bugle-shadow" style="font-family: 'UnifrakturMaguntia', cursive;">
                    Bugle
                </h1>
            </div>
            <div class="bg-white border-t-[3px] border-black py-1 font-sans px-4">
                <div class="max-w-7xl mx-auto flex justify-between items-center">
                    <span class="text-[10px] font-bold uppercase tracking-[0.2em] w-1/3 text-left">New York's Favorite Tabloid</span>
                    <span class="text-sm font-bold uppercase w-1/3 text-center">{{ date }}</span>
                    <span class="text-[10px] font-bold uppercase tracking-[0.2em] w-1/3 text-right">Est. 1898</span>
                </div>
            </div>
        </header>

        <main class="max-w-7xl mx-auto px-4 mt-4 grid grid-cols-12 gap-6">

            <div class="col-span-12 md:col-span-3 border-r-0 md:border-r border-black pr-0 md:pr-4 flex flex-col gap-8">

                <div class="border-4 border-black p-4 text-center">
                    <p class="font-sans text-[10px] uppercase font-bold mb-2">Advertisement</p>
                    <h4 class="font-bold text-xl mb-1">PIZZA TIME?</h4>
                    <p class="text-sm italic mb-2">"Joe's Pizza - 29 Minute Guarantee"</p>
                    <div class="w-full h-px bg-black my-2"></div>
                    <p class="font-bold text-lg">555-0199</p>
                </div>

                <div v-for="(story, i) in headlines" :key="i" class="border-b border-black pb-4 last:border-0">
                    <h3 class="text-xl font-bold leading-tight mb-2 hover:underline cursor-pointer" style="font-family: 'Playfair Display';">
                        {{ story.title }}
                    </h3>
                    <p class="text-xs leading-relaxed text-justify text-gray-800 font-serif">
                        <span class="font-bold uppercase text-[10px]">NYC —</span> {{ story.excerpt }}
                    </p>
                </div>

                <div class="bg-red-700 text-white p-4">
                    <h4 class="font-sans font-bold uppercase tracking-widest text-xs mb-1 border-b border-white/50 pb-1">Exclusive</h4>
                    <h3 class="font-bold text-lg leading-tight mt-2">WHO IS THE GOBLIN?</h3>
                    <p class="text-[10px] mt-2 leading-relaxed">Eyewitness reports claim a flying figure over the bridge...</p>
                </div>
            </div>

            <div class="col-span-12 md:col-span-6 px-0 md:px-2">

                <div class="text-center mb-4">
                    <h2 class="text-6xl md:text-7xl font-black uppercase leading-[0.85] tracking-tighter" style="font-family: 'Oswald', sans-serif; transform: scaleY(1.1);">
                        HE'S A MENACE!
                    </h2>
                </div>

                <div class="relative w-full aspect-[4/3] mb-2 border border-black filter grayscale contrast-125 hover:filter-none transition-all duration-500">
                    <img :src="heroImage" class="w-full h-full object-cover" alt="Spider-Man" />
                    <div class="absolute bottom-0 right-0 bg-white border-l border-t border-black px-2 py-1 text-[10px] font-sans font-bold uppercase">
                        Photo: P. Parker
                    </div>
                </div>

                <p class="text-xs font-sans font-bold uppercase border-b border-black pb-2 mb-4 text-center">
                    Masked Vigilante Causes Millions in Property Damage on 5th Ave
                </p>

                <div class="columns-1 md:columns-2 gap-6 text-sm leading-snug font-serif text-justify" style="font-family: 'Merriweather';">
                    <p class="mb-4">
                        <span class="float-left text-5xl font-black leading-[0.8] mr-2 mt-[-4px]" style="font-family: 'UnifrakturMaguntia';">O</span>nce again, the so-called "hero" known as Spider-Man has turned our beautiful city into his personal playground of destruction. Authorities report that the web-slinger was seen swinging recklessly through midtown traffic, causing a five-car pileup.
                    </p>
                    <p class="mb-4">
                        "He cut me off!" screamed local taxi driver Dopinder Singh. "He swing down, kick bad guy, but dent my hood! Who pays for hood? The city? No!" This is the reality of living in a city held hostage by masked freaks.
                    </p>
                    <p class="mb-4">
                        Police Captain George Stacy issued a warrant for the vigilante's arrest earlier this morning, citing unauthorized use of public airspace and general public nuisance.
                    </p>
                    <p>
                        We at the Daily Bugle ask the hard question: Is he protecting us, or is he attracting the very madness he claims to fight? <span class="font-bold">See Editorial, Page 4.</span>
                    </p>
                </div>

                <div class="mt-8 border-t-4 border-black pt-2 flex items-center justify-between">
                    <div class="flex items-center gap-3">
                        <div class="w-12 h-12 bg-black text-white flex items-center justify-center font-bold text-2xl font-serif">JJJ</div>
                        <div class="leading-none">
                            <span class="block font-bold text-sm uppercase">J. Jonah Jameson</span>
                            <span class="block text-[10px] uppercase text-gray-600">Editor-in-Chief</span>
                        </div>
                    </div>
                    <div class="text-4xl font-black font-serif opacity-10">OPINION</div>
                </div>
            </div>

            <div class="col-span-12 md:col-span-3 border-l-0 md:border-l border-black pl-0 md:pl-4 flex flex-col gap-6">

                <div>
                    <img :src="villainImage" class="w-full aspect-square object-cover border border-black grayscale mb-2" />
                    <h3 class="text-2xl font-bold leading-none mb-2" style="font-family: 'Playfair Display';">Crime Up 15%</h3>
                    <p class="text-xs text-justify leading-relaxed">
                        With the Kingpin of Crime behind bars, a power vacuum has opened in Hell's Kitchen. Various gangs are vying for control.
                    </p>
                </div>

                <hr class="border-black">

                <div class="space-y-4">
                    <h4 class="font-sans font-black uppercase text-sm border-b-2 border-black inline-block">City Shorts</h4>
                    <ul class="text-xs space-y-3 list-disc pl-4 marker:text-black">
                        <li><span class="font-bold">Stark Industries</span> announces new clean energy initiative.</li>
                        <li><span class="font-bold">Baxter Building</span> tenants complain of "strange lights."</li>
                        <li><span class="font-bold">Subway Delay:</span> Lizard spotted on track 4? MTA denies claims.</li>
                    </ul>
                </div>

                <div class="mt-auto border-2 border-black p-2 bg-gray-100">
                    <p class="text-center font-sans font-bold uppercase text-[10px] mb-2">Daily Puzzle</p>
                    <div class="grid grid-cols-5 gap-px bg-black border border-black">
                        <div v-for="n in 25" :key="n" class="bg-white aspect-square"></div>
                    </div>
                </div>

            </div>

        </main>

        <footer class="fixed bottom-0 left-0 right-0 bg-black text-white py-2 overflow-hidden border-t-4 border-red-600 z-50">
            <div class="whitespace-nowrap animate-marquee flex gap-12 font-sans font-bold uppercase text-sm tracking-widest">
                <span><span class="text-red-500">BREAKING:</span> RHINO ESCAPES THE RAFT</span>
                <span>///</span>
                <span>OSCORP (OSC) ▼ 42.15</span>
                <span>///</span>
                <span>STARK IND (STK) ▲ 120.44</span>
                <span>///</span>
                <span>WANTED: SPIDER-MAN REWARD $5,000</span>
                <span>///</span>
                <span>MAYOR OSBORN TO SPEAK AT 5PM</span>
            </div>
        </footer>

    </div>
</template>

<style scoped>
.animate-marquee {
    animation: marquee 20s linear infinite;
}
@keyframes marquee {
    0% { transform: translateX(100%); }
    100% { transform: translateX(-100%); }
}

img {
    filter: grayscale(100%) contrast(120%);
}
</style>
