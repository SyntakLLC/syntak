<template>
    <AppLayout>
<!--        <InertiaLink :href="route('welcome')" class="group flex items-center gap-3 -ml-2">-->
<!--            <HoverArrow color="secondary" class="rotate-180 mb-1" />-->
<!--            <p class="text-lg text-slate-300">Back</p>-->
<!--        </InertiaLink>-->
        <p class="text-lg text-transparent pointer-events-none">.</p>

        <h1 class="text-6xl text-white font-semibold tracking-tight"
            style="
                    background: radial-gradient(#a5e0f1, #6d61ed);
                    -webkit-background-clip: text;
                    -webkit-text-fill-color: transparent;
                ">
            Our work
        </h1>

        <div class="mx-auto w-full">
            <ul role="list" class="grid grid-cols-3 gap-3 overflow-hidden">
                <li v-for="(item, itemIdx) in items" :key="itemIdx">
                    <a :href="item.href" class="hover-border-gradient group block aspect-square border-2 border-slate-800 hover:bg-[#ffffff05] transition overflow-hidden p-4 flex flex-col justify-between rounded-md overflow-hidden"
                       style="backdrop-filter: blur(7px);">
<!--                       >-->
                        <div/>

                        <div class="space-y-4">
                            <div class="flex-shrink-0 space-y-2">

                                <!-- Nice soft gradient behind the boxes -->
                                <svg viewBox="0 0 1024 1024" class="pointer-events-none absolute top-1/2 left-1/2 -z-10 h-[64rem] w-[64rem] -translate-x-1/2" aria-hidden="true">
                                    <circle cx="512" cy="512" r="512" fill="url(#759c1415-0410-454c-8f7c-9a820de03641)" fill-opacity="0.7" />
                                    <defs>
                                        <radialGradient id="759c1415-0410-454c-8f7c-9a820de03641" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(512 512) rotate(90) scale(512)">
                                            <stop stop-color="#8ca6f0" />
                                            <stop offset="1" stop-color="#8ca6f0" stop-opacity="0" />
                                        </radialGradient>
                                    </defs>
                                </svg>

                                <Stars :class="[item.starsRotation, 'transition opacity-0 group-hover:opacity-[.15] absolute w-full !left-20 !bottom-60']" />

<!--                                <GridPattern-->
<!--                                    :squares="[[4, 3],[2, 1],[7, 3],[10, 6],]"-->
<!--                                    :width="72"-->
<!--                                    :height="56"-->
<!--                                    x="50%"-->
<!--                                    class="absolute inset-x-0 inset-y-[-30%] h-[160%] w-full skew-y-[-18deg] fill-black/[0.02] stroke-black/5 dark:fill-white/1 dark:stroke-white/2.5"-->
<!--                                />-->

                                <!-- Icon -->
                                <span :class="[item.iconColor, 'inline-flex items-center justify-center h-7 w-7 rounded-lg']">
                                    <component :is="item.icon" class="h-5 w-5" aria-hidden="true" />
                                </span>

                                <!-- Project name -->
                                <div class="text-md font-medium text-white">
                                    {{ item.name }}
                                </div>
                            </div>

                            <!-- Project description -->
                            <p class="text-sm text-slate-400">{{ item.description }}</p>
                        </div>
                    </a>
                </li>
            </ul>
        </div>

        <div class="space-y-2">
            <p class="text-md text-slate-400">We have experience with sites that are:</p>
            <div class="space-x-2 space-y-2 -ml-2">
                <div/>
                <span v-for="badge in badges"
                      class="inline-flex items-center rounded bg-gray-700 opacity-70 px-2 py-0.5 text-sm font-medium text-gray-100"
                      >
                    {{ badge }}
                </span>
            </div>
        </div>

        <div class="w-full flex justify-end">
<!--            <ContactUsButton/>-->
        </div>
    </AppLayout>
</template>

<script>
import AppLayout from "@/Layouts/AppLayout";
import {InertiaLink} from "@inertiajs/inertia-vue3";

import { ChevronRightIcon } from '@heroicons/vue/solid'
import { CalendarIcon, PencilAltIcon, IdentificationIcon } from '@heroicons/vue/outline'
import HoverArrow from "@/Components/garnish/HoverArrow";
import GridPattern from "@/Components/garnish/GridPattern";
import Stars from "@/Components/garnish/Stars";
import Meteors from "@/Components/garnish/Meteors";
import ContactUsButton from "@/Components/buttons/ContactUsButton";

export default {
    name: "Index",
    components: {
        ContactUsButton,
        Meteors,
        Stars,
        GridPattern,
        HoverArrow,
        AppLayout,
        ChevronRightIcon,
        InertiaLink
    },

    setup() {
        const badges = [
            'Consumer-facing',
            'AI and Natural language processing',
            'Content creating',
            'Business-facing',
            'Data driven',
            'Subscription based',
            'Targeted towards Gen-Z and Millenials',
        ]

        const items = [
            {
                name: 'Notedly.ai',
                description: 'AI powered notetaking for college students.',
                href: 'https://notedly.ai',
                iconColor: 'text-emerald-500 border border-emerald-500',
                icon: PencilAltIcon,
                starsRotation: 'rotate-[30deg]',
                isNew: true,
            },
            {
                name: 'Athlete Pass',
                description: 'A home for content creating sports-lovers.',
                href: 'https://myathletepass.com',
                bgColor: 'bg-orange-500',
                iconColor: 'text-orange-500 border border-orange-500',
                icon: IdentificationIcon,
                starsRotation: 'rotate-[60deg]',
                isNew: false,
            },
            {
                name: 'Homexe WIN',
                description: 'Progress tracking for your sales agents.',
                href: 'https://apps.apple.com/us/app/homexe-win/id1601072257',
                bgColor: 'bg-blue-500',
                iconColor: 'text-blue-500 border border-blue-500',
                icon: CalendarIcon,
                starsRotation: 'rotate-[0deg]',
                isNew: false,
            },
        ]

        return {
            items, badges
        }
    }
}
</script>

<style scoped lang="css">
    .hover-border-gradient:hover {
        /*border-image-slice: 1;*/
        /*border-image-source: linear-gradient(to left, #334155, #8ca6f0, #5953ac, #334155);*/
        background: /* gradient can be an image */
            linear-gradient(
                to left,
                #334155, #334155, #8ca6f0, #8b5cf6, #334155, #334155
            )
            left
            bottom
            #ffffff05
            no-repeat;
        background-size: 100% 1px ;/* if linear-gradient, we need to resize it */
    }
</style>
