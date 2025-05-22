<script setup>
import { ref, onMounted } from "vue";
import AOS from "aos";
import "aos/dist/aos.css";

import logoX from "../../assets/logo-x.png";
import preview1 from "../../assets/fff.png";
import preview2 from "../../assets/ddd.png";
import preview3 from "../../assets/iii.png";

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
            "No coding required, Customize any theme, in any technology",
    },
    {
        title: "Unique Themes Templates",
        description:
            "Unique themes and templates for every budget and every project.",
    },
];

onMounted(() => {
    AOS.init({ duration: 700, once: true, offset: 120 });
});
</script>

<template>
    <div class="bg-pink-50 py-16">
        <div class="max-w-6xl mx-auto px-4">
            <!-- Heading + Search -->
            <h1 class="text-center text-3xl md:text-4xl font-bold mb-4">
                Professional
                <span class="text-red-600">WordPress Themes</span>,<br
                    class="hidden sm:block"
                />
                Website Templates for any Project
            </h1>
            <div class="max-w-3xl mx-auto mt-8">
                <div class="relative">
                    <input
                        v-model="searchQuery"
                        type="text"
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

            <!-- Collage + feature‐panel -->
            <div class="relative max-w-4xl mx-auto mt-12 h-[450px]">
                <!-- 1) Red preview, dead‐center at top -->
                <div
                    class="absolute top-20 inset-x-0 mx-auto w-80 z-10 rounded-lg overflow-hidden"
                    data-aos="fade-up"
                    data-aos-delay="100"
                >
                    <img
                        :src="preview1"
                        alt="Preview 1"
                        class="w-full h-full object-cover"
                    />
                </div>

                <!-- 2) White preview, bottom‐left -->
                <div
                    class="absolute bottom-32 z-20 left-16 w-72 rounded-lg overflow-hidden"
                    data-aos="fade-up"
                    data-aos-delay="250"
                >
                    <img
                        :src="preview2"
                        alt="Preview 2"
                        class="w-full h-full object-cover"
                    />
                </div>

                <!-- 3) Purple preview, bottom‐right -->
                <div
                    class="absolute bottom-0 right-32 w-96 rounded-lg overflow-hidden"
                    data-aos="fade-up"
                    data-aos-delay="400"
                >
                    <img
                        :src="preview3"
                        alt="Preview 3"
                        class="w-full h-full object-cover"
                    />
                </div>

                <!-- 4+5) Feature panel, stacking your two cards -->
                <div
                    class="absolute top-[20%] right-0 p-6 rounded-lg w-64 space-y-6"
                    data-aos="fade-up"
                    data-aos-delay="550"
                >
                    <!-- Build Anything -->
                    <div class="flex bg-white shadow-lg items-start gap-4">
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
                                {{ featuresList[0].title }}
                            </h3>
                            <p class="text-gray-600 mt-1">
                                {{ featuresList[0].description }}
                            </p>
                        </div>
                    </div>

                    <!-- Unique Themes Templates -->
                    <div class="flex  bg-white shadow-lg items-start gap-4">
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
                                    d="M3 15a4 4 0 014-4h10a4 4 0 014 4M4 15v4h16v-4"
                                />
                            </svg>
                        </div>
                        <div>
                            <h3 class="font-semibold text-lg">
                                {{ featuresList[1].title }}
                            </h3>
                            <p class="text-gray-600 mt-1">
                                {{ featuresList[1].description }}
                            </p>
                        </div>
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
                        v-for="c in categories"
                        :key="c"
                        class="px-4 py-2 rounded-full hover:bg-gray-100 transition-colors text-sm"
                    >
                        {{ c }}
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
