<script setup>
import DummyImage from '@/Assets/Images/presentation-event.jpg';

import Card from '@/Shared/Card.vue';
import OutlineButton from '@/Shared/OutlinePrimaryButton.vue';

defineProps({
    news: Object
});
</script>

<template>
    <Card class='flex md:flex-row sm:flex-col gap-2'>
        <img :src='$props.news.thumbnail ?? DummyImage' :alt='$props.news.title'
            class='md:w-[300px] sm:w-full h-[300px] text-center object-cover'>
        <div class='flex flex-col gap-1'>
            <h2 class='text-xl'>
                {{ $props.news.title }}
            </h2>

            <p>
                {{ $props.news.body }}
            </p>

            <div class='mt-4'>
                <OutlineButton type='anchor' :href='route("news.show", { slug: $props.news.slug })' class='text-black'>
                    Learn More
                </OutlineButton>
            </div>
        </div>
    </Card>
</template>
