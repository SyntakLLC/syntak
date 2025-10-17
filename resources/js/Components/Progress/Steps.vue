<template>
    <nav aria-label="Progress" class="pb-[0.6rem]">
        <ol role="list" class="space-y-8">
            <li v-for="(step, index) in steps" :key="step.name">
                <span v-if="index < current" class="group">
                    <span class="flex items-start">
                        <span
                            class="-ml-1 relative flex h-6 w-6 mt-1 md:mt-0 md:h-8 md:w-8 shrink-0 items-center justify-center">
                            <CheckCircleIcon class="h-full w-full text-brand-500"
                                             aria-hidden="true"/>
                        </span>
                        <span class="ml-3 grid">
                            <span class="heading">
                                {{ step.name }}
                            </span>
                            <span class="text-secondary mt-1">
                                {{ step.description }}
                            </span>
                        </span>
                    </span>
                </span>
                <span v-else-if="index === current" class="flex items-start" aria-current="step">
                    <span
                        class="relative flex h-5 w-5 mt-1 md:mt-0 md:h-7 md:w-7 shrink-0 items-center justify-center bg-brand-500 rounded-full"> <!-- shadow-brand -->
                        <component :is="step.icon"
                                   class="h-3 w-3 md:h-4 md:w-4 text-zinc-900 font-bold"
                                   aria-hidden="true"/>
                    </span>

                    <span class="ml-3 grid">
                        <span class="heading font-bold text-brand-500">
                            {{ step.name }}
                        </span>
                        <span class="text-secondary mt-1">
                            {{ step.description }}
                        </span>

                        <Link v-if="step.buttonText"
                              class="mt-4"
                              :href="route(step.href)">
                            <SecondaryButton>
                                {{ step.buttonText }} &rarr;
                            </SecondaryButton>
                        </Link>
                    </span>
                </span>
                <span v-else class="group">
                    <span class="flex items-start">
                        <span
                            class="relative flex h-5 w-5 mt-1 md:mt-0 md:h-7 md:w-7 shrink-0 items-center justify-center bg-zinc-500 rounded-full">
                            <component :is="step.icon"
                                       class="h-3 w-3 md:h-4 md:w-4 text-white"
                                       aria-hidden="true"/>
                        </span>
                        <span class="ml-3 grid">
                            <span class="heading">
                                {{ step.name }}
                            </span>
                            <span class="text-secondary mt-1">
                                {{ step.description }}
                            </span>
                        </span>
                    </span>
                </span>
            </li>
        </ol>
    </nav>
</template>

<script lang="ts">
import {CheckCircleIcon} from '@heroicons/vue/20/solid'
import {defineComponent} from 'vue';
import SecondaryButton from "@/Components/Buttons/SecondaryButton.vue";
import {Link} from '@inertiajs/vue3';

export default defineComponent({
    name: "Steps",

    components: {
        SecondaryButton,
        CheckCircleIcon,
        Link
    },

    props: {
        steps: {
            type: Array,
            required: true
        },
        current: {
            type: Number,
            required: true,
        }
    }
})
</script>

<style scoped>

</style>
