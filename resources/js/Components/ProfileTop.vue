<script setup>
import { ref } from "vue";
import avatarPlaceholder from "../../assets/avatar-placeholder.png";

const navItems = [
    { name: "Dashboard", active: true },
    { name: "Profile", active: false },
    { name: "Settings", active: false },
    { name: "Hidden Items", active: false },
    { name: "Downloads", active: false },
    { name: "Reviews", active: false },
    { name: "Refunds", active: false },
    { name: "Earnings", active: false },
    { name: "Statements", active: false },
];

const resources = [
    { name: "Asset Guidelines", link: "#" },
    { name: "Creator Guide", link: "#" },
    { name: "Creator Tutorial", link: "#" },
    { name: "Watermarks", link: "#" },
    { name: "Knowledgebase", link: "#" },
    { name: "Model Release", link: "#" },
    { name: "Selling Tips", link: "#" },
];

const selectedCategory = ref("");
</script>

<template>
    <div>
        <!-- Profile Header -->
        <div class="bg-white border-b">
            <div class="max-w-7xl mx-auto px-4 py-4">
                <div class="flex justify-between items-center">
                    <!-- Profile Info -->
                    <div class="flex items-center gap-4">
                        <img
                            :src="avatarPlaceholder"
                            alt="Profile"
                            class="w-8 bg-gray-200 rounded-sm"
                        />
                        <div>
                            <h1 class="text-xl font-bold">Naveen</h1>
                            <p class="text-sm text-gray-600">
                                Creator since November 2024
                            </p>
                        </div>
                    </div>

                    <!-- Stats -->
                    <div class="flex gap-8">
                        <div class="text-center">
                            <p class="text-sm text-gray-600">Followers</p>
                            <p class="text-xl font-bold">0</p>
                        </div>
                        <div class="text-center">
                            <p class="text-sm text-gray-600">Following</p>
                            <p class="text-xl font-bold">0</p>
                        </div>
                        <div class="text-center">
                            <p class="text-sm text-gray-600">Sales</p>
                            <p class="text-xl font-bold">0</p>
                        </div>
                    </div>
                </div>

                <!-- Navigation -->
                <nav class="mt-6">
                    <ul class="flex gap-6">
                        <li v-for="item in navItems" :key="item.name">
                            <a
                                href="#"
                                :class="[
                                    'px-1 py-2 border-b-2 -mb-[2px]',
                                    item.active
                                        ? 'text-red-600 border-red-600'
                                        : 'text-gray-600 border-transparent hover:text-gray-900',
                                ]"
                            >
                                {{ item.name }}
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>

        <!-- Main Content -->
        <div class="max-w-7xl mx-auto px-4 py-8">
            <div class="flex gap-8">
                <!-- Main Content Area -->
                <div class="col-span-2">
                    <h2 class="text-2xl font-bold mb-4">
                        Welcome and congrats on joining OptionsX Platform as a
                        creator.
                    </h2>
                    <p class="text-gray-600 mb-8">
                        Millions of users can now purchase your digital goods,
                        allowing you to profit.
                    </p>

                    <!-- Action Cards -->
                    <div class="flex gap-8 mb-8">
                        <!-- Upload Card -->
                        <div class="bg-white p-6 rounded-lg border text-center">
                            <h3 class="text-xl font-bold mb-4">
                                Upload your first item
                            </h3>
                            <p class="text-gray-600 mb-6">
                                Start uploading your digital items and working
                                with our review team to make sure they are in
                                great shape to start selling.
                            </p>
                            <button
                                class="w-full bg-red-600 text-white px-6 py-3 rounded-lg hover:bg-red-700 transition-colors"
                            >
                                Upload now
                            </button>
                        </div>

                        <!-- Profile Card -->
                        <div class="bg-white p-6 rounded-lg border text-center">
                            <h3 class="text-xl font-bold mb-4">Your Profile</h3>
                            <p class="text-gray-600 mb-6">
                                You can begin establishing a reputation and
                                relationships on Options X platform by letting
                                our consumers know who made the products they
                                are purchasing.
                            </p>
                            <button
                                class="w-full bg-red-600 text-white px-6 py-3 rounded-lg hover:bg-red-700 transition-colors"
                            >
                                My Profile
                            </button>
                        </div>
                    </div>

                    <!-- Tax Requirements -->
                    <div class="bg-white p-6 rounded-lg border">
                        <h3 class="text-xl font-bold mb-4">Tax Requirements</h3>
                        <p class="text-gray-600">
                            There are several tax regulations that you must
                            follow depending on where you live. To make sure
                            that the appropriate tax rates, if any, are applied
                            to your earnings, it is crucial that you
                            <a
                                href="#"
                                class="text-blue-500 hover:text-blue-600"
                                >fill out your tax information completely</a
                            >.
                        </p>
                    </div>
                </div>

                <!-- Sidebar -->
                <div class="space-y-8">
                    <!-- Upload Category -->
                    <div class="bg-white p-6 rounded-lg border">
                        <h3 class="text-xl font-bold mb-4">
                            Upload a Category
                        </h3>
                        <p class="text-gray-600 mb-4">
                            You can upload only 1 item at a time.
                        </p>
                        <div class="flex gap-2">
                            <select
                                v-model="selectedCategory"
                                class="flex-1 text-sm border rounded-lg px-3 py-2"
                            >
                                <option value="">Select a Category</option>
                            </select>
                            <button
                                class="bg-gray-200 text-gray-700 px-4 py-2 rounded-lg hover:bg-gray-300"
                            >
                                Next
                            </button>
                        </div>
                    </div>

                    <!-- Creator Resources -->
                    <div class="bg-white p-6 rounded-lg border">
                        <h3 class="text-xl font-bold mb-4">
                            Creator Resources
                        </h3>
                        <ul class="space-y-2">
                            <li
                                v-for="resource in resources"
                                :key="resource.name"
                            >
                                <a
                                    :href="resource.link"
                                    class="flex items-center gap-2 text-blue-500 hover:text-blue-600"
                                >
                                    <span class="text-xs">▶</span>
                                    {{ resource.name }}
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
