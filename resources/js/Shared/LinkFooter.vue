<script setup lang='ts'>
import Link from './Link.vue';

defineProps<{
    href: string,
    name: string
}>();
</script>

<template>
    <Link :name='$props.name' :href='$props.href' class_inactive='text-gray-500' class_active='text-white underline'
        class='duration-500 hover:text-white'>
    <slot />
    </Link>
</template>
