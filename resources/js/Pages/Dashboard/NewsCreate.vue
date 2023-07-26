<script setup lang='ts'>
import { ref, Ref, } from 'vue';
import { Head, useForm } from '@inertiajs/vue3';

import DashboardLayout from '@/Layout/DashboardLayout.vue';
import NewsForm from '@/Components/Dashboard/NewsForm.vue';
import { PublishStatus } from '@/types/NewsType';

defineProps<{
    'publish_status': PublishStatus,
}>();

const title = 'Create new post';
</script>

<template>
    <Head :title='title' />
    <DashboardLayout>
        <main class='w-4/5 min-h-4/5'>
            <NewsForm :endpoint='route("app.news.store")' :title='title' :publish_status='$props.publish_status' />
        </main>
    </DashboardLayout>
</template>
