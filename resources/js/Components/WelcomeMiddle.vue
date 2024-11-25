<script setup>
import { ref } from "vue";
import bloggerTheme from "../../assets/blogger-theme.png";
import fitnessTheme from "../../assets/fitness-theme.png";

const themes = ref([
    {
        id: 1,
        title: "Just Blogger | Multi purpose blogging themes",
        image: bloggerTheme,
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
        <!-- Header Section -->
        <div class="flex justify-between items-center mb-8">
            <div>
                <h1 class="text-3xl font-bold">
                    Pick Your Best
                    <span class="text-red-600">Themes Of The Week</span>
                </h1>
                <p class="text-gray-600 mt-2">
                    Every week, our staff personally hand-pick some of the best
                    new website themes from our collection.
                </p>
            </div>
            <button class="bg-red-600 text-white px-6 py-3 rounded-lg">
                View More Bestsellers
            </button>
        </div>

        <!-- Themes Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <div
                v-for="theme in themes"
                :key="theme.id"
                class="bg-white rounded-lg overflow-hidden"
            >
                <!-- Theme Image -->
                <div class="relative aspect-video">
                    <img
                        :src="theme.image"
                        :alt="theme.title"
                        class="w-full h-full object-cover"
                    />
                </div>

                <!-- Theme Info -->
                <div class="p-6">
                    <h3 class="text-xl font-semibold mb-2">
                        {{ theme.title }}
                    </h3>
                    <p class="text-sm text-gray-600 mb-4">
                        by {{ theme.author }} in {{ theme.category }}
                    </p>

                    <div class="flex justify-between items-center mb-4">
                        <div class="flex items-center gap-4">
                            <span class="text-2xl font-bold"
                                >${{ theme.price }}</span
                            >
                            <div class="flex items-center">
                                <div class="flex text-yellow-400">
                                    <span v-for="n in 5" :key="n">★</span>
                                </div>
                                <span class="text-gray-500 text-sm ml-1"
                                    >({{ theme.reviews }})</span
                                >
                            </div>
                        </div>
                        <button
                            class="p-2 border border-gray-300 rounded-lg hover:border-red-600 transition-colors"
                        >
                            <span class="sr-only">Add to cart</span>
                            🛒
                        </button>
                    </div>

                    <div class="flex justify-between items-center">
                        <span class="text-sm text-gray-600"
                            >{{ theme.sales }} Sales</span
                        >
                        <button
                            class="bg-white text-red-600 px-6 py-2 rounded-lg border border-red-600 hover:bg-red-600 hover:text-white transition-colors"
                        >
                            Purchase Now
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
