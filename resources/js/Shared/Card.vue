<script setup lang='ts'>
defineProps<{
    class: string,
}>();
</script>

<template>
    <div :class='`shadow p-2 m-2 rounded-md border-[1px] border-gray-100 ${$props.class}`'>
        <slot />
    </div>
</template>
