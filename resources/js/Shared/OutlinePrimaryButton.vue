<script setup lang='ts'>
import Link from '@/Shared/Link.vue';

defineProps<{
    class?: string,
    href?: string,
    name?: string,
    type?: string,
}>();

defineEmits<{
    (e: 'click'): void;
}>();
</script>

<template>
    <Link v-if='$props.type == "anchor"' method='get' @click='$emit("click")' :href='$props.href ?? ""'
        :name='$props.name ?? ""'
        :class='`border-2 border-red-700 hover:border-red-500 hover:bg-red-500 hover:text-white duration-500 rounded-md p-2 ${$props.class}`'>
    <slot />
    </Link>
    <button v-else @click='$emit("click")'
        :class='`border-2 border-red-700 hover:border-red-500 hover:bg-red-500 hover:text-white duration-500 rounded-md p-2 ${$props.class}`'>
        <slot />
    </button>
</template>
