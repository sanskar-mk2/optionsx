<script setup>
import { ref } from "vue";
import creatorProfile from "../../assets/ancora-profile.png";
import allInOneTheme from "../../assets/all-in-one-theme.png";
import leoVestTheme from "../../assets/leo-vest-theme.jpeg";
import securityTheme from "../../assets/security-theme.jpeg";
import cleaningTheme from "../../assets/cleaning-theme.png";

const creator = ref({
    name: "AncoraThemes",
    image: creatorProfile,
    memberSince: "April 2015",
    rating: 4,
});

const themes = ref([
    {
        id: 1,
        title: "All In One | We have got you covered!",
        image: allInOneTheme,
        price: 69,
        rating: 5,
        reviews: "26.2k",
        sales: "983.4K",
        author: "ThemeFusion",
        category: "Business",
    },
    {
        id: 2,
        title: "Leo Vest | All Services Available",
        image: leoVestTheme,
        price: 69,
        rating: 5,
        reviews: "26.2k",
        sales: "983.4K",
        author: "ThemeFusion",
        category: "Business",
    },
    {
        id: 3,
        title: "Security | We handle your security, contact us.",
        image: securityTheme,
        price: 69,
        rating: 5,
        reviews: "26.2k",
        sales: "983.4K",
        author: "ThemeFusion",
        category: "Business",
    },
    {
        id: 4,
        title: "ARCs Way | All-round Cleaning! Get this amazing theme.",
        image: cleaningTheme,
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
                    Feature <span class="text-red-600">Creator</span>
                </h1>
                <p class="text-gray-600 mt-2">
                    Our themes and templates are produced by world-class
                    creators
                </p>
            </div>
            <button class="bg-red-600 text-white px-6 py-3 rounded-lg">
                View More Creator
            </button>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-4 gap-6">
            <!-- Creator Profile Card -->
            <div class="bg-white rounded-lg p-6 text-center">
                <div class="flex justify-center mb-4">
                    <img
                        :src="creator.image"
                        :alt="creator.name"
                        class="w-40 h-40 rounded-full object-cover"
                    />
                </div>
                <h2 class="text-xl font-bold mb-2">{{ creator.name }}</h2>
                <p class="text-gray-600 mb-4">
                    Member since {{ creator.memberSince }}
                </p>
                <div class="flex justify-center items-center gap-1 mb-4">
                    <span class="text-gray-600">Review:</span>
                    <div class="flex text-yellow-400">
                        <span v-for="n in creator.rating" :key="n">★</span>
                        <span
                            v-for="n in 5 - creator.rating"
                            :key="`empty-${n}`"
                            class="text-gray-300"
                            >★</span
                        >
                    </div>
                </div>
                <button
                    class="bg-red-600 text-white px-6 py-2 rounded-lg w-full"
                >
                    View Portfolio
                </button>
                <div class="flex justify-center gap-4 mt-6">
                    <a href="#" class="text-gray-600 hover:text-red-600">
                        <span class="sr-only">YouTube</span>
                        <i class="fab fa-youtube"></i>
                    </a>
                    <a href="#" class="text-gray-600 hover:text-red-600">
                        <span class="sr-only">LinkedIn</span>
                        <i class="fab fa-linkedin"></i>
                    </a>
                    <a href="#" class="text-gray-600 hover:text-red-600">
                        <span class="sr-only">Facebook</span>
                        <i class="fab fa-facebook"></i>
                    </a>
                </div>
            </div>

            <!-- Themes Grid -->
            <div class="lg:col-span-3 grid grid-cols-1 md:grid-cols-2 gap-6">
                <div
                    v-for="theme in themes"
                    :key="theme.id"
                    class="bg-white rounded-lg overflow-hidden"
                >
                    <img
                        :src="theme.image"
                        :alt="theme.title"
                        class="w-full h-48 object-cover"
                    />
                    <div class="p-4">
                        <h3 class="text-lg font-semibold mb-2">
                            {{ theme.title }}
                        </h3>
                        <p class="text-sm text-gray-600 mb-3">
                            by {{ theme.author }} in {{ theme.category }}
                        </p>

                        <div class="flex justify-between items-center mb-3">
                            <span class="text-xl font-bold"
                                >${{ theme.price }}</span
                            >
                            <div class="flex items-center gap-2">
                                <div class="flex text-yellow-400">
                                    <span v-for="n in 5" :key="n">★</span>
                                </div>
                                <span class="text-gray-500 text-sm"
                                    >({{ theme.reviews }})</span
                                >
                            </div>
                        </div>

                        <div class="flex justify-between items-center">
                            <span class="text-sm text-gray-600"
                                >{{ theme.sales }} Sales</span
                            >
                            <div class="flex items-center gap-2">
                                <button
                                    class="p-2 border border-gray-300 rounded-lg hover:border-red-600 transition-colors"
                                >
                                    <span class="sr-only">Add to cart</span>
                                    🛒
                                </button>
                                <button
                                    class="bg-white text-red-600 px-4 py-2 rounded-lg border border-red-600 hover:bg-red-600 hover:text-white transition-colors"
                                >
                                    Buy Now
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
