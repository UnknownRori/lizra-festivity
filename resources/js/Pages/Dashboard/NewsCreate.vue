<script setup lang='ts'>
import { ref, Ref, } from 'vue';
import { Head, useForm } from '@inertiajs/vue3';

import DashboardLayout from '@/Layout/DashboardLayout.vue';
import NewsForm from '@/Components/Dashboard/NewsForm.vue';
import { PublishStatus } from '@/types/NewsType';

defineProps<{
    'publish_status': PublishStatus,
}>();

</script>

<template>
    <Head title='Create new Posts' />
    <DashboardLayout>
        <main class='w-4/5 min-h-4/5'>
            <NewsForm title='Create new post' :publish_status='$props.publish_status' />
        </main>
    </DashboardLayout>
</template>
