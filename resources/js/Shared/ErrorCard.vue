<script setup lang='ts'>
defineProps<{
    display: any,
    body: string,
}>()
</script>

<template>
    <div v-if='$props.display' class='bg-red-500 text-white rounded-md p-2'>
        {{ $props.body }}
    </div>
</template>
