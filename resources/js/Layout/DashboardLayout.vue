<script setup lang='ts'>
import DashboardSidebar from '@/Shared/DashboardSidebar.vue';
import DashboardNavbar from '@/Shared/DashboardNavbar.vue'

</script>
<template>
    <div class='relative flex flex-row'>
        <DashboardSidebar />
        <div class="w-80 h-full">
            <!--  -->
        </div>

        <div class="flex flex-col w-full min-h-[100vh] gap-2">
            <DashboardNavbar />
            <main class='flex flex-col w-full h-full justify-center items-center'>
                <slot />
            </main>
        </div>
    </div>
</template>
