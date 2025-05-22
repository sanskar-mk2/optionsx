<script setup>
import { ref } from 'vue';
import { useForm } from '@inertiajs/vue3';
import GuestLayout from "@/Layouts/GuestLayout.vue";
import { Head } from "@inertiajs/vue3";
import file from '../../assets/file.png';

const form = useForm({
    title: '',
    description: '',
    tools_used: [],
    tags: [],
    image: null,
    thumbnail: null,
    project_type: 'image',
    status: 'draft'
});

const dragOver = ref(false);
const projectTypes = ['image', 'text', 'link', 'prototype'];

const handleDrop = (e) => {
    e.preventDefault();
    dragOver.value = false;
    const files = e.dataTransfer.files;
    if (files.length > 0) {
        form.image = files[0];
    }
};

const handleFileSelect = (e) => {
    const file = e.target.files[0];
    if (file) {
        form.image = file;
    }
};

const submit = () => {
    form.post(route('projects.store'));
};
</script>

<template>
    <Head title="Upload Project" />

    <GuestLayout>
        <div class="w-full max-w-[90rem] mx-auto py-8 px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col lg:flex-row lg:space-x-8 space-y-6 lg:space-y-0">
                <!-- Left side - Upload area -->
                <div class="w-full lg:w-1/2">
                    <h2 class="text-3xl font-bold mb-8">Upload Your Work Here</h2>

                    <div class="border-2 border-dashed border-gray-300 rounded-lg p-16"
                        :class="{ 'border-red-500 bg-red-50': dragOver }" @dragover.prevent="dragOver = true"
                        @dragleave.prevent="dragOver = false" @drop="handleDrop">
                        <div class="text-center">
                            <img :src="file" class="mx-auto w-24 h-24 mb-6" alt="Upload">
                            <p class="text-xl text-gray-600">Drag and drop an image</p>
                            <p class="text-lg text-gray-500 my-6">OR</p>
                            <label class="bg-red-600 text-white px-8 py-3 text-lg rounded-md cursor-pointer hover:bg-red-700">
                                Select Image
                                <input type="file" class="hidden" @change="handleFileSelect" accept="image/*">
                            </label>
                        </div>
                    </div>

                    <!-- Project type selection -->
                    <div class="flex flex-wrap gap-4 mt-8">
                        <button v-for="type in projectTypes" :key="type" 
                            class="px-6 py-3 rounded-lg text-lg flex-grow"
                            :class="form.project_type === type ? 'bg-red-600 text-white' : 'bg-gray-100'"
                            @click="form.project_type = type">
                            {{ type }}
                        </button>
                    </div>
                </div>

                <!-- Right side - Project details -->
                <div class="w-full lg:w-1/2">
                    <div class="bg-white rounded-lg p-8 shadow-lg">
                        <div class="mb-8">
                            <label class="block text-lg font-medium text-gray-700 mb-3">Project Title</label>
                            <input v-model="form.title" type="text" 
                                class="w-full rounded-lg border-gray-300 text-lg py-3"
                                placeholder="Give a title for your project">
                        </div>

                        <div class="mb-8">
                            <label class="block text-lg font-medium text-gray-700 mb-3">
                                Project Tags <span class="text-gray-400">(max limit 10)</span>
                            </label>
                            <input v-model="form.tags" type="text" 
                                class="w-full rounded-lg border-gray-300 text-lg py-3"
                                placeholder="Add upto 10 keywords to help people discover your project">
                        </div>

                        <div class="mb-8">
                            <label class="block text-lg font-medium text-gray-700 mb-3">Tools Used</label>
                            <input v-model="form.tools_used" type="text" 
                                class="w-full rounded-lg border-gray-300 text-lg py-3"
                                placeholder="Add tools used in this project">
                        </div>

                        <div class="mb-8">
                            <label class="block text-lg font-medium text-gray-700 mb-3">Project Description</label>
                            <textarea v-model="form.description" rows="6" 
                                class="w-full rounded-lg border-gray-300 text-lg"
                                placeholder="Add a short description about your project..."></textarea>
                        </div>

                        <div class="flex justify-between items-center">
                            <button @click="$router.go(-1)" 
                                class="px-6 py-3 text-lg text-gray-600 hover:text-gray-800">
                                Cancel
                            </button>
                            <div class="space-x-4">
                                <button @click="form.status = 'draft'; submit()"
                                    class="px-6 py-3 text-lg bg-gray-200 rounded-lg hover:bg-gray-300">
                                    Save as draft
                                </button>
                                <button @click="form.status = 'published'; submit()"
                                    class="px-6 py-3 text-lg bg-red-600 text-white rounded-lg hover:bg-red-700">
                                    Publish
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </GuestLayout>
</template>