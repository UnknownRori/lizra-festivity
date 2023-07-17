<script setup>
import NavbarVue from '@/Shared/Navbar.vue';
import FooterVue from '@/Shared/Footer.vue';

</script>

<template>
    <NavbarVue />
    <main>
        <slot />
    </main>
    <FooterVue />
</template>
