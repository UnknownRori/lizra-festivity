<script setup lang='ts'>
import { Head } from '@inertiajs/vue3';

import LocationIcon from '@/Assets/Icons/location.png';
import MailIcon from '@/Assets/Icons/mail.png';
import TelephoneIcon from '@/Assets/Icons/telephone.png';

import Layout from '@/Layout/Layout.vue';
import CardVue from '@/Shared/Card.vue';
</script>

<template>
    <Head title='Contact us' />
    <Layout>
        <div class='relative h-[400px]'>
            <div
                :class='`front h-[400px] w-full brightness-[25%] absolute -z-10 bg-[url(@/Assets/Images/festival.jpg)] bg-no-repeat bg-center`'>
                <!--  -->
            </div>
            <div class='flex flex-col justify-center items-center h-[400px] gap-4 text-white'>
                <h1 class='text-5xl'>About us</h1>
                <h2 class='text-xl'>Lizra Festivity</h2>
            </div>
        </div>

        <div class='flex flex-col gap-12'>
            <section class='flex flex-row justify-center items-center flex-wrap mx-8'>
                <CardVue class='flex flex-row gap-4 justify-evenly items-center p-8 w-96'>
                    <div class='bg-pink-600 rounded-full p-2 w-16'>
                        <img :src='LocationIcon' alt='Location Icon'>
                    </div>
                    <div class='flex flex-col gap-2'>
                        <h2 class='text-2xl font-bold tracking-wider'>
                            Head Office
                        </h2>
                        <p>
                            Gedung Lorem, Jl. Subagio No. 69, Indonesia
                        </p>
                    </div>
                </CardVue>

                <CardVue class='flex flex-row gap-4 justify-evenly items-center p-8 w-96'>
                    <div class='bg-pink-600 rounded-full p-2 w-16'>
                        <img :src='MailIcon' alt='Mail Icon'>
                    </div>
                    <div class='flex flex-col gap-2'>
                        <h2 class='text-2xl font-bold tracking-wider'>
                            Mail for Information
                        </h2>
                        <p>
                            marketing.lizra@mail.com
                        </p>
                    </div>
                </CardVue>

                <CardVue class='flex flex-row gap-4 justify-evenly items-center p-8 w-96'>
                    <div class='bg-pink-600 rounded-full p-2 w-16'>
                        <img :src='TelephoneIcon' alt='Telephone Icon'>
                    </div>
                    <div class='flex flex-col gap-2 w-full'>
                        <h2 class='text-2xl font-bold tracking-wider'>
                            Call for help
                        </h2>
                        <p>
                            +62-888-8888-8888
                        </p>
                    </div>
                </CardVue>
            </section>
        </div>
    </Layout>
</template>
