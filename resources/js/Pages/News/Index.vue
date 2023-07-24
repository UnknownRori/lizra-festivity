<script setup lang='ts'>
import { Head } from '@inertiajs/vue3';

import { NewsPaginator } from '@/types/NewsType';

import Layout from '@/Layout/Layout.vue';
import NewsListVue from '@/Components/NewsLists.vue';
import PaginationButton from '@/Shared/PaginationButton.vue';

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

            <section class='flex flex-row justify-center items-center p-2'>
                <PaginationButton :links='$props.news.links' />
            </section>
        </main>
    </Layout>
</template>
