<script setup>
import TextInput from "@/Components/InputTextarea.vue";
import FollowingItem from "@/Components/app/FollowingItem.vue";
import {ref} from "vue";
const searchKeyword = ref('')
</script>

<template>
    <TextInput :model-value="searchKeyword" placeholder="Type to search" class="w-full mt-3"/>
    <div class="mt-3 h-[200px] lg:flex-1 overflow-auto">
        <div v-if="false" class="text-gray-400 text-center p-3">
           شما فالور ندارید
        </div>
        <div v-else>
            <FollowingItem image="https://picsum.photos/100"
                           title=" رضا قربان زاده"
                           description="Lorem ipsum dolor sit amet, consectetur adipisicing elit."/>
            <FollowingItem image="https://picsum.photos/100"
                           title=" عباس عزیزی"
                           description="Lorem ipsum dolor sit amet, consectetur adipisicing elit."/>            <FollowingItem image="https://picsum.photos/100"
                           title=" رضا قربان زاده"
                           description="Lorem ipsum dolor sit amet, consectetur adipisicing elit."/>
            <FollowingItem image="https://picsum.photos/100"
                           title=" عباس عزیزی"
                           description="Lorem ipsum dolor sit amet, consectetur adipisicing elit."/>            <FollowingItem image="https://picsum.photos/100"
                           title=" رضا قربان زاده"
                           description="Lorem ipsum dolor sit amet, consectetur adipisicing elit."/>
            <FollowingItem image="https://picsum.photos/100"
                           title=" عباس عزیزی"
                           description="Lorem ipsum dolor sit amet, consectetur adipisicing elit."/>            <FollowingItem image="https://picsum.photos/100"
                           title=" رضا قربان زاده"
                           description="Lorem ipsum dolor sit amet, consectetur adipisicing elit."/>
            <FollowingItem image="https://picsum.photos/100"
                           title=" عباس عزیزی"
                           description="Lorem ipsum dolor sit amet, consectetur adipisicing elit."/>            <FollowingItem image="https://picsum.photos/100"
                           title=" رضا قربان زاده"
                           description="Lorem ipsum dolor sit amet, consectetur adipisicing elit."/>
            <FollowingItem image="https://picsum.photos/100"
                           title=" عباس عزیزی"
                           description="Lorem ipsum dolor sit amet, consectetur adipisicing elit."/>

        </div>
    </div>
</template>

<style scoped>
</style>
