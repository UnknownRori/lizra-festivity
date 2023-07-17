<script setup>
import Link from './Link.vue';

defineProps({
    name: String,
})
</script>

<template>
    <Link :name='$props.name' class_active='underline'>
    <slot />
    </Link>
</template>
