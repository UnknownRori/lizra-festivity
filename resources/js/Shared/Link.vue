<script setup>
import { Link } from '@inertiajs/vue3';

defineProps({
    name: String,
    class: String,
    class_active: String,
    class_inactive: String,
})
</script>

<template>
    <Link :href='route($props.name)'
        :class='`${$props.class} ` + (route().current() == $props.name ? $props.class_active : $props.class_inactive)'>
    <slot />
    </Link>
</template>
