<script setup lang='ts'>
import { Head } from '@inertiajs/vue3'

import MottoLists from '../Data/MottoLists';

import LayoutVue from '@/Layout/Layout.vue';
import CardVue from '@/Shared/Card.vue';
import PrimaryButton from '@/Shared/PrimaryButton.vue';
import OutlinePrimaryButton from '@/Shared/OutlinePrimaryButton.vue';
import NewsLists from '@/Components/NewsLists.vue';
import ConsultForm from '@/Components/ConsultForm.vue';
import JumpToTopVue from '@/Components/JumpToTop.vue';
import NewsType from '@/types/NewsType';

defineProps<{ news: Array<NewsType> }>();
</script>

<template>
    <Head title="Home" />
    <LayoutVue>
        <div class='relative h-[400px]'>
            <div
                :class='`front h-[400px] w-full brightness-[25%] absolute -z-10 bg-[url(@/Assets/Images/london-con.jpg)] bg-no-repeat bg-center`'>
                <!--  -->
            </div>
            <div class='flex flex-col justify-center items-center h-[400px] gap-4'>
                <div class='text-3xl text-white w-[45%] text-center'>
                    <h2>The Power of Imagination Make us Awesome</h2>
                </div>
                <div class="flex flex-row gap-2">
                    <OutlinePrimaryButton href='about-us' type='anchor' class='text-white'>
                        Learn More
                    </OutlinePrimaryButton>
                    <PrimaryButton>
                        Join Us
                    </PrimaryButton>
                </div>
            </div>
        </div>
        <main class='flex flex-col gap-12 p-12'>
            <section class="flex sm:flex-col lg:flex-row gap-2 justify-evenly">
                <CardVue v-for='MottoList in MottoLists' class='flex flex-row w-full gap-2 p-4'>
                    <div class="flex w-[104px] items-center justify-center">
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
            </section>

            <section class='flex flex-col gap-4'>
                <h2 class='text-3xl underline'>
                    Recent Events
                </h2>
                <NewsLists :news='$props.news' />
                <div class="flex justify-center">
                    <PrimaryButton :href='route("news.index")' name='news.index' type='anchor'>
                        Read More
                    </PrimaryButton>
                </div>
            </section>

            <section class='flex flex-col gap-4'>
                <h2 class='lg:w-96 sm:w-full tracking-widest text-2xl font-bold'>
                    Our client,want activities to run smoothly and successfully
                </h2>
                <div class="flex sm:flex-col lg:flex-row gap-4 shadow-md rounded-md p-2">
                    <ConsultForm />
                </div>
            </section>
        </main>
    </LayoutVue>
    <JumpToTopVue />
</template>
