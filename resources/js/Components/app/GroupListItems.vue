<script setup>
import TextInput from "@/Components/TextInput.vue";
import GroupItem from "@/Components/app/GroupItem.vue";
import {ref} from "vue";
const searchKeyword = ref('')
</script>

<template>
    <TextInput :model-value="searchKeyword" placeholder="Type to search" class="w-full mt-4"/>
    <div class="mt-3 h-[200px] lg:flex-1 overflow-auto">
        <div v-if="false" class="text-gray-400 text-center p-3">
            شما در گروهی عضو نیستید
        </div>
        <div v-else>
            <GroupItem image="https://picsum.photos/100"
                       title="برنامه نویسان لاراول"
                       description="لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ ."/>
            <GroupItem image="https://picsum.photos/100"
                       title="برنامه نویسان جی اس "
                       description="لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ ."/>
            <GroupItem image="https://picsum.photos/100"
                       title="برنامه نویسان  فلاتر "
                       description="لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ ."/>
            <GroupItem image="https://picsum.photos/100"
                       title="برنامه نویسان    جاوا "
                       description="لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ ."/>

        </div>
    </div>
</template>

<style scoped>
</style>
