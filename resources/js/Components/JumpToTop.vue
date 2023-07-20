<script setup lang='ts'>
import { watch, ref } from 'vue';

import useScrollPosition from '../Composable/useScrollPosition.js';

const position = useScrollPosition();
const animation = ref('hidden');

watch(position, () => {
    if (position.y >= 300) {
        animation.value = 'opacity-100';
    }
    else {
        animation.value = 'opacity-0 pointer-events-none';
    }
});
</script>

<template>
    <div :class='`fixed h-12 w-12 bottom-4 right-4 transition-opacity duration-500 ${animation}`'>
        <a href="#app">
            <svg class="h-12 w-12 text-white bg-pink-500 rounded-full p-2 motion-safe:hover:animate-bounce" fill="none"
                viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18" />
            </svg>
        </a>
    </div>
</template>
