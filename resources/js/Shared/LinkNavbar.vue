<script setup lang='ts'>
import Link from './Link.vue';

defineProps<{
    name: string,
    href: string,
}>();
</script>

<template>
    <Link :name='$props.name' class_active='underline' :href='$props.href'>
    <slot />
    </Link>
</template>
