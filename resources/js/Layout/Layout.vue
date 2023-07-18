<script setup>
import NavbarVue from '@/Shared/Navbar.vue';
import FooterVue from '@/Shared/Footer.vue';

</script>

<template>
    <div class='container'>
        <NavbarVue />
        <div class='main-content'>
            <slot />
        </div>
        <FooterVue />
    </div>
</template>

<style scoped>
.container {
    min-height: 100vh;
    max-width: 100vw;
    display: grid;
    grid-template-rows: auto 1fr 1fr;
}
</style>
