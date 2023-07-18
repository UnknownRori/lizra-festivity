<script setup>
import { Head } from '@inertiajs/vue3'

import LondonCon from '@/Assets/Images/london-con.jpg';
import MottoLists from '../Data/MottoLists.js';

import LayoutVue from '@/Layout/Layout.vue';
import CardVue from '@/Shared/Card.vue';
import PrimaryButton from '@/Shared/PrimaryButton.vue';
import OutlinePrimaryButton from '@/Shared/OutlinePrimaryButton.vue';
</script>

<template>
    <Head title="Hello, World" />
    <LayoutVue>
        <div class='relative h-[400px]'>
            <div :class='`front h-[400px] w-full brightness-[25%] absolute -z-10 bg-[url(${LondonCon})]`'>
                <!--  -->
            </div>
            <div class='flex flex-col justify-center items-center h-[400px] gap-4'>
                <div class='text-3xl text-white w-[45%] text-center'>
                    <h2>The Power of Imagination Make us Awesome</h2>
                </div>
                <div class="flex flex-row gap-2">
                    <OutlinePrimaryButton href='about-us' type='anchor'>
                        Learn More
                    </OutlinePrimaryButton>
                    <PrimaryButton>
                        Join Us
                    </PrimaryButton>
                </div>
            </div>
        </div>
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

<style scoped>
.front {
    background-image: url('../Assets/Images/london-con.jpg');
    background-position: center;
    background-repeat: no-repeat;
}
</style>
