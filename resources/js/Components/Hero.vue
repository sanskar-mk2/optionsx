<script setup>
import logoX from "../../assets/logo-x.png";
const navItems = [
    { text: "Selling", href: "#" },
    { text: "Earn more", href: "#" },
    { text: "Quality Content", href: "#" },
    { text: "Tools & Support", href: "#" },
    { text: "Community", href: "#" },
];
</script>

<template>
    <div class="relative min-h-screen w-full flex flex-col bg-gray-50">
        <!-- Main Content -->
        <div class="flex-1 flex items-center justify-center">
            <div class="text-center px-4">
                <h1 class="text-4xl md:text-5xl font-bold mb-4">
                    Do what you love while reaching over
                    <br />
                    <span class="text-red-600">1 million</span> clients.
                </h1>

                <p class="text-gray-600 text-lg mb-8">
                    Sell your work with the most amazing online creative
                    community as an Options X Creator.
                </p>

                <div
                    class="flex flex-col sm:flex-row gap-4 justify-center items-center"
                >
                    <button
                        class="bg-red-600 text-white px-6 py-3 rounded-lg font-medium hover:bg-red-700 transition-colors"
                    >
                        Be a creator for OptionsX
                    </button>
                    <div class="flex items-center gap-2">
                        <span class="text-gray-600">Already an Author?</span>
                        <a
                            href="#"
                            class="text-red-600 hover:text-red-700 font-medium"
                            >Sign In</a
                        >
                    </div>
                </div>
            </div>
        </div>

        <!-- Navigation Bar -->
        <div class="w-full px-4 py-6">
            <div class="max-w-7xl mx-auto border-2 bg-white rounded-full border-red-500">
                <nav
                    class="flex flex-wrap items-center justify-between gap-4 px-6 py-4"
                >
                    <!-- Logo -->
                    <div class="flex items-center">
                        <img :src="logoX" alt="Logo" class="h-8" />
                    </div>

                    <!-- Navigation Items -->
                    <div class="flex flex-wrap items-center gap-6">
                        <a
                            v-for="item in navItems"
                            :key="item.text"
                            :href="item.href"
                            class="text-gray-700 hover:text-gray-900 font-medium"
                        >
                            {{ item.text }}
                        </a>
                    </div>

                    <!-- Registration Button -->
                    <button
                        class="bg-red-600 text-white px-6 py-2 rounded-lg font-medium hover:bg-red-700 transition-colors whitespace-nowrap"
                    >
                        Creator Registration
                    </button>
                </nav>
            </div>
        </div>
    </div>
</template>
