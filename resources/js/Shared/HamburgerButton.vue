<script setup lang='ts'>
import { Ref } from 'vue'

import useToggleAnimation, { State } from '@/Composable/useToggleAnimation';
import { None } from '@sniptt/monads';

defineProps<{
    class?: string,
}>();

const emits = defineEmits<{
    (e: 'click', state: Ref<State>): void
}>();

const { toggle, style, state } = useToggleAnimation({
    animatedOnStart: false,
    beforeAnimate: None,
    offAnimate: '',
    onAnimate: 'animate-hamburger-block-open',
});

function clickAction() {
    toggle();
    emits('click', state);
}
</script>

<template>
    <button @click='clickAction' :class='`flex flex-col gap-[5px] ${$props.class ?? ""}`'>
        <span :class='`p-[3px] duration-500 bg-black rounded-full ${style}`'></span>
        <span :class='`p-[3px] duration-500 bg-black rounded-full ${style}`'></span>
        <span :class='`p-[3px] duration-500 bg-black rounded-full ${style}`'></span>
    </button>
</template>

<style scoped>
.animate-hamburger-block-open:nth-child(1) {
    transform: translateY(12px) rotate(-45deg);
}

.animate-hamburger-block-open:nth-child(2) {
    transform: translateY(1px) rotate(45deg);
}

.animate-hamburger-block-open:nth-child(3) {
    transform: translateY(-9px) rotate(45deg);
}
</style>
