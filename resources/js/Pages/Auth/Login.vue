<template>
    <Head title="Log in" />

    <SplitscreenLayout>
        <template #left>
            <div
                class="min-h-screen flex flex-col sm:justify-center items-center w-full sm:max-w-md mx-auto">
                <JetAuthenticationCardLogo class="absolute top-20" />

                <JetValidationErrors class="mb-4" />

                <div
                    v-if="status"
                    class="mb-4 font-medium text-sm text-green-600">
                    {{ status }}
                </div>

                <form @submit.prevent="submit" class="w-full">
                    <div>
                        <JetLabel for="email" value="Email" />
                        <JetInput
                            id="email"
                            v-model="form.email"
                            type="email"
                            class="mt-1 block w-full"
                            required
                            autofocus />
                    </div>

                    <div class="mt-4">
                        <JetLabel for="password" value="Password" />
                        <JetInput
                            id="password"
                            v-model="form.password"
                            type="password"
                            class="mt-1 block w-full"
                            required
                            autocomplete="current-password" />
                    </div>

                    <div class="block mt-4">
                        <label class="flex items-center">
                            <JetCheckbox
                                v-model:checked="form.remember"
                                name="remember" />
                            <span class="ml-2 text-sm text-gray-600"
                                >Remember me</span
                            >
                        </label>
                    </div>

                    <div class="flex items-center justify-end mt-4">
                        <SecondaryLink
                            v-if="canResetPassword"
                            :href="route('password.request')">
                            Forgot your password?
                        </SecondaryLink>

                        <Button
                            class="ml-4"
                            :class="{ 'opacity-25': form.processing }"
                            :disabled="form.processing">
                            Log in
                        </Button>
                    </div>
                </form>
            </div>
        </template>

        <template #right>
            <img
                src="https://images.unsplash.com/photo-1658232190602-be6cd5b976f1?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2530&q=80"
                class="object-cover shadow-lg shadow-slate-400 min-h-screen pointer-events-none"
                alt="Frosted glass" />
        </template>
    </SplitscreenLayout>
</template>

<script setup>
    import { Head, Link, useForm } from '@inertiajs/inertia-vue3';
    import JetAuthenticationCard from '@/Jetstream/AuthenticationCard.vue';
    import JetAuthenticationCardLogo from '@/Jetstream/AuthenticationCardLogo.vue';
    import Button from '@/Components/buttons/Button.vue';
    import SplitscreenLayout from '@/Layouts/SplitscreenLayout.vue';
    import JetInput from '@/Jetstream/Input.vue';
    import JetCheckbox from '@/Jetstream/Checkbox.vue';
    import JetLabel from '@/Jetstream/Label.vue';
    import JetValidationErrors from '@/Jetstream/ValidationErrors.vue';
    import SecondaryLink from '@/Components/buttons/SecondaryLink.vue';

    defineProps({
        canResetPassword: Boolean,
        status: String,
    });

    const form = useForm({
        email: '',
        password: '',
        remember: false,
    });

    const submit = () => {
        form.transform((data) => ({
            ...data,
            remember: form.remember ? 'on' : '',
        })).post(route('login'), {
            onFinish: () => form.reset('password'),
        });
    };
</script>
