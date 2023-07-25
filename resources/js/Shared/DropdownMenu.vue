<script setup lang='ts'>
import useToggleAnimation from '@/Composable/useToggleAnimation';
import { None } from '@sniptt/monads';

const { toggle, style, state } = useToggleAnimation({
    animatedOnStart: true,
    beforeAnimate: None,
    offAnimate: 'opacity-0 pointer-events-none',
    onAnimate: 'opacity-100 pointer-events-auto',
});
</script>

<template>
    <div class='relative' @click='toggle'>
        <button>
            <slot name='title' />
        </button>

        <div :class='`opacity-0 pointer-events-none ${style} duration-500 fixed p-4 bg-white shadow-md z-10`'>
            <slot />
        </div>
    </div>
</template>
