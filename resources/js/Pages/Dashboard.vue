<template>
    <AppLayout title="Dashboard">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Athlete Pass
            </h2>
        </template>

        <div class="py-12">
            <div
                class="max-w-7xl mx-auto sm:px-6 lg:px-8 items-center justify-center">
                <!-- Content -->

                <div class="w-full">
                    <h3 class="text-lg leading-6 font-medium text-gray-900">
                        Current Statistics
                    </h3>

                    <dl
                        class="mt-5 grid grid-cols-1 gap-12 sm:grid-cols-2 lg:grid-cols-3">
                        <div
                            v-for="item in stats"
                            :key="item.id"
                            class="relative bg-white pt-5 px-4 pb-12 sm:pt-6 sm:px-6 rounded-lg overflow-hidden shadow hover:shadow-lg transition cursor-pointer">
                            <dt>
                                <div
                                    class="absolute bg-brand-500 rounded-md p-3">
                                    <component
                                        :is="item.icon"
                                        class="h-6 w-6 text-white"
                                        aria-hidden="true" />
                                </div>
                                <p
                                    class="ml-16 text-sm font-medium text-gray-500 truncate">
                                    {{ item.name }}
                                </p>
                            </dt>
                            <dd class="ml-16 pb-6 flex items-baseline sm:pb-7">
                                <p class="text-2xl font-semibold text-gray-900">
                                    {{ item.stat }}
                                </p>
                                <div
                                    class="absolute bottom-0 inset-x-0 bg-gray-50 px-4 py-4 sm:px-6">
                                    <div class="text-sm">
                                        <a
                                            href="#"
                                            class="font-medium text-brand-600 hover:text-brand-500">
                                            View all<span class="sr-only">
                                                {{ item.name }} stats</span
                                            ></a
                                        >
                                    </div>
                                </div>
                            </dd>
                        </div>
                    </dl>
                </div>

                <div class="flow-root mt-20 w-full">
                    <ul role="list" class="-mb-8 flex flex-row w-full">
                        <li
                            v-for="event in timeline"
                            :key="event.id"
                            class="w-full">
                            <div class="relative pb-8 w-full">
                                <span
                                    class="absolute top-4 left-4 -ml-px w-full h-0.5 bg-gray-200"
                                    aria-hidden="true" />
                                <div
                                    class="relative flex space-x-3 flex-col items-center w-full">
                                    <div>
                                        <span
                                            :class="[
                                                event.iconBackground,
                                                'h-8 w-8 rounded-full flex items-center justify-center ring-8 ring-gray-100',
                                            ]">
                                            <component
                                                :is="event.icon"
                                                class="h-5 w-5 text-white"
                                                aria-hidden="true" />
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </AppLayout>
</template>

<script>
    import AppLayout from '@/Layouts/AppLayout.vue';
    import Welcome from '@/Jetstream/Welcome.vue';
    import { Link } from '@inertiajs/inertia-vue3';
    import {
        EyeIcon,
        CurrencyDollarIcon,
        ClockIcon,
    } from '@heroicons/vue/outline';

    import {
        CheckIcon,
        XIcon,
        ThumbUpIcon,
        UserIcon,
    } from '@heroicons/vue/solid';

    const timeline = [
        {
            id: 1,
            content: 'Applied to',
            target: 'Front End Developer',
            href: '#',
            date: 'Sep 20',
            datetime: '2020-09-20',
            icon: CheckIcon,
            iconBackground: 'bg-green-500',
        },
        {
            id: 2,
            content: 'Advanced to phone screening by',
            target: 'Bethany Blake',
            href: '#',
            date: 'Sep 22',
            datetime: '2020-09-22',
            icon: CheckIcon,
            iconBackground: 'bg-green-500',
        },
        {
            id: 3,
            content: 'Completed phone screening with',
            target: 'Martha Gardner',
            href: '#',
            date: 'Sep 28',
            datetime: '2020-09-28',
            icon: CheckIcon,
            iconBackground: 'bg-green-500',
        },
        {
            id: 4,
            content: 'Advanced to interview by',
            target: 'Bethany Blake',
            href: '#',
            date: 'Sep 30',
            datetime: '2020-09-30',
            icon: null,
            iconBackground: 'bg-gray-400',
        },
        {
            id: 5,
            content: 'Completed interview with',
            target: 'Katherine Snyder',
            href: '#',
            date: 'Oct 4',
            datetime: '2020-10-04',
            icon: null,
            iconBackground: 'bg-gray-400',
        },
    ];

    const stats = [
        {
            id: 1,
            name: 'Current Focus',
            stat: 'Login Page',
            icon: EyeIcon,
        },
        {
            id: 2,
            name: 'Time Logged',
            stat: '59 hours',
            icon: ClockIcon,
        },
        {
            id: 3,
            name: 'Total Bill',
            stat: '$2,950',
            icon: CurrencyDollarIcon,
        },
    ];

    export default {
        components: {
            AppLayout,
            Welcome,
            Link,
        },

        setup() {
            return {
                stats,
                timeline,
            };
        },
    };
</script>
