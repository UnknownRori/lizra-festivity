<script setup lang='ts'>
import NewsType from '@/types/NewsType';
import News from './News.vue'

defineProps<{
    news: Array<NewsType>
}>();
</script>

<template>
    <ul>
        <li v-for='post in news'>
            <News :news='post' />
        </li>
    </ul>
</template>
