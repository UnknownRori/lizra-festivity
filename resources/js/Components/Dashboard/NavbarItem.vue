<script setup lang='ts'>
import Link from '@/Shared/Link.vue';

defineProps<{
    src: string,
    title: string,
    href: string,
    name: string,
}>();
</script>

<template>
    <Link :name='$props.name' :href='$props.href' class='flex flex-row gap-4 justify-start items-center px-4 text-xl'>
    <img :src='$props.src' alt='Index icon' class='w-8'>
    <span>{{ $props.title }}</span>
    </Link>
</template>
