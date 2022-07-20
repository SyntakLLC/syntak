<script setup>
    import AppLayout from '@/Layouts/AppLayout.vue';
    import Welcome from '@/Jetstream/Welcome.vue';
    import { Link } from '@inertiajs/inertia-vue3';

    const stats = [
        { name: 'Total Subscribers', stat: '71,897' },
        { name: 'Total Hours', stat: '77 hours' },
        { name: 'Outstanding Charges', stat: '$3,850' },
    ];
</script>

<template>
    <AppLayout title="Dashboard">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Athlete Pass
            </h2>
        </template>

        <div class="py-12">
            <div
                class="max-w-7xl mx-auto sm:px-6 lg:px-8 flex flex-row items-center justify-center">
                <!-- Content -->

                <!-- <div
                    class="group relative rounded-xl border border-slate-200 hover:bg-brand-50 aspect-square max-h-64">
                    <div
                        class="absolute -inset-px rounded-xl border-2 border-brand-500 opacity-0 group-hover:opacity-100" />

                    <div class="relative overflow-hidden rounded-xl p-6">
                        <Icon icon={icon} class="h-8 w-8" />
                        <h2 class="mt-4 font-display text-base text-slate-900">
                            <Link href="/">
                                <span class="absolute -inset-px rounded-xl" />
                                Installation
                            </Link>
                        </h2>
                        <p class="mt-1 text-sm text-slate-700">
                            Step-by-step guides to setting up your system and
                            installing the library.
                        </p>
                    </div>
                </div> -->

                <div
                    class="group relative rounded-xl border border-slate-200 hover:bg-brand-50 aspect-square h-full max-h-64">
                    <div
                        class="absolute -inset-px rounded-xl border-2 border-brand-500 opacity-0 group-hover:opacity-100" />

                    <div class="relative overflow-hidden rounded-xl p-6">
                        <p class="mt-1 text-sm text-slate-700">Total Time</p>
                        <h2 class="mt-4 font-display text-4xl text-slate-900">
                            77 hours
                        </h2>
                    </div>
                </div>
                <div
                    class="group relative rounded-xl border border-slate-200 hover:bg-brand-50 aspect-square h-full max-h-64">
                    <div
                        class="absolute -inset-px rounded-xl border-2 border-brand-500 opacity-0 group-hover:opacity-100" />

                    <div class="relative overflow-hidden rounded-xl p-6">
                        <p class="mt-1 text-sm text-slate-700">
                            Current Balance
                        </p>
                        <h2 class="mt-4 font-display text-4xl text-slate-900">
                            $3,850.00
                        </h2>
                    </div>
                </div>
            </div>
        </div>
    </AppLayout>
</template>
