<script setup lang='ts'>
defineProps<{
    class?: string,
}>();
</script>

<template>
    <div :class='`shadow-lg p-2 m-2 rounded-md border-[1px] border-gray-200 ${$props.class ?? ""}`'>
        <slot />
    </div>
</template>
