<script setup lang='ts'>
import { Head } from '@inertiajs/vue3';

import DashboardLayout from '@/Layout/DashboardLayout.vue';
import NewsTable from '@/Components/Dashboard/NewsTable.vue';
import { NewsPaginator } from '@/types/NewsType';

defineProps<{
    news: NewsPaginator,
}>();
</script>

<template>
    <Head title='List News' />
    <DashboardLayout>
        <main class='w-full h-full flex flex-col justify-center items-center'>
            <NewsTable :news='$props.news' />
        </main>
    </DashboardLayout>
</template>
