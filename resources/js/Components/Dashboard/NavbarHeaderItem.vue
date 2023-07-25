<script setup lang='ts'>
import useToggleAnimation from '@/Composable/useToggleAnimation';
import { None } from '@sniptt/monads';

const { toggle, style, state } = useToggleAnimation({
    animatedOnStart: false,
    beforeAnimate: None,
    offAnimate: '',
    onAnimate: '',
});

defineProps<{
    name: string,
}>();
</script>

<template>
    <header class='flex justify-between cursor-pointer'>
        <h2 class='text-3xl text-left'>{{ $props.name }}</h2>
        <svg class="h-8 w-8 text-white" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
            stroke-linecap="round" stroke-linejoin="round">
            <polyline points="15 18 9 12 15 6" />
        </svg>
        <!-- <svg class="h-8 w-8 text-white" width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                    stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" />
                    <polyline points="6 9 12 15 18 9" />
                </svg> -->
    </header>
</template>
