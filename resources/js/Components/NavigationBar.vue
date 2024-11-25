<script setup>
import { ref } from "vue";
import { Link } from "@inertiajs/vue3";

const categories = [
    { name: "All Item", route: "items.index" },
    { name: "WordPress", route: "wordpress.index" },
    { name: "E-commerce", route: "ecommerce.index" },
    { name: "Shopify", route: "shopify.index" },
    { name: "Elementor", route: "elementor.index" },
    { name: "HTML", route: "html.index" },
    { name: "Marketing", route: "marketing.index" },
    { name: "CMS", route: "cms.index" },
    { name: "UI Templates", route: "templates.index" },
    { name: "Download Theme", route: "themes.download" },
];

const cartCount = ref(1);
</script>

<template>
    <nav class="w-full">
        <!-- Top Navigation -->
        <div class="flex items-center justify-between px-6 py-4 bg-white">
            <!-- Logo -->
            <Link href="/" class="flex items-center">
                <img src="../../assets/logo-white.png" alt="OptionsX Logo" class="h-8" />
            </Link>

            <!-- Main Navigation -->
            <div class="flex items-center space-x-6">
                <Link href="/themes" class="text-black hover:text-red-600">
                    Web Themes & Templates
                </Link>
                <Link href="/freelancers" class="text-black hover:text-red-600">
                    Hire Freelancer
                </Link>
                <Link href="/pricing" class="text-black hover:text-red-600">
                    Pricing
                </Link>
                <Link href="/bundles" class="text-black hover:text-red-600">
                    Bundling
                </Link>
            </div>

            <!-- Right Navigation -->
            <div class="flex items-center space-x-4">
                <Link
                    href="/sell"
                    class="px-6 py-2 text-red-600 border border-red-600 rounded-lg hover:bg-red-600 hover:text-white"
                >
                    Sell
                </Link>
                <Link href="/cart" class="relative">
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="w-6 h-6 text-gray-700"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"
                        />
                    </svg>
                    <span
                        v-if="cartCount > 0"
                        class="absolute -top-2 -right-2 flex items-center justify-center w-5 h-5 text-xs text-white bg-red-600 rounded-full"
                    >
                        {{ cartCount }}
                    </span>
                </Link>
                <Link
                    href="/login"
                    class="px-6 py-2 text-red-600 border border-red-600 rounded-lg hover:bg-red-600 hover:text-white"
                >
                    Sign In
                </Link>
            </div>
        </div>

        <!-- Categories Navigation -->
        <div class="w-full bg-black">
            <div class="flex items-center px-6 py-2 space-x-6 overflow-x-auto">
                <Link
                    v-for="category in categories"
                    :key="category.name"
                    :href="route(category.route)"
                    class="text-sm text-white whitespace-nowrap hover:text-red-400"
                >
                    {{ category.name }}
                </Link>
            </div>
        </div>
    </nav>
</template>
