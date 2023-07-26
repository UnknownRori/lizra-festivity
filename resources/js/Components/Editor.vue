<script setup lang='ts'>
import { ref, Ref, onMounted, onBeforeUnmount, watch } from 'vue';
import { Editor, EditorContent } from '@tiptap/vue-3'
import StarterKit from '@tiptap/starter-kit'

const props = defineProps<{
    class?: string,
    modelValue?: any
}>();

const editor: Ref<null | Editor> = ref(null)

const emits = defineEmits<{
    (e: 'update:modelValue', value: any): void
}>();

onMounted(() => {
    editor.value = new Editor({
        content: 'Hello, World',
        onUpdate: () => emits('update:modelValue', editor.value?.getHTML()),
        extensions: [
            StarterKit,
        ],
        editorProps: {
            attributes: {
                class: 'prose prose-sm sm:prose-base lg:prose-lg xl:prose-xl m-2 focus:outline-none',
            },
        },
    });
})

onBeforeUnmount(() => {
    editor.value?.destroy();
})
</script>

<template>
    <EditorContent :editor='(editor as Editor)' :class='$props.class ?? ""' />
</template>
