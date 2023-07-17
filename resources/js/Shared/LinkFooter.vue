<script setup>
import Link from './Link.vue';

defineProps({
    name: String,
})
</script>

<template>
    <Link :name='$props.name' class_inactive='text-gray-500' class_active='text-white underline'
        class='duration-500 hover:text-white'>
    <slot />
    </Link>
</template>
