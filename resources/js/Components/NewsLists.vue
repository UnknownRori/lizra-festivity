<script setup>
import News from './News.vue'

defineProps({
    news: Array
});
</script>

<template>
    <ul>
        <li v-for='post in news'>
            <News :news='post' />
        </li>
    </ul>
</template>
