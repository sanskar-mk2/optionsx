<script setup>
import { ref } from "vue";
import FreelancerLayout from "@/Layouts/FreelancerLayout.vue";

// Tab state
const activeTab = ref("liked"); // Default to liked projects tab

// Import images for All Projects tab
import dreamDestination from "../../assets/dream-destination.png";
import traverseDestination from "../../assets/traverse-destination.png";
import brandingName from "../../assets/branding-name.png";
import justBlogger from "../../assets/just-blogger.png";
import fitness from "../../assets/fitness.png";

// Import images for Liked Projects tab
import traveling from "../../assets/traveling.png";
import healthcare from "../../assets/healthcare.png";
import foodWebsite from "../../assets/food-website.png";
</script>

<template>
    <FreelancerLayout>
        <div class="p-8 bg-white">
            <div class="max-w-7xl mx-auto">
                <!-- Project Navigation Tabs -->
                <div class="border-b border-gray-200 mb-6">
                    <div class="flex space-x-8">
                        <button
                            @click="activeTab = 'all'"
                            :class="{
                                'text-red-600 font-medium pb-3 border-b-2 border-red-600':
                                    activeTab === 'all',
                                'text-gray-600 pb-3': activeTab !== 'all',
                            }"
                        >
                            All Project
                        </button>
                        <button
                            @click="activeTab = 'liked'"
                            :class="{
                                'text-red-600 font-medium pb-3 border-b-2 border-red-600':
                                    activeTab === 'liked',
                                'text-gray-600 pb-3': activeTab !== 'liked',
                            }"
                        >
                            Liked Project
                        </button>
                    </div>
                </div>

                <!-- All Projects Tab Content -->
                <div v-if="activeTab === 'all'">
                    <!-- Active Projects Section -->
                    <div class="mb-10">
                        <h2 class="text-lg font-medium mb-6">Active Project</h2>

                        <div class="flex flex-wrap gap-6">
                            <!-- Project Card 1 -->
                            <div
                                class="w-[320px] bg-white rounded-md overflow-hidden shadow-sm border border-gray-100"
                            >
                                <div class="h-40 overflow-hidden">
                                    <img
                                        :src="dreamDestination"
                                        alt="Dream Destination"
                                        class="w-full h-full object-cover"
                                    />
                                </div>
                                <div class="p-4">
                                    <h3 class="font-medium text-gray-900">
                                        Dream Destination | UI/UX Design |
                                        Explore the world
                                    </h3>
                                </div>
                            </div>

                            <!-- Project Card 2 -->
                            <div
                                class="w-[320px] bg-white rounded-md overflow-hidden shadow-sm border border-gray-100"
                            >
                                <div class="h-40 overflow-hidden">
                                    <img
                                        :src="traverseDestination"
                                        alt="Traverse Destination"
                                        class="w-full h-full object-cover"
                                    />
                                </div>
                                <div class="p-4">
                                    <h3 class="font-medium text-gray-900">
                                        Traverse Destination | UI/UX Design |
                                        Let's explore the world
                                    </h3>
                                </div>
                            </div>

                            <!-- Project Card 3 -->
                            <div
                                class="w-[320px] bg-white rounded-md overflow-hidden shadow-sm border border-gray-100"
                            >
                                <div class="h-40 overflow-hidden">
                                    <img
                                        :src="brandingName"
                                        alt="Branding Name"
                                        class="w-full h-full object-cover"
                                    />
                                </div>
                                <div class="p-4">
                                    <h3 class="font-medium text-gray-900">
                                        Branding Name | Logo Design |
                                        Illustrations and designing
                                    </h3>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Complete Projects Section -->
                    <div class="mb-6">
                        <h2 class="text-lg font-medium mb-2">
                            Complete Project
                        </h2>
                        <div class="border-b border-gray-200 mb-6"></div>
                    </div>

                    <!-- UI/UX Project Section -->
                    <div class="mb-10">
                        <h2 class="text-lg font-medium mb-6">UI/UX Project</h2>

                        <div class="flex flex-wrap gap-6">
                            <!-- UI/UX Project Card 1 -->
                            <div
                                class="w-[320px] bg-white rounded-md overflow-hidden shadow-sm border border-gray-100"
                            >
                                <div class="h-40 overflow-hidden">
                                    <img
                                        :src="justBlogger"
                                        alt="Just Blogger"
                                        class="w-full h-full object-cover"
                                    />
                                </div>
                                <div class="p-4">
                                    <h3 class="font-medium text-gray-900 mb-4">
                                        Just Blogger | Multi purpose blogging
                                        themes
                                    </h3>
                                    <div
                                        class="flex justify-between items-center"
                                    >
                                        <div class="flex items-center">
                                            <span class="text-yellow-500 mr-1"
                                                >★</span
                                            >
                                            <span class="text-sm text-gray-700"
                                                >4.5</span
                                            >
                                            <span
                                                class="text-xs text-gray-500 ml-1"
                                                >(12)</span
                                            >
                                        </div>
                                        <div
                                            class="flex items-center space-x-3"
                                        >
                                            <div
                                                class="flex items-center text-sm text-gray-500"
                                            >
                                                <span class="mr-1">👁</span>
                                                <span>100</span>
                                            </div>
                                            <div
                                                class="flex items-center text-sm text-gray-500"
                                            >
                                                <span class="mr-1">💬</span>
                                                <span>3.2k</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- UI/UX Project Card 2 -->
                            <div
                                class="w-[320px] bg-white rounded-md overflow-hidden shadow-sm border border-gray-100"
                            >
                                <div class="h-40 overflow-hidden">
                                    <img
                                        :src="fitness"
                                        alt="Fitness"
                                        class="w-full h-full object-cover"
                                    />
                                </div>
                                <div class="p-4">
                                    <h3 class="font-medium text-gray-900 mb-4">
                                        Fitness | Keep moving forward every
                                        moment
                                    </h3>
                                    <div
                                        class="flex justify-between items-center"
                                    >
                                        <div class="flex items-center">
                                            <span class="text-yellow-500 mr-1"
                                                >★</span
                                            >
                                            <span class="text-sm text-gray-700"
                                                >4.3</span
                                            >
                                            <span
                                                class="text-xs text-gray-500 ml-1"
                                                >(12)</span
                                            >
                                        </div>
                                        <div
                                            class="flex items-center space-x-3"
                                        >
                                            <div
                                                class="flex items-center text-sm text-gray-500"
                                            >
                                                <span class="mr-1">👁</span>
                                                <span>100</span>
                                            </div>
                                            <div
                                                class="flex items-center text-sm text-gray-500"
                                            >
                                                <span class="mr-1">💬</span>
                                                <span>3.2k</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Web Development Section -->
                    <div class="mb-10">
                        <h2 class="text-lg font-medium mb-6">
                            Web Development
                        </h2>

                        <div class="flex flex-wrap gap-6">
                            <!-- Web Development Card 1 -->
                            <div
                                class="w-[320px] bg-white rounded-md overflow-hidden shadow-sm border border-gray-100"
                            >
                                <div class="h-40 overflow-hidden">
                                    <img
                                        :src="justBlogger"
                                        alt="Just Blogger"
                                        class="w-full h-full object-cover"
                                    />
                                </div>
                                <div class="p-4">
                                    <h3 class="font-medium text-gray-900 mb-4">
                                        Just Blogger | Multi purpose blogging
                                        themes
                                    </h3>
                                    <div
                                        class="flex justify-between items-center"
                                    >
                                        <div class="flex items-center">
                                            <span class="text-yellow-500 mr-1"
                                                >★</span
                                            >
                                            <span class="text-sm text-gray-700"
                                                >4.5</span
                                            >
                                            <span
                                                class="text-xs text-gray-500 ml-1"
                                                >(12)</span
                                            >
                                        </div>
                                        <div
                                            class="flex items-center space-x-3"
                                        >
                                            <div
                                                class="flex items-center text-sm text-gray-500"
                                            >
                                                <span class="mr-1">👁</span>
                                                <span>100</span>
                                            </div>
                                            <div
                                                class="flex items-center text-sm text-gray-500"
                                            >
                                                <span class="mr-1">💬</span>
                                                <span>3.2k</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Web Development Card 2 -->
                            <div
                                class="w-[320px] bg-white rounded-md overflow-hidden shadow-sm border border-gray-100"
                            >
                                <div class="h-40 overflow-hidden">
                                    <img
                                        :src="fitness"
                                        alt="Fitness"
                                        class="w-full h-full object-cover"
                                    />
                                </div>
                                <div class="p-4">
                                    <h3 class="font-medium text-gray-900 mb-4">
                                        Fitness | Keep moving forward every
                                        moment
                                    </h3>
                                    <div
                                        class="flex justify-between items-center"
                                    >
                                        <div class="flex items-center">
                                            <span class="text-yellow-500 mr-1"
                                                >★</span
                                            >
                                            <span class="text-sm text-gray-700"
                                                >4.3</span
                                            >
                                            <span
                                                class="text-xs text-gray-500 ml-1"
                                                >(12)</span
                                            >
                                        </div>
                                        <div
                                            class="flex items-center space-x-3"
                                        >
                                            <div
                                                class="flex items-center text-sm text-gray-500"
                                            >
                                                <span class="mr-1">👁</span>
                                                <span>100</span>
                                            </div>
                                            <div
                                                class="flex items-center text-sm text-gray-500"
                                            >
                                                <span class="mr-1">💬</span>
                                                <span>3.2k</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Liked Projects Tab Content -->
                <div v-if="activeTab === 'liked'" class="flex flex-wrap gap-6">
                    <!-- Liked Project Card 1 -->
                    <div
                        class="w-[320px] bg-white rounded-md overflow-hidden shadow-sm border border-gray-100"
                    >
                        <div class="h-40 overflow-hidden">
                            <img
                                :src="traveling"
                                alt="Traveling"
                                class="w-full h-full object-cover"
                            />
                        </div>
                        <div class="p-4">
                            <h3 class="font-medium text-gray-900 mb-1">
                                Traveling | UI/UX Design
                            </h3>
                            <p class="text-sm text-gray-500 mb-3">
                                Machua John
                            </p>
                            <div class="flex justify-between items-center">
                                <div class="flex items-center">
                                    <span class="text-yellow-500 mr-1">★</span>
                                    <span class="text-sm text-gray-700"
                                        >4.5</span
                                    >
                                    <span class="text-xs text-gray-500 ml-1"
                                        >(12)</span
                                    >
                                </div>
                                <div class="flex items-center space-x-3">
                                    <div
                                        class="flex items-center text-sm text-gray-500"
                                    >
                                        <span class="mr-1">👁</span>
                                        <span>100</span>
                                    </div>
                                    <div
                                        class="flex items-center text-sm text-gray-500"
                                    >
                                        <span class="mr-1">💬</span>
                                        <span>3.2k</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Liked Project Card 2 -->
                    <div
                        class="w-[320px] bg-white rounded-md overflow-hidden shadow-sm border border-gray-100"
                    >
                        <div class="h-40 overflow-hidden">
                            <img
                                :src="healthcare"
                                alt="Healthcare"
                                class="w-full h-full object-cover"
                            />
                        </div>
                        <div class="p-4">
                            <h3 class="font-medium text-gray-900 mb-1">
                                Healthcare | UI/UX Design | Web D...
                            </h3>
                            <p class="text-sm text-gray-500 mb-3">
                                Machua John
                            </p>
                            <div class="flex justify-between items-center">
                                <div class="flex items-center">
                                    <span class="text-yellow-500 mr-1">★</span>
                                    <span class="text-sm text-gray-700"
                                        >4.5</span
                                    >
                                    <span class="text-xs text-gray-500 ml-1"
                                        >(12)</span
                                    >
                                </div>
                                <div class="flex items-center space-x-3">
                                    <div
                                        class="flex items-center text-sm text-gray-500"
                                    >
                                        <span class="mr-1">👁</span>
                                        <span>100</span>
                                    </div>
                                    <div
                                        class="flex items-center text-sm text-gray-500"
                                    >
                                        <span class="mr-1">💬</span>
                                        <span>3.2k</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Liked Project Card 3 -->
                    <div
                        class="w-[320px] bg-white rounded-md overflow-hidden shadow-sm border border-gray-100"
                    >
                        <div class="h-40 overflow-hidden">
                            <img
                                :src="foodWebsite"
                                alt="Food Website"
                                class="w-full h-full object-cover"
                            />
                        </div>
                        <div class="p-4">
                            <h3 class="font-medium text-gray-900 mb-1">
                                Food Website | Web Development
                            </h3>
                            <p class="text-sm text-gray-500 mb-3">
                                Machua John
                            </p>
                            <div class="flex justify-between items-center">
                                <div class="flex items-center">
                                    <span class="text-yellow-500 mr-1">★</span>
                                    <span class="text-sm text-gray-700"
                                        >4.5</span
                                    >
                                    <span class="text-xs text-gray-500 ml-1"
                                        >(12)</span
                                    >
                                </div>
                                <div class="flex items-center space-x-3">
                                    <div
                                        class="flex items-center text-sm text-gray-500"
                                    >
                                        <span class="mr-1">👁</span>
                                        <span>100</span>
                                    </div>
                                    <div
                                        class="flex items-center text-sm text-gray-500"
                                    >
                                        <span class="mr-1">💬</span>
                                        <span>3.2k</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </FreelancerLayout>
</template>
