<script setup lang='ts'>
import { ref, Ref, } from 'vue';
import { Head, useForm } from '@inertiajs/vue3';

import DashboardLayout from '@/Layout/DashboardLayout.vue';
import CardVue from '@/Shared/Card.vue';
import Editor from '@/Components/Editor.vue'
import InputVue from '@/Shared/Input.vue';
import { PublishStatus } from '@/types/NewsType';

const urlImgPreview: Ref<null | string> = ref(null);

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

function previewImage(event: Event) {
    const target = (event.target as HTMLInputElement);

    if (target.files == null)
        return;

    urlImgPreview.value = URL.createObjectURL(target.files[0])
}
</script>

<template>
    <Head title='Create new Posts' />
    <DashboardLayout>
        <main class='w-4/5 min-h-4/5'>
            <CardVue class='w-full h-full flex flex-col gap-2 p-8'>
                <header>
                    <h2 class='text-2xl'>
                        Create new Post
                    </h2>
                </header>
                <form @submit.prevent='' class='flex flex-col gap-4'>
                    <div class='w-full'>
                        <label for="title">Title</label>
                        <InputVue v-model='newPost.title' class='border-gray-500 w-full' placeholder="Enter post's title" />
                    </div>
                    <div class='w-full'>
                        <label for="thumbnail">Thumbnail</label>
                        <InputVue @change='previewImage' ref='imgRef' v-model='newPost.thumbnail' type='file'
                            class='border-gray-500 w-full' placeholder="Enter post's title" />
                        <img v-if='urlImgPreview' :src="urlImgPreview" alt=""
                            class='w-52 m-2 border-2 border-gray-200 rounded-md'>
                    </div>
                    <div class='flex flex-col gap-1'>
                        <label for="body">Body</label>
                        <Editor v-model='newPost.body' class='border-2 border-gray-500 rounded-md' />
                    </div>
                </form>
            </CardVue>
        </main>
    </DashboardLayout>
</template>
