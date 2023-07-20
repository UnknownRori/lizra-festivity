<script setup lang='ts'>
import Link from './Link.vue';

defineProps<{
    name: string,
    href: string,
}>();
</script>

<template>
    <Link :name='$props.name' class='duration-500 hover:text-black font-bold' class_inactive='text-gray-800'
        class_active='underline' :href='$props.href'>
    <slot />
    </Link>
</template>
