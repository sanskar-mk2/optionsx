<script setup>
import { ref } from 'vue';
import websiteTemplate from '../../assets/website-template.png';
import socialMedia from '../../assets/social-media.png';
import businessGoals from '../../assets/business-goals.png';

const categories = ref([
  'All Category',
  'WordPress',
  'eCommerce',
  'Marketing',
  'UI Kitts',
  'Site Templates',
  'CMS Theme',
  'Blogging',
  'Fourms'
]);

const products = ref([
  {
    id: 1,
    title: 'Get a good looking Website | For your business.',
    image: websiteTemplate,
    price: 69,
    rating: 5,
    reviews: '26.2k',
    sales: '983.4K',
    author: 'ThemeFusion',
    category: 'Business'
  },
  {
    id: 2,
    title: 'A better social media presence | Let\'s help you with that.',
    image: socialMedia,
    price: 69,
    rating: 5,
    reviews: '26.2k',
    sales: '983.4K',
    author: 'ThemeFusion',
    category: 'Business'
  },
  {
    id: 3,
    title: 'Business Goals | Benefits your business.',
    image: businessGoals,
    price: 69,
    rating: 5,
    reviews: '26.2k',
    sales: '983.4K',
    author: 'ThemeFusion',
    category: 'Business'
  }
]);
</script>

<template>
    <div class="container mx-auto px-4 py-8">
        <div class="flex justify-between items-center mb-8">
            <div>
                <h1 class="text-3xl font-bold">
                    Most Purchased <span class="text-red-600">Category</span>
                </h1>
                <p class="text-gray-600 mt-2">
                    Where you can explore the themes that have captured the
                    hearts of countless customers! This curated selection
                    showcases the top-selling designs
                </p>
            </div>
            <button class="bg-red-600 text-white px-6 py-2 rounded-md">
                View All Categories
            </button>
        </div>

        <!-- Category filters -->
        <div class="flex flex-wrap gap-4 mb-8">
            <button
                v-for="category in categories"
                :key="category"
                class="px-6 py-2 border border-gray-300 rounded-md hover:border-red-600 hover:text-red-600 transition-colors"
            >
                {{ category }}
            </button>
        </div>

        <!-- Product grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <div
                v-for="product in products"
                :key="product.id"
                class="border border-gray-200 rounded-lg overflow-hidden hover:shadow-lg transition-shadow"
            >
                <img
                    :src="product.image"
                    :alt="product.title"
                    class="w-full h-48 object-cover"
                />
                <div class="p-4">
                    <h3 class="text-xl font-semibold mb-2">
                        {{ product.title }}
                    </h3>
                    <p class="text-sm text-gray-600 mb-2">
                        by {{ product.author }} in {{ product.category }}
                    </p>

                    <div class="flex justify-between items-center mb-4">
                        <div class="flex items-center gap-2">
                            <span class="text-2xl font-bold"
                                >${{ product.price }}</span
                            >
                            <div class="flex items-center">
                                <div class="flex text-yellow-400">
                                    <span v-for="n in 5" :key="n">★</span>
                                </div>
                                <span class="text-gray-500 text-sm ml-1"
                                    >({{ product.reviews }})</span
                                >
                            </div>
                        </div>
                        <button class="p-2 border border-gray-300 rounded-md">
                            <span class="sr-only">Add to cart</span>
                            🛒
                        </button>
                    </div>

                    <div class="flex justify-between items-center">
                        <span class="text-sm text-gray-600"
                            >{{ product.sales }} Sales</span
                        >
                        <button
                            class="bg-red-600 text-white px-4 py-1 rounded-md"
                        >
                            Buy Now
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
