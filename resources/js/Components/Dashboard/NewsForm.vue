<script setup lang='ts'>
import { ref, Ref, onMounted } from 'vue';
import { useForm, router } from '@inertiajs/vue3';

import CardVue from '@/Shared/Card.vue';
import Editor from '@/Components/Editor.vue'
import InputVue from '@/Shared/Input.vue';
import PrimaryButton from '@/Shared/PrimaryButton.vue';
import { PublishStatus } from '@/types/NewsType';

import NewsType from '@/Types/NewsType';

const props = defineProps<{
    title: string,
    publish_status: PublishStatus,
    endpoint: string,
    news?: NewsType
    update?: boolean,
}>();

const urlImgPreview: Ref<null | string> = ref(null);
const imgRef: Ref<null | HTMLInputElement> = ref(null);
const newPost = useForm<{
    title: string,
    thumbnail: any,
    body: string,
    publish_status: PublishStatus,
}>({
    title: '',
    thumbnail: null,
    body: '',
    publish_status: 'Draft',
});

if (props.news != null) {
    newPost.title = props.news.title;
    newPost.publish_status = props.news.publish_status;
    newPost.body = props.news.body
}

function previewImage(event: Event) {
    const target = (event.target as HTMLInputElement);

    if (target.files == null)
        return;

    urlImgPreview.value = URL.createObjectURL(target.files[0])
}

function submit(url: string) {
    if (imgRef.value == null || imgRef.value.files == null)
        return; // TODO : Proper error reporting

    newPost.thumbnail = imgRef.value.files[0];

    if (props.update) {
        return router.post(url, {
            _method: 'patch',
            ...(newPost.data()),
        });
    }

    newPost.post(url);
}
</script>

<template>
    <CardVue class='w-full h-full flex flex-col gap-2 p-8'>
        <header>
            <h2 class='text-2xl'>
                {{ $props.title }}
            </h2>
        </header>
        <form @submit.prevent='submit($props.endpoint)' method='POST' class='flex flex-col gap-4'>
            <div class='w-full'>
                <label for="title">Title</label>
                <InputVue v-model='newPost.title' class='border-gray-500 w-full' placeholder="Enter post's title"
                    required />
            </div>
            <div class="w-full flex flex-col">
                <label for="publish-status">Status</label>
                <select v-model='newPost.publish_status' name="publish-status" id="publish-status" required
                    class='p-2 border-2 border-gray-500 rounded-md'>
                    <option v-for='status in $props.publish_status' :value="status">{{ status }}</option>
                </select>
            </div>
            <div class='w-full'>
                <label for="thumbnail">Thumbnail</label>
                <!-- TODO : Refactor this to use the InputVue Component -->
                <input @change='previewImage' ref='imgRef' type='file' class='border-gray-500 w-full'
                    placeholder="Enter post's title">
                <!-- <InputVue @change='previewImage' ref='imgRef' v-model='newPost.thumbnail' type='file'
                            class='border-gray-500 w-full' placeholder="Enter post's title" required /> -->
                <progress v-if="newPost.progress" :value="newPost.progress.percentage" max="100">
                    {{ newPost.progress.percentage }}%
                </progress>
                <img v-if='urlImgPreview' :src="urlImgPreview" alt="" class='w-52 m-2 border-2 border-gray-200 rounded-md'>
            </div>
            <div class='flex flex-col gap-1'>
                <label for="body">Body</label>
                <Editor v-model='newPost.body' class='border-2 border-gray-500 rounded-md' />
            </div>
            <div class="flex flex-row gap-2 justify-end items-center px-4">
                <PrimaryButton type='submit' class='px-4'>
                    Save
                </PrimaryButton>
            </div>
        </form>
    </CardVue>
</template>
