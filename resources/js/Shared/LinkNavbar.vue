<script setup lang='ts'>
import Link from './Link.vue';

defineProps<{
    name: string,
    href: string,
}>();
</script>

<template>
    <Link :name='$props.name' class='duration-500 hover:text-black font-bold nav-link text-lg'
        class_inactive='text-gray-800' class_active='active' :href='$props.href'>
    <slot />
    </Link>
</template>

<style scoped>
.nav-link {
    padding: 0.3rem;
    margin-right: 0.1rem;
    margin-left: 0.1rem;

    --s: 0.2em;
    /* the thickness of the line */
    --c: rgb(77, 77, 77);
    /* the color */

    color: #0000;
    padding-bottom: var(--s);
    background:
        linear-gradient(90deg, var(--c) 50%, var(--c) 0) calc(100% - var(--_p, 0%))/200% 100%,
        linear-gradient(var(--c) 0 0) 0% 100%/var(--_p, 0%) var(--s) no-repeat;
    -webkit-background-clip: text, padding-box;
    background-clip: text, padding-box;
    transition: 0.5s;
}

.nav-link:hover {
    --_p: 100%
}

.nav-link.active {
    --_p: 100%;
    --c: rgb(0, 0, 0);
}
</style>
