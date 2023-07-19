<script setup>
import { Link } from '@inertiajs/vue3';

defineProps({
    href: String,
    name: String,
    class: String,
    method: String,
    as: String,
    type: String,
    class_active: String,
    class_inactive: String,
})
</script>

<template>
    <Link :href='$props.href' :method='$props.method ?? "get"' :as='$props.as ?? "a"' :type='$props.type ?? ""'
        :class='`${$props.class} ` + (route().current() == $props.name ? $props.class_active : $props.class_inactive)'>
    <slot />
    </Link>
</template>
