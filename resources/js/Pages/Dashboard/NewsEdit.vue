<script setup lang='ts'>
import { Head } from '@inertiajs/vue3';

import DashboardLayout from '@/Layout/DashboardLayout.vue';
import NewsForm from '@/Components/Dashboard/NewsForm.vue';

import NewsType, { PublishStatus } from '@/types/NewsType';

const props = defineProps<{
    news: NewsType,
    publish_status: PublishStatus,
}>();

const title = `Editing ${props.news.title}`;
</script>

<template>
    <Head :title='title' />
    <DashboardLayout>
        <main class='w-4/5 min-h-4/5'>
            <NewsForm :endpoint='route("app.news.update", { news: $props.news.slug })' :update='true' :title='title'
                :news='$props.news' :publish_status='$props.publish_status' />
        </main>
    </DashboardLayout>
</template>
