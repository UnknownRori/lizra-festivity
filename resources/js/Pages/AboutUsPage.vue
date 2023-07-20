<script setup lang='ts'>
import { Head } from '@inertiajs/vue3'

import PresentationEventImg from '@/Assets/Images/presentation-event.jpg';
import EventImg from '@/Assets/Images/event.jpg';

import Layout from '@/Layout/Layout.vue';
import CardVue from '@/Shared/Card.vue';
import JumpToTopVue from '@/Components/JumpToTop.vue';
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
        <main class='flex flex-col gap-6 p-12'>
            <section>
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

            <section>
                <!--  -->
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
