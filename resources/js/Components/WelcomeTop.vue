<script setup>
import { ref } from "vue";
import logoX from "../../assets/logo-x.png";
import preview1 from "../../assets/preview1.png";
import preview2 from "../../assets/preview2.png";
import preview3 from "../../assets/preview3.png";

const searchQuery = ref("");
const categories = [
    "Newest",
    "Week Best Theme",
    "E-Commerce",
    "Marketing",
    "WordPress",
];

const featuresList = [
    {
        title: "Build Anything",
        description:
            "Not coding required, Customize any theme, in any technology",
    },
    {
        title: "Unique Themes Templates",
        description:
            "Unique themes and templates for every budget and every project.",
    },
];
</script>

<template>
    <div class="bg-pink-50 py-16">
        <div class="max-w-6xl mx-auto px-4">
            <!-- Main Heading -->
            <h1 class="text-center text-3xl md:text-4xl font-bold mb-4">
                Professional <span class="text-red-600">WordPress Themes</span>,
                <br class="hidden sm:block" />
                Website Templates for any Project
            </h1>

            <!-- Search Section -->
            <div class="max-w-3xl mx-auto mt-8">
                <div class="relative">
                    <input
                        type="text"
                        v-model="searchQuery"
                        placeholder="e.g responsive CMS Theme"
                        class="w-full px-4 py-3 rounded-lg border border-gray-200 focus:outline-none focus:border-red-500"
                    />
                    <button
                        class="absolute right-2 top-1/2 transform -translate-y-1/2 bg-red-600 text-white px-6 py-2 rounded-lg hover:bg-red-700 transition-colors"
                    >
                        Search
                    </button>
                </div>

                <p class="text-gray-600 text-center mt-4">
                    Discover thousands of easy to customize themes, templates &
                    CMS products, made by world-class developers.
                </p>
            </div>

            <!-- Preview Images Row -->
            <div
                class="grid grid-cols-1 md:grid-cols-3 gap-6 max-w-4xl mx-auto mt-12"
            >
                <div
                    v-for="(preview, index) in [preview1, preview2, preview3]"
                    :key="index"
                    class="aspect-square rounded-lg overflow-hidden shadow-lg"
                >
                    <img
                        :src="preview"
                        :alt="`Preview ${index + 1}`"
                        class="w-full h-full object-cover"
                    />
                </div>
            </div>

            <!-- Feature Cards -->
            <div class="grid md:grid-cols-2 gap-4 max-w-3xl mx-auto mt-12">
                <div
                    v-for="feature in featuresList"
                    :key="feature.title"
                    class="bg-white p-6 rounded-lg shadow-sm flex items-start gap-4"
                >
                    <div class="bg-blue-50 p-2 rounded-lg">
                        <svg
                            class="w-6 h-6 text-blue-500"
                            fill="none"
                            stroke="currentColor"
                            viewBox="0 0 24 24"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M12 6v6m0 0v6m0-6h6m-6 0H6"
                            />
                        </svg>
                    </div>
                    <div>
                        <h3 class="font-semibold text-lg">
                            {{ feature.title }}
                        </h3>
                        <p class="text-gray-600 mt-1">
                            {{ feature.description }}
                        </p>
                    </div>
                </div>
            </div>

            <!-- Category Navigation -->
            <div
                class="mt-12 flex flex-wrap justify-center items-center gap-3 bg-white p-3 rounded-full border-2 border-red-600 max-w-fit mx-auto"
            >
                <img :src="logoX" alt="Logo" class="h-8" />
                <div class="flex flex-wrap gap-2 items-center">
                    <button
                        v-for="category in categories"
                        :key="category"
                        class="px-4 py-2 rounded-full hover:bg-gray-100 transition-colors text-sm"
                    >
                        {{ category }}
                    </button>
                    <button
                        class="bg-red-600 text-white px-6 py-2 rounded-full hover:bg-red-700 transition-colors"
                    >
                        Search
                    </button>
                </div>
            </div>
        </div>
    </div>
</template>
