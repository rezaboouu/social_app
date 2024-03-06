<script setup>
import {ref} from "vue";
import InputTextarea from "@/Components/InputTextarea.vue";
import {useForm} from "@inertiajs/vue3";


const postCreating = ref(false)

const newPostForm  =useForm({

    body:''
})

const  newPost =ref({
    body:''
})

</script>

<template>
    <div class="p-4 bg-white rounded-lg border mb-3">
        <InputTextarea @click="postCreating = true" class="mb-3 w-full"
        placeholder="برای سختن پست جدید اینجا کلیک کنید" rows="1" v-model="newPostForm.body"></InputTextarea>
        <div v-if="postCreating" class="flex gap-2 justify-between">
            <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 relative">
                فایل  خود را اضافه کنید
                <input type="file" class="absolute left-0 top-0 right-0 bottom-0 opacity-0">
            </button>
            <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                ارسال
            </button>
        </div>

    </div>
</template>

<style scoped>
</style>
