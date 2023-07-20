<script setup lang='ts'>
import { ref, Ref } from 'vue';

import Title from '@/Assets/title-light.png';
import Link from '@/Shared/LinkNavbar.vue';
import HamburgerButton from './HamburgerButton.vue';
import { State } from '@/Composable/useToggleAnimation';

const collapsed = 'sm:opacity-0 sm:pointer-events-none';
const collapsibleNavStyle = ref(collapsed);

function collapseNavbar(state: Ref<State>) {
    if (state.value == State.On) {
        collapsibleNavStyle.value = 'sm:opacity-100 sm:translate-y-32 sm:pointer-events-auto';

        return;
    }

    collapsibleNavStyle.value = collapsed;
}

</script>

<template>
    <nav class='relative flex sm:flex-col md:flex-row shadow w-screen py-3 px-24'>
        <div class='flex justify-between items-center'>
            <header>
                <img :src="Title" alt="Lizra Festivity" class='w-36'>
            </header>
            <HamburgerButton @click='collapseNavbar' class='w-12 md:hidden' />
        </div>
        <div
            :class='`z-10 sm:absolute md:relative flex md:items-center sm:items-start
            md:mx-4 sm:mx-0 sm:px-24 sm:pb-3 md:pb-0 md:px-0 sm:bottom-0 sm:left-0 sm:w-full md:opacity-100 md:pointer-events-auto rounded-md bg-slate-100 sm:shadow-sm duration-500 ${collapsibleNavStyle}`'>
            <ul class='flex sm:flex-col md:flex-row gap-2'>
                <li>
                    <Link :href='route("home")' name='home'>
                    Home
                    </Link>
                </li>
                <li>
                    <Link :href='route("news.index")' name='news.index'>
                    News
                    </Link>
                </li>
                <li>
                    <Link :href='route("contact-us")' name='contact-us'>
                    Contact us
                    </Link>
                </li>
                <li>
                    <Link :href='route("about-us")' name='about-us'>
                    About us
                    </Link>
                </li>
            </ul>
        </div>
    </nav>
</template>

<style scoped></style>
