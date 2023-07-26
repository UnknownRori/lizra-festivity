<script setup lang='ts'>
import { Link } from '@inertiajs/vue3';
import Title from '@/Assets/title-dark.png'

import PostMenu from '@/Components/Dashboard/PostMenu.vue';
</script>

<template>
    <div class='fixed flex flex-col gap-4 bg-slate-900 text-white p-4 items-center w-64 min-h-[100vh]'>
        <header>
            <Link :href='route("app.dashboard")'>
            <img :src="Title" alt="Lizra Festivity" class='w-64'>
            </Link>
        </header>

        <PostMenu />

    </div>
</template>

