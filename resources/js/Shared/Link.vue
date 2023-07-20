<script setup lang="ts">
import { Method } from '@inertiajs/core';
import { Link } from '@inertiajs/vue3';

defineProps<{
    href: string,
    name: string,
    class?: string,
    method?: Method,
    as?: string,
    type?: string,
    class_active?: string,
    class_inactive?: string,
}>();
</script>

<template>
    <Link :href='$props.href' :method='$props.method ?? "get"' :as='$props.as ?? "a"' :type='$props.type ?? ""'
        :class='`${$props.class} ` + (route().current() == $props.name ? $props.class_active : $props.class_inactive)'>
    <slot />
    </Link>
</template>
