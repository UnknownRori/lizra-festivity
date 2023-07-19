<script setup>
import LocationIcon from '@/Assets/Icons/location.png';
import MailIcon from '@/Assets/Icons/mail.png';

import InputVue from '@/Shared/Input.vue';



</script>
<template>
    <div class='flex flex-col gap-4 justify-center w-full'>
        <CardVue class='flex flex-row items-center p-4 gap-4'>
            <div class='bg-pink-600 rounded-full p-2 w-18 h-18'>
                <img :src='LocationIcon' alt="Location icon">
            </div>
            <div>
                <h2 class='text-3xl'>
                    Head offices
                </h2>
                <p>
                    Gedung Lorem, Jl. Subagio No. 69, Indonesia
                </p>
            </div>
        </CardVue>
        <CardVue class='flex flex-row items-center p-4 gap-4'>
            <div class='bg-pink-600 rounded-full p-2 w-18 h-18'>
                <img :src='MailIcon' alt="Mail icon" class='w-12'>
            </div>
            <div>
                <h2 class='text-3xl'>
                    Mail for information
                </h2>
                <p>
                    marketing.lizra@mail.com
                </p>
            </div>
        </CardVue>
    </div>
    <form action="#" method="post" class='flex flex-col gap-2 w-full p-2 m-2'>
        <!-- TODO : Bind to the useForm() -->
        <div class='flex gap-2'>
            <div>
                <label for="first-name">First name</label>
                <InputVue type='text' id='first-name' class='w-full' placeholder='Enter your first name' required />
            </div>
            <div>
                <label for="last-name">Last name</label>
                <InputVue type='text' id='last-name' class='w-full' placeholder='Enter your last name' required />
            </div>
        </div>
        <div>
            <label for="email">Email</label>
            <InputVue type='email' id='email' class='w-full' placeholder='Enter your email' required />
        </div>
        <div class='flex flex-col'>
            <label for="message">Message</label>
            <textarea name="message" id="message" cols="10" rows="5" class='border-2 border-gray-200 p-2 rounded-md'
                placeholder='Enter your message' required>
            </textarea>
        </div>
        <div class='ml-auto'>
            <button type='submit' class='bg-red-700 hover:bg-red-500 duration-500 rounded-md text-white p-2'>
                Submit
            </button>
        </div>
    </form>
</template>
