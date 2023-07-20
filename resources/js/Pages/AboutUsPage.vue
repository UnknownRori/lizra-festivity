<script setup lang='ts'>
import { Head } from '@inertiajs/vue3'

import ConceptLists from '@/Data/ConceptLists';

import PresentationEventImg from '@/Assets/Images/presentation-event.jpg';
import EventImg from '@/Assets/Images/event.jpg';
import DownloadImg from '@/Assets/Icons/download.png';
import WeddingImg from '@/Assets/Images/wedding-2.jpg';

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

            <section class='flex lg:flex-row sm:flex-col gap-2 px-14 py-2'>
                <CardVue v-for='concept in ConceptLists'
                    class='flex flex-col items-center justify-center w-full lg:h-72 sm:h-48 text-center'>
                    <img :src='concept.src' :alt='concept.alt' class='w-[64px]'>
                    <h2 class='text-3xl font-bold'>
                        {{ concept.title }}
                    </h2>
                    <p>
                        {{ concept.body }}
                    </p>
                </CardVue>
            </section>

            <section class='flex flex-col gap-4 px-14 py-2'>
                <div class='flex lg:flex-row sm:flex-col gap-2'>
                    <header class='w-full'>
                        <h5 class='text-pink-500 tracking-widest text-lg'>
                            Why choose us?
                        </h5>
                        <h2 class='text-2xl tracking-tight'>
                            There are many company but why
                        </h2>
                        <h2 class='text-pink-500 text-2xl tracking-tight'>
                            choose us
                        </h2>
                    </header>
                    <section>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias nulla, ipsa unde amet eveniet
                            dicta expedita repellat quos sint voluptate consectetur nostrum voluptates.
                        </p>
                    </section>
                </div>
                <div class='flex lg:flex-row sm:flex-col items-center gap-4'>
                    <section>
                        <CardVue>
                            <h2 class='text-2xl font-bold'>
                                Service Excellence
                            </h2>

                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. A quam autem enim natus hic
                                deleniti ipsam eum optio.
                            </p>
                        </CardVue>
                        <CardVue>
                            <h2 class='text-2xl font-bold'>
                                Expert Team
                            </h2>

                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. A quam autem enim natus hic
                                deleniti ipsam eum optio.
                            </p>
                        </CardVue>
                    </section>
                    <section class='lg:w-3/4 sm:w-full'>
                        <img :src='WeddingImg' alt="Wedding Image" class='rounded-lg object-contain'>
                    </section>
                </div>
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
