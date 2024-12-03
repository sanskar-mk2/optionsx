<script setup>
import { ref } from "vue";
import bloggerTheme from "../../assets/blogger-theme.png";
import fitnessTheme from "../../assets/fitness-theme.png";

const themes = ref([
    {
        id: 1,
        title: "Just Blogger | Multi purpose blogging themes",
        image: bloggerTheme,
        features: [],
        price: 69,
        rating: 5,
        reviews: "26.2k",
        sales: "983.4K",
        author: "ThemeFusion",
        category: "Business",
    },
    {
        id: 2,
        title: "Fitness | Keep moving forward every moment",
        image: fitnessTheme,
        features: [
            "Fully Responsive",
            "Many Themes With More Styles",
            "Short Codes",
            "Infinite Scrolling",
        ],
        price: 69,
        rating: 5,
        reviews: "26.2k",
        sales: "983.4K",
        author: "ThemeFusion",
        category: "Business",
    },
    {
        id: 3,
        title: "Just Blogger | Multi purpose blogging themes",
        image: bloggerTheme,
        features: [],
        price: 69,
        rating: 5,
        reviews: "26.2k",
        sales: "983.4K",
        author: "ThemeFusion",
        category: "Business",
    },
    {
        id: 4,
        title: "Fitness | Keep moving forward every moment",
        image: fitnessTheme,
        features: [
            "Fully Responsive",
            "Many Themes With More Styles",
            "Short Codes",
            "Infinite Scrolling",
        ],
        price: 69,
        rating: 5,
        reviews: "26.2k",
        sales: "983.4K",
        author: "ThemeFusion",
        category: "Business",
    },
    {
        id: 5,
        title: "Just Blogger | Multi purpose blogging themes",
        image: bloggerTheme,
        features: [],
        price: 69,
        rating: 5,
        reviews: "26.2k",
        sales: "983.4K",
        author: "ThemeFusion",
        category: "Business",
    },
    {
        id: 6,
        title: "Fitness | Keep moving forward every moment",
        image: fitnessTheme,
        features: [
            "Fully Responsive",
            "Many Themes With More Styles",
            "Short Codes",
            "Infinite Scrolling",
        ],
        price: 69,
        rating: 5,
        reviews: "26.2k",
        sales: "983.4K",
        author: "ThemeFusion",
        category: "Business",
    },
    {
        id: 7,
        title: "Just Blogger | Multi purpose blogging themes",
        image: bloggerTheme,
        features: [],
        price: 69,
        rating: 5,
        reviews: "26.2k",
        sales: "983.4K",
        author: "ThemeFusion",
        category: "Business",
    },
    {
        id: 8,
        title: "Fitness | Keep moving forward every moment",
        image: fitnessTheme,
        features: [
            "Fully Responsive",
            "Many Themes With More Styles",
            "Short Codes",
            "Infinite Scrolling",
        ],
        price: 69,
        rating: 5,
        reviews: "26.2k",
        sales: "983.4K",
        author: "ThemeFusion",
        category: "Business",
    },
]);
</script>

<template>
    <div class="container mx-auto px-4 py-8">
        <!-- Navigation -->
        <nav class="flex items-center gap-2 text-sm mb-8">
            <a href="#" class="text-gray-600 hover:text-gray-900">Home</a>
            <span class="text-red-600">•</span>
            <a href="#" class="text-red-600">WordPress</a>
        </nav>

        <!-- Title -->
        <h1 class="text-4xl font-bold mb-12">
            Best Selling <span class="text-red-600">Themes Of This Week</span>
        </h1>

        <!-- Theme Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <div
                v-for="theme in themes"
                :key="theme.id"
                class="bg-white rounded-lg shadow-lg p-6 flex flex-col"
            >
                <!-- Theme Preview -->
                <div class="aspect-video rounded-lg mb-6 overflow-hidden">
                    <img
                        :src="theme.image"
                        :alt="theme.title"
                        class="w-full h-full object-cover"
                    />
                </div>

                <!-- Theme Info -->
                <div class="flex-1 flex flex-col">
                    <h2 class="text-xl font-bold">{{ theme.title }}</h2>

                    <!-- Author Info -->
                    <div class="text-sm text-gray-600 mt-4">
                        by {{ theme.author }} in {{ theme.category }}
                    </div>

                    <!-- Features List (only for Fitness theme) -->
                    <ul v-if="theme.features.length" class="mt-4 space-y-2">
                        <li
                            v-for="feature in theme.features"
                            :key="feature"
                            class="flex items-center gap-2"
                        >
                            <svg
                                class="w-4 h-4 text-green-500"
                                viewBox="0 0 20 20"
                                fill="currentColor"
                            >
                                <path
                                    fill-rule="evenodd"
                                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                    clip-rule="evenodd"
                                />
                            </svg>
                            {{ feature }}
                        </li>
                        <li class="text-gray-500">&amp; Much More...</li>
                    </ul>

                    <!-- Spacer to push the bottom content -->
                    <div class="flex-1"></div>

                    <!-- Bottom Section -->
                    <div class="mt-4">
                        <!-- Price and Rating -->
                        <div class="flex items-center justify-between">
                            <div class="flex items-center gap-4">
                                <span class="text-2xl font-bold"
                                    >${{ theme.price }}</span
                                >
                                <div class="flex items-center gap-2">
                                    <div class="flex">
                                        <svg
                                            v-for="n in theme.rating"
                                            :key="n"
                                            class="w-4 h-4 text-yellow-400"
                                            viewBox="0 0 20 20"
                                            fill="currentColor"
                                        >
                                            <path
                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                                            />
                                        </svg>
                                    </div>
                                    <span class="text-sm text-gray-600"
                                        >({{ theme.reviews }})</span
                                    >
                                </div>
                            </div>
                            <div class="text-sm text-gray-600">
                                {{ theme.sales }} Sales
                            </div>
                        </div>

                        <!-- Actions -->
                        <div class="flex items-center justify-between mt-4">
                            <button
                                class="p-2 rounded-lg border border-gray-200 hover:bg-gray-50"
                            >
                                <svg
                                    class="w-5 h-5"
                                    viewBox="0 0 20 20"
                                    fill="currentColor"
                                >
                                    <path
                                        d="M3 1a1 1 0 000 2h1.22l.305 1.222a.997.997 0 00.01.042l1.358 5.43-.893.892C3.74 11.846 4.632 14 6.414 14H15a1 1 0 000-2H6.414l1-1H14a1 1 0 00.894-.553l3-6A1 1 0 0017 3H6.28l-.31-1.243A1 1 0 005 1H3zM16 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM6.5 18a1.5 1.5 0 100-3 1.5 1.5 0 000 3z"
                                    />
                                </svg>
                            </button>
                            <button
                                class="px-6 py-2 bg-red-600 text-white rounded-lg hover:bg-red-700"
                            >
                                Buy Now
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
