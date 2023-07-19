<script setup>
defineProps(['modelValue', 'type', 'placeholder', 'class', 'id']);
defineEmits(['update:modelValue'])
</script>

<template>
    <input :id='$props.id' :type='$props.type' ref='input' @input="$emit('update:modelValue', $event.target.value)"
        :placeholder='$props.placeholder' :value='modelValue'
        :class='`border-2 border-gray-200 p-2 rounded-md ${$props.class}`'>
</template>
