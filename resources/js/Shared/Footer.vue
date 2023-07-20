<script setup lang='ts'>
import Link from './LinkFooter.vue';

import SocialMediaLists from '@/Data/SocialMediaLists.js';

import Title from '@/Assets/title-dark.png';
import SendIcon from '@/Assets/Icons/send.png';

</script>

<template>
    <footer class='md:flex p-6 gap-2 bg-black text-white'>
        <div class="p-2 flex flex-col gap-2 w-full">
            <img :src='Title' alt="Lizra Festivity" class='w-64'>
            <h2>Lizra Corporation&copy;2023</h2>
        </div>
        <div class="p-2 flex flex-col w-full">
            <h2 class='text-yellow-500 text-2xl'>
                Navigation
            </h2>
            <ul>
                <li class='hover:translate-x-8 ease-in-out duration-500'>
                    <Link :href='route("home")' name='home'>
                    Home
                    </Link>
                </li>
                <li class='hover:translate-x-8 ease-in-out duration-500'>
                    <Link :href='route("news.index")' name='news.index'>
                    News
                    </Link>
                </li>
                <li class='hover:translate-x-8 ease-in-out duration-500'>
                    <Link :href='route("contact-us")' name='contact-us'>
                    Contact us
                    </Link>
                </li>
                <li class='hover:translate-x-8 ease-in-out duration-500'>
                    <Link :href='route("about-us")' name='about-us'>
                    About us
                    </Link>
                </li>
            </ul>
        </div>
        <div class="p-2 flex flex-col w-full gap-4">
            <h2 class='text-yellow-500 text-2xl'>
                Social Media
            </h2>
            <div class='flex flex-col gap-2'>
                <form action="#">
                    <label for="subscribe" class='text-gray-400'>Subscribe to our newsletter</label>
                    <div class="flex bg-gray-900 border-gray-800 rounded-md justify-evenly">
                        <input type="email" placeholder='Type your email' name='mail'
                            class='text-white rounded p-1 bg-transparent w-full'>
                        <button type="submit"
                            class='flex bg-gradient-to-r to-blue-600 from-pink-700 w-12 justify-center rounded-e-md'>
                            <img :src='SendIcon' alt="Send" class='w-8'>
                        </button>
                    </div>
                </form>
            </div>
            <ul class="flex gap-2 justify-center">
                <li v-for='SocialMediaList in SocialMediaLists'>
                    <a :href='SocialMediaList.href'>
                        <img :src='SocialMediaList.src' :alt='SocialMediaList.alt' class='w-8'>
                    </a>
                </li>
            </ul>
        </div>
    </footer>
</template>
