<script setup lang='ts'>
import { Head, useForm } from '@inertiajs/vue3';
import { ref, TransitionGroup } from 'vue';

import Title from '@/Assets/title-light.png';

import PrimaryButton from '@/Shared/PrimaryButton.vue';
import CardVue from '@/Shared/Card.vue';
import ErrorCardVue from '@/Shared/ErrorCard.vue';

const showPassword = ref(false);

const form = useForm({
    name: '',
    password: '',
});

function toggleShowPassword() {
    showPassword.value = !showPassword.value;
}
</script>

<template>
    <Head title='Login' />
    <div class="w-[98vw] h-[96vh] flex justify-center items-center">
        <CardVue class='flex flex-col items-center gap-4 p-8 w-1/2'>
            <img :src="Title" alt="Lizra Festivity" class='w-48'>
            <form @submit.prevent='form.post(route("auth.login"))' method="post" class='flex flex-col gap-6 w-full'>
                <div class='flex flex-col gap-2 w-full'>
                    <label for="username">Username</label>
                    <div class='flex flex-row gap-4 border-2 border-gray-300 rounded-md p-2 w-full'>
                        <svg class="h-8 w-8 text-black" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                        </svg>

                        <input v-model='form.name' class='w-full' type="text" name='username'
                            placeholder='Enter your username' required>
                    </div>
                    <ErrorCardVue :display='$page.props.errors?.name' :body='$page.props.errors.name' />
                </div>

                <div class='flex flex-col gap-2 w-full'>
                    <label for="username">Username</label>
                    <div class='flex flex-row gap-4 border-2 border-gray-300 rounded-md p-2 w-full'>
                        <svg class="h-8 w-8 text-black" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <rect x="3" y="11" width="18" height="11" rx="2" ry="2" />
                            <path d="M7 11V7a5 5 0 0 1 10 0v4" />
                        </svg>
                        <input v-model='form.password' class='w-full' :type="showPassword ? 'text' : 'password'"
                            name='username' placeholder='Enter your username' required>
                        <button @click.prevent='toggleShowPassword' class='relative w-12'>
                            <TransitionGroup>
                                <svg v-if='!showPassword' class="absolute h-8 w-8 top-0 text-black" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <path
                                        d="M17.94 17.94A10.07 10.07 0 0 1 12 20c-7 0-11-8-11-8a18.45 18.45 0 0 1 5.06-5.94M9.9 4.24A9.12 9.12 0 0 1 12 4c7 0 11 8 11 8a18.5 18.5 0 0 1-2.16 3.19m-6.72-1.07a3 3 0 1 1-4.24-4.24" />
                                    <line x1="1" y1="1" x2="23" y2="23" />
                                </svg>
                                <svg v-if='showPassword' class="absolute top-0 h-8 w-8 text-black" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z" />
                                    <circle cx="12" cy="12" r="3" />
                                </svg>
                            </TransitionGroup>
                        </button>
                    </div>
                    <ErrorCardVue :display='$page.props.errors?.name' :body='$page.props.errors.name' />
                </div>

                <div class="flex w-full">
                    <ErrorCardVue class='w-full' :display='$page.props.flash.error'
                        :body='$page.props.flash.error?.body ?? ""' />
                </div>

                <div class="flex flex-row-reverse">
                    <PrimaryButton type='submit' class='px-4'>
                        Log in
                    </PrimaryButton>
                </div>
            </form>
        </CardVue>
    </div>
</template>

<style scoped>
.v-enter-active,
.v-leave-active {
    transition: opacity 0.5s ease;
}

.v-enter-from,
.v-leave-to {
    opacity: 0;
}
</style>
