<script setup lang='ts'>
import { ref } from 'vue';

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

const inputRef = ref(null);

defineExpose({
    inputRef,
});

</script>

<template>
    <input ref='inputRef' :id='$props.id' :type='$props.type ?? "text"'
        @input="$emit('update:modelValue', ($event.target as HTMLInputElement).value)" :placeholder='$props.placeholder'
        :value='modelValue' :class='`border-2 border-gray-200 p-2 rounded-md ${$props.class}`'>
</template>
