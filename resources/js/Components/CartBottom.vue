<script setup>
import interested1 from "../../assets/interested1.jpeg";
import interested2 from "../../assets/interested2.png";
import interested3 from "../../assets/interested3.jpeg";
import interested4 from "../../assets/interested4.png";

const products = [
    {
        id: 1,
        title: "Capturing Stunning Photos with Any Camera",
        image: interested1,
        price: 25.99,
        rating: 4.5,
        ratingCount: "(250 ratings)",
        instructor: "Michael Brown",
        tag: "Best Seller",
    },
    {
        id: 2,
        title: "Mastering Digital Marketing for Business Growth",
        image: interested2,
        price: 50.99,
        rating: 4.7,
        ratingCount: "(298 ratings)",
        instructor: "Sarah Miller",
        tag: "Best Seller",
    },
    {
        id: 3,
        title: "Coding for Beginners: From Zero to Hero in 12 Weeks",
        image: interested3,
        price: 45.99,
        rating: 4.5,
        ratingCount: "(157 ratings)",
        instructor: "John Smith",
        tag: "Best Seller",
    },
    {
        id: 4,
        title: "Creative Writing Workshop: Crafting Compelling Stories",
        image: interested4,
        price: 35.99,
        rating: 4.4,
        ratingCount: "(180 ratings)",
        instructor: "Emily Zhang",
        tag: "Best Seller",
    },
];

const renderStars = (rating) => {
    const fullStars = Math.floor(rating);
    const hasHalfStar = rating % 1 >= 0.5;
    return Array(5)
        .fill(0)
        .map((_, index) => {
            if (index < fullStars) return "full";
            if (index === fullStars && hasHalfStar) return "half";
            return "empty";
        });
};
</script>

<template>
    <div class="max-w-7xl mx-auto p-6">
        <h2 class="text-lg mb-4">You might also like</h2>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
            <div
                v-for="product in products"
                :key="product.id"
                class="bg-white rounded-lg shadow-sm overflow-hidden"
            >
                <!-- Product Image -->
                <div class="relative h-48">
                    <img
                        :src="product.image"
                        :alt="product.title"
                        class="w-full h-full object-cover"
                    />
                    <!-- Best Seller Tag -->
                    <div
                        class="absolute top-2 left-2 bg-red-100 text-red-600 text-xs px-2 py-1 rounded"
                    >
                        {{ product.tag }}
                    </div>
                </div>

                <!-- Product Details -->
                <div class="p-4">
                    <h3 class="font-medium text-sm mb-1 line-clamp-2">
                        {{ product.title }}
                    </h3>
                    <p class="text-gray-500 text-xs mb-2">
                        {{ product.instructor }}
                    </p>

                    <!-- Rating -->
                    <div class="flex items-center mb-2">
                        <div class="flex items-center">
                            <template
                                v-for="(star, index) in renderStars(
                                    product.rating
                                )"
                                :key="index"
                            >
                                <svg
                                    v-if="star === 'full'"
                                    class="w-4 h-4 text-yellow-400"
                                    fill="currentColor"
                                    viewBox="0 0 20 20"
                                >
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                                    />
                                </svg>
                                <svg
                                    v-else-if="star === 'half'"
                                    class="w-4 h-4 text-yellow-400"
                                    fill="currentColor"
                                    viewBox="0 0 20 20"
                                >
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                                        opacity="0.5"
                                    />
                                    <path
                                        d="M10 2.927l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0L10 15.247V2.927z"
                                    />
                                </svg>
                                <svg
                                    v-else
                                    class="w-4 h-4 text-gray-300"
                                    fill="currentColor"
                                    viewBox="0 0 20 20"
                                >
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                                    />
                                </svg>
                            </template>
                        </div>
                        <span class="text-sm ml-1">{{ product.rating }}</span>
                        <span class="text-xs text-gray-500 ml-1">{{
                            product.ratingCount
                        }}</span>
                    </div>

                    <!-- Price -->
                    <div class="text-lg font-bold">${{ product.price }}</div>
                </div>
            </div>
        </div>
    </div>
</template>
