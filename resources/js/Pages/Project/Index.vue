<template>
    <AppLayout>
        <p class="text-lg text-white">Hi! I'm Amaan.</p>

        <h1 class="text-6xl text-white font-semibold tracking-tight"
            style="
                    background: radial-gradient(#a5e0f1, #6d61ed);
                    -webkit-background-clip: text;
                    -webkit-text-fill-color: transparent;
                ">
            Our work
        </h1>

<!--        <div class="space-x-1 space-y-1">-->
<!--            <span class="inline-flex items-center rounded bg-slate-700 px-2 py-0.5 text-sm font-medium text-slate-100">Consumer-facing</span>-->
<!--            <span class="inline-flex items-center rounded bg-slate-700 px-2 py-0.5 text-sm font-medium text-slate-100">Natural language processing</span>-->
<!--            <span class="inline-flex items-center rounded bg-slate-700 px-2 py-0.5 text-sm font-medium text-slate-100">Content creating</span>-->
<!--            <span class="inline-flex items-center rounded bg-slate-700 px-2 py-0.5 text-sm font-medium text-slate-100">Business-facing</span>-->
<!--            <span class="inline-flex items-center rounded bg-slate-700 px-2 py-0.5 text-sm font-medium text-slate-100">Data driven</span>-->
<!--        </div>-->

        <div class="mx-auto w-full">
<!--            <h2 class="text-lg font-medium text-white">Browse our projects</h2>-->
<!--            <p class="mt-1 text-sm text-slate-400">Get a closer look at what Syntak can do for your startup.</p>-->
            <ul role="list" class="divide-y divide-slate-700 border-t border-b border-slate-700">
                <li v-for="(item, itemIdx) in items" :key="itemIdx">
                    <div class="group relative flex items-start space-x-3 py-4">
                        <div class="flex-shrink-0">
                            <span :class="[item.iconColor, 'inline-flex items-center justify-center h-10 w-10 rounded-lg']">
                              <component :is="item.icon" class="h-6 w-6" aria-hidden="true" />
                            </span>
                        </div>
                        <div class="min-w-0 flex-1">
                            <div class="text-sm font-medium text-white">
                                <a :href="item.href">
                                    <span class="absolute inset-0" aria-hidden="true" />
                                    {{ item.name }}
                                    <span v-if="item.isNew"
                                          class="ml-1 inline-flex items-center rounded-full bg-emerald-600 px-2 text-xs font-medium text-white">New</span>
                                </a>
                            </div>
                            <p class="text-sm text-slate-400">{{ item.description }}</p>
                        </div>
                        <div class="flex-shrink-0 self-center">
                            <ChevronRightIcon class="h-5 w-5 text-gray-400 group-hover:text-slate-400" aria-hidden="true" />
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </AppLayout>
</template>

<script>
import AppLayout from "@/Layouts/AppLayout";

import { ChevronRightIcon } from '@heroicons/vue/solid'
import { CalendarIcon, BookOpenIcon, IdentificationIcon, CommandLineIcon, MegaphoneIcon } from '@heroicons/vue/outline'

export default {
    name: "Index",
    components: {
        AppLayout,
        ChevronRightIcon
    },

    setup() {
        const items = [
            {
                name: 'Notedly AI',
                description: 'AI powered notetaking for college students.',
                href: 'https://notedly.ai',
                iconColor: 'text-emerald-500 border border-emerald-500',
                icon: BookOpenIcon,
                isNew: true,
            },
            {
                name: 'Athlete Pass',
                description: 'A home for content creating sports-lovers.',
                href: 'https://myathletepass.com',
                iconColor: 'text-orange-500 border border-orange-500',
                icon: IdentificationIcon,
                isNew: false,
            },
            {
                name: 'Homexe WIN',
                description: 'Tracker for your agents progress.',
                href: 'https://apps.apple.com/us/app/homexe-win/id1601072257',
                iconColor: 'text-blue-500 border border-blue-500',
                icon: CalendarIcon,
                isNew: false,
            },
        ]

        return {
            items
        }
    }
}
</script>

<style scoped>

</style>
