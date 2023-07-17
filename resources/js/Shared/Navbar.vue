<script setup>
import Title from '@/Assets/title-light.png';
import Link from '@/Shared/LinkNavbar.vue';
</script>

<template>
    <nav class='flex shadow w-screen py-3 md:px-24'>
        <header>
            <img :src="Title" alt="Lizra Festivity" class='w-36'>
        </header>
        <div class='flex items-center mx-4'>
            <ul class='flex gap-2'>
                <li>
                    <Link name='home'>
                    Home
                    </Link>
                </li>
                <li>
                    <Link name='news.index'>
                    News
                    </Link>
                </li>
                <li>
                    <Link name='contact-us'>
                    Contact us
                    </Link>
                </li>
                <li>
                    <Link name='about-us'>
                    About us
                    </Link>
                </li>
            </ul>
        </div>
    </nav>
</template>
