<script setup lang='ts'>
import Link from '@/Shared/Link.vue';

defineProps<{
    class?: string,
    href?: string,
    name?: string,
    type?: string,
}>();

defineEmits<{
    (e: 'click'): void
}>();

</script>

<template>
    <Link v-if='$props.type == "anchor"' @click='$emit("click")' :href='$props.href ?? ""' :name='$props.name ?? ""'
        :class='`bg-red-700 hover:bg-red-500 duration-500 rounded-md text-white p-2 ${$props.class}`'>
    <slot />
    </Link>
    <button v-else @click='$emit("click")'
        :class='`bg-red-700 hover:bg-red-500 duration-500 rounded-md text-white p-2 ${$props.class}`'>
        <slot />
    </button>
</template>
