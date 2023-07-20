<script setup lang='ts'>
defineProps<{
    type?: string,
    class?: string,
    id?: string,
    modelValue?: any,
    placeholder?: string,
}>();

defineEmits<{
    (e: 'update:modelValue', value: any): void
}>();
</script>

<template>
    <input :id='$props.id' :type='$props.type ?? "text"' ref='input'
        @input="$emit('update:modelValue', ($event.target as HTMLInputElement).value)" :placeholder='$props.placeholder'
        :value='modelValue' :class='`border-2 border-gray-200 p-2 rounded-md ${$props.class}`'>
</template>
