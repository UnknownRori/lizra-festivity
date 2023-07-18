<script setup>
import Link from '@/Shared/Link.vue';

defineProps({
    class: String,
    href: String,
    type: String,
})

defineEmits(['click']);

</script>

<template>
    <Link v-if='$props.type == "anchor"' @click='$emit("click")' :name='$props.href'
        :class='`border-2 border-red-700 hover:border-red-500 hover:bg-red-500 hover:text-white duration-500 rounded-md p-2 ${$props.class}`'>
    <slot />
    </Link>
    <button v-else @click='$emit("click")'
        :class='`border-2 border-red-700 hover:border-red-500 hover:bg-red-500 hover:text-white duration-500 rounded-md p-2 ${$props.class}`'>
        <slot />
    </button>
</template>
