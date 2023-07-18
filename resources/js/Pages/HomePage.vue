<script setup>
import { Head } from '@inertiajs/vue3'

import MottoLists from '../Data/MottoLists.js';

import LayoutVue from '@/Layout/Layout.vue';
import CardVue from '@/Shared/Card.vue';
</script>

<template>
    <Head title="Hello, World" />
    <LayoutVue>
        <main class='p-12'>
            <div class="flex sm:flex-col lg:flex-row gap-2 justify-evenly">
                <CardVue v-for='MottoList in MottoLists' class='flex flex-row w-full gap-2 p-2'>
                    <div class="flex w-[104px]">
                        <img :src='MottoList.src' :alt='MottoList.alt' class='w-[64px] h-[64px]'>
                    </div>
                    <div class="flex flex-col">
                        <h2 class='text-2xl font-bold italic gap-2'>
                            {{ MottoList.title }}
                        </h2>

                        <p>
                            {{ MottoList.body }}
                        </p>
                    </div>
                </CardVue>
            </div>
        </main>
    </LayoutVue>
</template>
