<script setup lang='ts'>
import CardVue from '@/Shared/Card.vue';
import InputVue from '@/Shared/Input.vue';
</script>
<template>
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
                placeholder='Enter your message' required></textarea>
        </div>
        <div class='ml-auto'>
            <button type='submit' class='bg-red-700 hover:bg-red-500 duration-500 rounded-md text-white p-2'>
                Submit
            </button>
        </div>
    </form>
</template>
