<script setup lang='ts'>
import { useForm } from '@inertiajs/vue3';

import NewsType from '@/Types/NewsType';

defineProps<{
    news: NewsType
}>();

const deletePost = useForm({});
</script>

<template>
    <form @submit.prevent='deletePost.delete(route("app.news.destroy", { news: $props.news.slug }))' method="post">
        <input type="submit" value="Delete" class='text-red-700 cursor-pointer'>
    </form>
</template>
