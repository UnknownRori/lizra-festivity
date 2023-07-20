<script setup lang='ts'>
import { Head } from '@inertiajs/vue3'

import ConceptLists from '@/Data/ConceptLists';

import PresentationEventImg from '@/Assets/Images/presentation-event.jpg';
import EventImg from '@/Assets/Images/event.jpg';
import DownloadImg from '@/Assets/Icons/download.png';

import Layout from '@/Layout/Layout.vue';
import CardVue from '@/Shared/Card.vue';
import JumpToTopVue from '@/Components/JumpToTop.vue';
import PrimaryButton from '@/Shared/PrimaryButton.vue';
</script>

<template>
    <Head title="About us" />
    <Layout>
        <div class='relative h-[400px]'>
            <div :class='`front h-[400px] w-full brightness-[25%] absolute -z-10 bg-[url(${PresentationEventImg})]`'>
                <!--  -->
            </div>
            <div class='flex flex-col justify-center items-center h-[400px] gap-4 text-white'>
                <h1 class='text-5xl'>About us</h1>
                <h2 class='text-xl'>Lizra Festivity</h2>
            </div>
        </div>
        <main class='flex flex-col gap-6'>
            <section class='p-12'>
                <CardVue class='flex lg:flex-row sm:flex-col gap-4 p-2'>
                    <div class='flex flex-col gap-4 w-full'>
                        <div class="flex flex-row py-4 items-center">
                            <h4 class='text-pink-600 transform -rotate-90 underline cursor-vertical-text w-36 text-center'>
                                About us
                            </h4>
                            <h2 class='text-2xl -translate-x-3'>
                                Lorem ipsum dolor sit amet, consectetur adipiscing eli
                            </h2>
                        </div>
                        <div>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                                labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                                laboris nisi ut aliquip ex ea commodo consequat
                            </p>
                        </div>
                    </div>
                    <div class='w-full self-center'>
                        <img :src='EventImg' alt="Event" class='rounded-md'>
                    </div>
                </CardVue>
            </section>

            <section class='flex lg:flex-row md:flex-col justify-evenly bg-black text-white p-6 items-center'>
                <div class='flex gap-2 items-center'>
                    <h2 class='text-2xl'>Want to know more about us?</h2>
                    <p class='text-sm'>Just download the brochure</p>
                </div>
                <div>
                    <PrimaryButton class='flex gap-4 items-center'>
                        <img :src="DownloadImg" alt="download" class='w-8'>
                        <span>Download Brochure</span>
                    </PrimaryButton>
                </div>
            </section>

            <section class='flex lg:flex-row sm:flex-col gap-2 p-14'>
                <CardVue v-for='concept in ConceptLists'
                    class='flex flex-col items-center w-full lg:h-72 sm:h-48 text-center'>
                    <img :src='concept.src' :alt='concept.alt' class='w-[64px]'>
                    <h2 class='text-3xl font-bold'>
                        {{ concept.title }}
                    </h2>
                    <p>
                        {{ concept.body }}
                    </p>
                </CardVue>
            </section>
        </main>
    </Layout>
    <JumpToTopVue />
</template>

<style scoped>
/* <!-- TODO : Fix this later -->*/
.front {
    background-image: url('../Assets/Images/presentation-event.jpg');
    background-position: center;
    background-repeat: no-repeat;
}
</style>
