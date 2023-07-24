<script setup lang='ts'>
import { Head } from '@inertiajs/vue3';

import { NewsPaginator } from '@/types/NewsType';

import Layout from '@/Layout/Layout.vue';
import NewsListVue from '@/Components/NewsLists.vue';

defineProps<{
    news: NewsPaginator
}>();
</script>

<template>
    <Head title='Events List' />
    <Layout>
        <main>
            <section class='p-8'>
                <NewsListVue :news='news.data' />
            </section>
        </main>
    </Layout>
</template>
