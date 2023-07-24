<script setup lang='ts'>
import DummyImage from '@/Assets/Images/presentation-event.jpg';

import Card from '@/Shared/Card.vue';
import OutlineButton from '@/Shared/OutlinePrimaryButton.vue';

import type NewsType from '@/types/NewsType';

defineProps<{ news: NewsType }>();
</script>

<template>
    <Card class='flex md:flex-row sm:flex-col gap-2'>
        <img :src='$props.news.thumbnail ?? DummyImage' :alt='$props.news.title'
            class='md:w-[300px] sm:w-full h-[300px] text-center object-cover'>
        <div class='flex flex-col gap-1'>
            <h2 class='text-2xl font-bold'>
                {{ $props.news.title }}
            </h2>

            <span class='text-sm'>
                {{ $moment($props.news.created_at) < $moment().subtract(2, 'week')
                    ? $moment($props.news.created_at).format('dddd, MMMM YYYY, h:mm') :
                    $moment($props.news.created_at).fromNow() }}

            </span>

            <p class='text-lg'>
                {{ $props.news.body }}
            </p>

            <div class='mt-4'>
                <OutlineButton type='anchor' :href='route("news.show", { news: $props.news.slug })' class='text-black'>
                    Learn More
                </OutlineButton>
            </div>
        </div>
    </Card>
</template>
