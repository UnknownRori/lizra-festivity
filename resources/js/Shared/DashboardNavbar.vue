<script setup lang='ts'>
import { useForm } from '@inertiajs/vue3';

import DropdownMenu from './DropdownMenu.vue';

const logout = useForm({});

</script>

<template>
    <div class="flex flex-row-reverse w-full shadow-md p-4 borde border-2 border-gray-100">
        <div>
            <DropdownMenu>
                <template #title>
                    <div class='flex gap-2'>
                        <span>
                            {{ $page.props.auth?.name }}
                        </span>
                        <svg class="h-8 w-8 text-black" width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                            stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" />
                            <polyline points="6 9 12 15 18 9" />
                        </svg>
                    </div>
                </template>

                <template #default>
                    <form @submit.prevent='logout.post(route("auth.logout"))' method="post">
                        <input type="submit" value="Logout" class='text-red-600 cursor-pointer'>
                    </form>
                </template>
            </DropdownMenu>
        </div>
    </div>
</template>
