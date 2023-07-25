<script setup lang='ts'>
import IndexIcon from '@/Assets/Icons/index.png';
import DraftIcon from '@/Assets/Icons/draft.png';

import NavbarHeaderItem from '@/Components/Dashboard/NavbarHeaderItem.vue';
import NavbarItem from './NavbarItem.vue';
</script>

<template>
    <section class='w-full flex flex-col gap-2'>
        <NavbarHeaderItem name='Post' />
        <ul class='flex flex-col gap-4 justify-between'>
            <li>
                <NavbarItem name='app.news.index' :href='route("app.news.index")' title='List Posts' :src='IndexIcon' />
            </li>
            <li>
                <NavbarItem name='app.news.create' :href='route("app.news.create")' title='New Posts' :src='DraftIcon' />
            </li>
        </ul>
    </section>
</template>
