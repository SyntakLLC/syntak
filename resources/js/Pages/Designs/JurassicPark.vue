<script setup>
import { ref, computed, onMounted } from 'vue';
import { Head } from "@inertiajs/vue3";
import { MapPin, Plus, Minus, Check, X } from 'lucide-vue-next';

const ENCLOSURES = [
    { id: 'trex', name: 'T-Rex Paddock', x: 300, y: 650, basePrice: 5000, risk: 'Extreme', desc: 'View from our reinforced platform, 40 meters from the enclosure fence. 97.8% incident-free since last maintenance cycle.', color: 'bg-amber-500', duration: '2 hours' },
    { id: 'raptors', name: 'Raptor Run', x: 1400, y: 850, basePrice: 3500, risk: 'High', desc: 'Observe pack dynamics from an elevated walkway. Feeding demonstration included. Running shoes recommended.', color: 'bg-amber-500', duration: '1.5 hours' },
    { id: 'tri', name: 'Triceratops Valley', x: 1000, y: 1100, basePrice: 1200, risk: 'Low', desc: 'Our most popular family experience. Supervised petting available for parties who have signed the supplemental waiver.', color: 'bg-amber-500', duration: '1 hour' },
    { id: 'water', name: 'Mosasaurus Lagoon', x: 650, y: 900, basePrice: 4000, risk: 'Moderate', desc: 'Underwater viewing tunnel and surface feeding show. Splash zone seating complimentary. Dry cleaning voucher included.', color: 'bg-amber-500', duration: '1.5 hours' },
    { id: 'hotel', name: 'Visitor Center', x: 600, y: 200, basePrice: 500, risk: 'Minimal', desc: 'Dining, exhibits, and gift shop. Reinforced safe room access included with all packages. Open 24 hours.', color: 'bg-amber-500', duration: '45 min' }
];

const map = new URL('../../../designs/JurassicPark/map.png', import.meta.url).href;
const MAP_WIDTH = 2000;
const MAP_HEIGHT = 1500;
const MIN_SCALE = 0.5;
const MAX_SCALE = 4;

const containerRef = ref(null);
const selectedEnclosures = ref(new Set());
const travelers = ref(2);
const scale = ref(1);
const position = ref({ x: 0, y: 0 });
const isDragging = ref(false);
const dragStart = ref({ x: 0, y: 0 });
const hoveredEnclosure = ref(null);
const showWaiverModal = ref(false);

const selectedList = computed(() => ENCLOSURES.filter(e => selectedEnclosures.value.has(e.id)));
const totalCost = computed(() => selectedList.value.reduce((sum, e) => sum + e.basePrice, 0) * travelers.value);
const totalDuration = computed(() => {
    let minutes = 0;
    selectedList.value.forEach(e => {
        const match = e.duration.match(/(\d+\.?\d*)\s*(hour|min)/);
        if (match) {
            minutes += match[2] === 'hour' ? parseFloat(match[1]) * 60 : parseFloat(match[1]);
        }
    });
    const hours = Math.floor(minutes / 60);
    const mins = minutes % 60;
    return hours > 0 ? `${hours}h ${mins > 0 ? mins + 'm' : ''}`.trim() : `${mins}m`;
});

const checkBounds = (x, y, currentScale) => {
    if (!containerRef.value) return;
    const { width: containerW, height: containerH } = containerRef.value.getBoundingClientRect();
    const minTranslateX = containerW - (MAP_WIDTH * currentScale);
    const minTranslateY = containerH - (MAP_HEIGHT * currentScale);

    let newX = MAP_WIDTH * currentScale < containerW
        ? (containerW - MAP_WIDTH * currentScale) / 2
        : Math.min(0, Math.max(x, minTranslateX));

    let newY = MAP_HEIGHT * currentScale < containerH
        ? (containerH - MAP_HEIGHT * currentScale) / 2
        : Math.min(0, Math.max(y, minTranslateY));

    position.value = { x: newX, y: newY };
};

const handleWheel = (e) => {
    e.preventDefault();
    if (!containerRef.value) return;

    const rect = containerRef.value.getBoundingClientRect();
    const mouseX = e.clientX - rect.left;
    const mouseY = e.clientY - rect.top;
    const oldScale = scale.value;
    const newScale = Math.min(Math.max(oldScale - e.deltaY * 0.005, MIN_SCALE), MAX_SCALE);

    const mapX = (mouseX - position.value.x) / oldScale;
    const mapY = (mouseY - position.value.y) / oldScale;

    scale.value = newScale;
    checkBounds(mouseX - mapX * newScale, mouseY - mapY * newScale, newScale);
};

const handleMouseDown = (e) => {
    isDragging.value = true;
    dragStart.value = { x: e.clientX - position.value.x, y: e.clientY - position.value.y };
};

const handleMouseMove = (e) => {
    if (!isDragging.value) return;
    checkBounds(e.clientX - dragStart.value.x, e.clientY - dragStart.value.y, scale.value);
};

const handleMouseUp = () => {
    isDragging.value = false;
};

const addToItinerary = (enc) => {
    const newSet = new Set(selectedEnclosures.value);
    newSet.add(enc.id);
    selectedEnclosures.value = newSet;
};

const removeFromItinerary = (enc) => {
    const newSet = new Set(selectedEnclosures.value);
    newSet.delete(enc.id);
    selectedEnclosures.value = newSet;
};

const toggleZone = (enc) => {
    if (selectedEnclosures.value.has(enc.id)) {
        removeFromItinerary(enc);
    } else {
        addToItinerary(enc);
    }
};

const isSelected = (enc) => selectedEnclosures.value.has(enc.id);

onMounted(() => {
    if (containerRef.value) {
        const { width, height } = containerRef.value.getBoundingClientRect();
        position.value = { x: (width - MAP_WIDTH) / 2, y: (height - MAP_HEIGHT) / 2 };
    }
});
</script>

<template>
    <Head><title>Plan Your Visit</title></Head>
    <div class="flex h-screen w-full bg-stone-100 text-stone-800 overflow-hidden">
        <div class="w-[400px] flex flex-col bg-stone-50 z-20">
            <div class="p-8 bg-stone-800 text-white">
                <p class="text-xs uppercase tracking-[0.2em] text-stone-400 mb-1">Isla Nublar</p>
                <h1 class="text-2xl font-semibold tracking-tight">Book Your Expedition</h1>
                <p class="text-sm text-amber-500 mb-6">Return ferry not guaranteed.</p>
                <div class="flex items-center justify-between">
                    <span class="text-sm text-stone-300">Party size</span>
                    <div class="flex items-center gap-4">
                        <button @click="travelers = Math.max(1, travelers - 1)" class="w-8 h-8 border border-stone-600 hover:border-stone-400 flex items-center justify-center transition-colors text-stone-300 hover:text-white">
                            <Minus :size="14" />
                        </button>
                        <span class="text-xl w-6 text-center">{{ travelers }}</span>
                        <button @click="travelers = Math.min(12, travelers + 1)" class="w-8 h-8 border border-stone-600 hover:border-stone-400 flex items-center justify-center transition-colors text-stone-300 hover:text-white">
                            <Plus :size="14" />
                        </button>
                    </div>
                </div>
            </div>

            <div class="flex-1 overflow-y-auto">
<!--                <div v-if="hoveredEnclosure && !isSelected(hoveredEnclosure)" class="p-6 bg-white border-b border-stone-200">-->
<!--                    <div class="flex items-start gap-3 mb-3">-->
<!--                        <div :class="['w-3 h-3 mt-1.5 shrink-0', hoveredEnclosure.color]"></div>-->
<!--                        <div class="flex-1">-->
<!--                            <h3 class="font-semibold text-stone-900 mb-1">{{ hoveredEnclosure.name }}</h3>-->
<!--                            <p class="text-sm text-stone-500 leading-relaxed">{{ hoveredEnclosure.desc }}</p>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="flex items-center justify-between text-sm mb-4 ml-6">-->
<!--                        <div class="flex gap-4 text-stone-500">-->
<!--                            <span>{{ hoveredEnclosure.duration }}</span>-->
<!--                            <span>{{ hoveredEnclosure.risk }} risk</span>-->
<!--                        </div>-->
<!--                        <span class="font-semibold text-stone-800">${{ hoveredEnclosure.basePrice.toLocaleString() }}<span class="font-normal text-stone-400">/person</span></span>-->
<!--                    </div>-->
<!--                    <button-->
<!--                        @click="addToItinerary(hoveredEnclosure)"-->
<!--                        class="w-full py-2.5 bg-stone-800 hover:bg-stone-700 text-white text-sm font-medium transition-colors"-->
<!--                    >-->
<!--                        Add to Itinerary-->
<!--                    </button>-->
<!--                </div>-->

                <div class="p-6">
                    <div v-if="selectedList.length === 0" class="text-center py-12">
                        <div class="w-12 h-12 border-2 border-dashed border-stone-300 flex items-center justify-center mx-auto mb-4">
                            <MapPin :size="20" class="text-stone-400" />
                        </div>
                        <p class="text-stone-600 text-sm font-medium mb-1">Your itinerary is empty</p>
                        <p class="text-stone-400 text-xs">Select attractions on the map.<br>Choose wisely.</p>
                    </div>

                    <div v-else>
                        <h3 class="text-xs uppercase tracking-widest text-stone-400 mb-4">Your Itinerary <span class="normal-case tracking-normal text-stone-300">(provisional)</span></h3>
                        <div class="space-y-2">
                            <div
                                v-for="enc in selectedList"
                                :key="enc.id"
                                class="flex items-center justify-between p-3 bg-white border border-stone-200 group"
                            >
                                <div class="flex items-center gap-3">
                                    <div :class="['w-2 h-2 shrink-0', enc.color]"></div>
                                    <div>
                                        <p class="text-sm font-medium text-stone-800">{{ enc.name }}</p>
                                        <p class="text-xs text-stone-400">{{ enc.duration }}</p>
                                    </div>
                                </div>
                                <div class="flex items-center gap-3">
                                    <span class="text-sm text-stone-600">${{ (enc.basePrice * travelers).toLocaleString() }}</span>
                                    <button
                                        @click="removeFromItinerary(enc)"
                                        class="w-6 h-6 flex items-center justify-center text-stone-400 hover:text-stone-600 hover:bg-stone-100 transition-colors"
                                    >
                                        <X :size="14" />
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div v-if="selectedList.length > 0" class="p-6 bg-white border-t border-stone-200">
                <div class="flex justify-between text-sm text-stone-500 mb-1">
                    <span>{{ selectedList.length }} location{{ selectedList.length !== 1 ? 's' : '' }} · {{ totalDuration }}</span>
                    <span>{{ travelers }} guest{{ travelers !== 1 ? 's' : '' }}</span>
                </div>
                <div class="flex justify-between items-baseline mb-4">
                    <span class="text-sm text-stone-500">Total</span>
                    <span class="text-2xl font-semibold text-stone-900">${{ totalCost.toLocaleString() }}</span>
                </div>
                <button @click="showWaiverModal = true" class="w-full py-3 bg-stone-800 hover:bg-stone-700 text-white font-medium transition-colors">
                    Confirm & Sign Waiver
                </button>
                <p class="text-[10px] text-stone-400 text-center mt-3 leading-relaxed">
                    Prices shown are per surviving guest. Mandatory evacuation insurance ($850) added at checkout.
                </p>
            </div>

            <div v-else class="mt-auto p-6 border-t border-stone-200">
                <p class="text-[10px] text-stone-400 leading-relaxed">
                    InGen Bioengineering is not liable for incidents occurring outside designated viewing areas.
                    Guests acknowledge inherent risks of proximity to de-extinct fauna.
                </p>
            </div>
        </div>

        <div
            ref="containerRef"
            class="flex-1 relative overflow-hidden cursor-grab active:cursor-grabbing select-none bg-stone-200"
            @wheel="handleWheel"
            @mousedown="handleMouseDown"
            @mousemove="handleMouseMove"
            @mouseup="handleMouseUp"
            @mouseleave="handleMouseUp"
        >
            <div
                :style="{
                    transform: `translate(${position.x}px, ${position.y}px) scale(${scale})`,
                    transformOrigin: '0 0',
                    width: `${MAP_WIDTH}px`,
                    height: `${MAP_HEIGHT}px`,
                    transition: isDragging ? 'none' : 'transform 0.15s ease-out'
                }"
                class="relative"
            >
                <img :src="map" alt="Park Map" class="w-full h-full object-cover pointer-events-none" />

                <div
                    v-for="enc in ENCLOSURES"
                    :key="enc.id"
                    @click.stop="toggleZone(enc)"
                    @mouseenter="hoveredEnclosure = enc"
                    @mouseleave="hoveredEnclosure = null"
                    :style="{ left: `${enc.x}px`, top: `${enc.y}px`, transform: `translate(-50%, -50%) scale(${1 / scale})` }"
                    class="absolute cursor-pointer z-10 group"
                >
                    <div :class="[
                        'relative flex items-center justify-center w-14 h-14 border-4 shadow-2xl transition-all duration-150',
                        isSelected(enc)
                            ? 'bg-stone-800 border-white ring-4 ring-stone-800/30'
                            : `${enc.color} border-white ring-4 ring-amber-500/40 hover:scale-110 hover:ring-amber-500/60`
                    ]">
                        <Check v-if="isSelected(enc)" :size="22" class="text-white" stroke-width="3" />
                        <span v-else class="text-white text-sm font-bold drop-shadow-md">${{ (enc.basePrice / 1000).toFixed(0) }}k</span>
                    </div>

                    <div v-if="!isSelected(enc)" class="absolute bottom-full left-1/2 -translate-x-1/2 mb-3 w-64 bg-white border border-stone-200 shadow-xl opacity-0 group-hover:opacity-100 transition-opacity duration-150 pointer-events-none">
                        <div class="p-4">
                            <div class="flex items-center gap-2 mb-2">
                                <div :class="['w-2 h-2 shrink-0', enc.color]"></div>
                                <h3 class="font-semibold text-stone-900 text-sm">{{ enc.name }}</h3>
                            </div>
                            <p class="text-xs text-stone-500 leading-relaxed mb-3">{{ enc.desc }}</p>
                            <div class="flex items-center justify-between text-xs">
                                <div class="flex gap-3 text-stone-400">
                                    <span>{{ enc.duration }}</span>
                                    <span>{{ enc.risk }}</span>
                                </div>
                                <span class="font-semibold text-stone-800">${{ enc.basePrice.toLocaleString() }}</span>
                            </div>
                        </div>
                        <div class="px-4 py-2 bg-stone-50 border-t border-stone-100 text-xs text-stone-500 text-center">
                            Click to add
                        </div>
                    </div>
                </div>
            </div>

            <div class="absolute bottom-4 right-4 bg-white border border-stone-300 text-stone-600 px-3 py-1.5 text-xs font-mono">
                {{ (scale * 100).toFixed(0) }}%
            </div>
        </div>

        <div v-if="showWaiverModal" class="fixed inset-0 z-50 flex items-center justify-center">
            <div class="absolute inset-0 bg-black/60" @click="showWaiverModal = false"></div>
            <div class="relative bg-white w-full max-w-lg mx-4 shadow-2xl">
                <div class="bg-stone-800 px-6 py-4">
                    <p class="text-xs uppercase tracking-[0.2em] text-stone-400">InGen Bioengineering Corp.</p>
                    <h2 class="text-xl font-semibold text-white">Liability Waiver & Acknowledgment</h2>
                </div>
                <div class="p-6 space-y-4">
                    <div class="border-l-4 border-amber-500 pl-4 py-2 bg-amber-50">
                        <p class="text-sm font-semibold text-amber-800">WEATHER ADVISORY</p>
                        <p class="text-sm text-amber-700">Tropical storm approaching. Perimeter fences may experience power fluctuations.</p>
                    </div>
                    <p class="text-sm text-stone-600 leading-relaxed">
                        I acknowledge that <strong>InGen Bioengineering</strong> is not responsible for injury, dismemberment, or loss of life resulting from enclosure breaches, pack hunting behavior, or acts of prehistoric predation.
                    </p>
                    <label class="flex items-start gap-3 cursor-pointer pt-2">
                        <input type="checkbox" class="mt-0.5 w-4 h-4 accent-stone-800" />
                        <span class="text-xs text-stone-500">I have designated a next-of-kin and accept that evacuation is subject to availability.</span>
                    </label>
                </div>
                <div class="px-6 py-4 bg-stone-50 border-t border-stone-200 flex gap-3">
                    <button @click="showWaiverModal = false" class="flex-1 py-2.5 border border-stone-300 text-stone-600 text-sm font-medium hover:bg-stone-100 transition-colors">
                        I Need to Reconsider
                    </button>
                    <button class="flex-1 py-2.5 bg-stone-800 text-white text-sm font-medium hover:bg-stone-700 transition-colors">
                        Accept & Book
                    </button>
                </div>
            </div>
        </div>
    </div>
</template>
