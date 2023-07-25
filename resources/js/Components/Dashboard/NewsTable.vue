<script setup lang='ts'>
import { Link } from '@inertiajs/vue3';

import PrimaryButton from '@/Shared/PrimaryButton.vue';
import PaginationButton from '@/Shared/PaginationButton.vue';
import DropdownMenu from '@/Shared/DropdownMenu.vue';
import DeleteNews from './DeleteNews.vue';
import { NewsPaginator } from '@/types/NewsType';

defineProps<{
    news: NewsPaginator
}>();
</script>

<template>
    <section class='flex flex-col gap-2 justify-center items-center w-full px-8'>
        <div>

        </div>
        <table class='border-2 border-black p-2 w-full'>
            <thead class='text-white bg-gray-700'>
                <tr class='grid grid-cols-[4rem_auto_8rem_8rem] divide-x-2 divide-gray-400 text-center'>
                    <td class='py-1 px-2'>#</td>
                    <td class='py-1 px-2'>Title</td>
                    <td class='py-1 px-2'>Status</td>
                    <td class='py-1 px-2'>Action</td>
                </tr>
            </thead>
            <tbody>
                <tr v-for='(post, index) in $props.news.data' class='grid grid-cols-[4rem_auto_8rem_8rem] text-center'>
                    <td class='flex justify-center items-center border-[0.05rem] border-black py-1 px-2'>
                        {{ index + 1 }}
                    </td>
                    <td class='border-[0.05rem] border-black py-1 px-2 text-left'>{{ post.title }}</td>
                    <td class='flex items-center justify-center border-[0.05rem] border-black py-1 px-2'>
                        <span
                            :class='`px-1 rounded-full text-white ${post.publish_status == "Published" ? "bg-green-700" : "bg-gray-500"}`'>
                            {{ post.publish_status }}
                        </span>
                    </td>
                    <td class='flex items-center justify-center border-[0.05rem] border-black py-1 px-2'>
                        <DropdownMenu>
                            <template #title>
                                <div
                                    class='flex justify-center items-center gap-2 bg-red-700 hover:bg-red-500 duration-500 rounded-md text-white px-1'>
                                    <span>
                                        Action
                                    </span>
                                    <svg class="h-8 w-8 text-whit" width="24" height="24" viewBox="0 0 24 24"
                                        stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" />
                                        <polyline points="6 9 12 15 18 9" />
                                    </svg>
                                </div>
                            </template>
                            <template #default>
                                <div class="flex flex-col justify-start items-start gap-2">
                                    <Link :href='route("app.news.edit", { news: post.slug })'>
                                    Edit
                                    </Link>
                                    <DeleteNews :news='post' />
                                </div>
                            </template>
                        </DropdownMenu>
                    </td>
                </tr>
            </tbody>
        </table>
        <div class='text-center'>
            <PaginationButton :links='$props.news.links' />

            <span>Showing
                {{ $props.news.to }} out of {{ $props.news.total }}</span>
        </div>
    </section>
</template>
