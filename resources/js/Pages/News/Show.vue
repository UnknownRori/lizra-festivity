<script setup lang='ts'>
import { Head } from '@inertiajs/vue3';

import DummyImage from '@/Assets/Images/presentation-event.jpg';
import type News from '@/types/NewsType';

import Layout from '@/Layout/Layout.vue';
import JumpToTopVue from '@/Components/JumpToTop.vue';
import TimeCardVue from '@/Shared/TimeCard.vue';

defineProps<{
    news: News
}>();
</script>

<template>
    <Head :title='$props.news.title' />
    <JumpToTopVue />
    <Layout>
        <main class='p-12'>
            <header class='flex flex-col items-center'>
                <h2 class='text-3xl text-center'>
                    {{ $props.news.title }}
                </h2>

                <img :src='$props.news.thumbnail ?? DummyImage' :alt='$props.news.alt' class='w-1/2 rounded-md'>
            </header>
            <TimeCardVue :time='$props.news.created_at' />

            <section class='m-4' v-html='$props.news.body'>
            </section>
        </main>
    </Layout>
</template>
