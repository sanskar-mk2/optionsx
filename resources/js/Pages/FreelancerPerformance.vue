<template>
    <FreelancerLayout>
        <div class="p-8 bg-gray-50">
            <!-- Total Stats Section -->
            <div class="bg-white p-6 rounded-md shadow-sm mb-8">
                <h2 class="text-lg font-medium mb-6">
                    Total Stats
                    <span class="text-gray-500 text-sm font-normal"
                        >(All Time)</span
                    >
                </h2>

                <div class="flex justify-between">
                    <!-- Project Views -->
                    <div class="w-full md:w-1/4 text-center mb-6 md:mb-0">
                        <div class="text-3xl font-bold">10.2k</div>
                        <div class="text-sm text-gray-500 mt-1">
                            Project Views
                        </div>
                    </div>

                    <!-- Likes -->
                    <div class="w-full md:w-1/4 text-center mb-6 md:mb-0">
                        <div class="text-3xl font-bold">1.2k</div>
                        <div class="text-sm text-gray-500 mt-1">Likes</div>
                    </div>

                    <!-- Profile Views -->
                    <div class="w-full md:w-1/4 text-center mb-6 md:mb-0">
                        <div class="text-3xl font-bold">2.5k</div>
                        <div class="text-sm text-gray-500 mt-1">
                            Profile View
                        </div>
                    </div>

                    <!-- Project Comments -->
                    <div class="w-full md:w-1/4 text-center">
                        <div class="text-3xl font-bold">102</div>
                        <div class="text-sm text-gray-500 mt-1">
                            Project comments
                        </div>
                    </div>
                </div>
            </div>

            <!-- Project Performance Section -->
            <div class="bg-white p-6 rounded-md shadow-sm mb-8">
                <h2 class="text-lg font-medium mb-6">
                    Project Performance
                    <span class="text-gray-500 text-sm font-normal"
                        >(All Time)</span
                    >
                </h2>

                <div class="overflow-x-auto">
                    <table class="min-w-full">
                        <thead>
                            <tr class="border-b border-gray-200">
                                <th
                                    class="text-left pb-3 text-sm font-normal text-gray-500 w-1/3"
                                >
                                    Project
                                </th>
                                <th
                                    class="text-center pb-3 text-sm font-normal text-gray-500"
                                >
                                    Views
                                </th>
                                <th
                                    class="text-center pb-3 text-sm font-normal text-gray-500"
                                >
                                    Likes
                                </th>
                                <th
                                    class="text-center pb-3 text-sm font-normal text-gray-500"
                                >
                                    Comments
                                </th>
                                <th
                                    class="text-center pb-3 text-sm font-normal text-gray-500"
                                >
                                    Saves
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr
                                v-for="(project, index) in projects"
                                :key="index"
                                class="border-b border-gray-100"
                            >
                                <td class="py-4">
                                    <div class="flex items-center">
                                        <img
                                            :src="project.image"
                                            :alt="project.title"
                                            class="w-16 h-12 object-cover rounded mr-3"
                                        />
                                        <div>
                                            <div class="font-medium">
                                                {{ project.title }}
                                            </div>
                                            <div class="text-xs text-gray-500">
                                                Published
                                                {{ project.publishDate }}
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="py-4 text-center">
                                    <div class="text-xl font-bold">
                                        {{ project.views }}
                                    </div>
                                </td>
                                <td class="py-4 text-center">
                                    <div class="text-xl font-bold">
                                        {{ project.likes }}
                                    </div>
                                </td>
                                <td class="py-4 text-center">
                                    <div class="text-xl font-bold">
                                        {{ project.comments }}
                                    </div>
                                </td>
                                <td class="py-4 text-center">
                                    <div class="text-xl font-bold">
                                        {{ project.saves }}
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Recent Stats Section -->
            <div class="bg-white p-6 rounded-md shadow-sm">
                <h2 class="text-lg font-medium mb-6">
                    Stats
                    <span class="text-gray-500 text-sm font-normal"
                        >(Last 30 Days)</span
                    >
                </h2>

                <div class="flex justify-between">
                    <!-- Project Views -->
                    <div class="w-full md:w-1/4 text-center mb-6 md:mb-0">
                        <div class="text-3xl font-bold">1.5k</div>
                        <div class="text-sm text-gray-500 mt-1">
                            Project Views
                        </div>
                    </div>

                    <!-- Likes -->
                    <div class="w-full md:w-1/4 text-center mb-6 md:mb-0">
                        <div class="text-3xl font-bold">356</div>
                        <div class="text-sm text-gray-500 mt-1">Likes</div>
                    </div>

                    <!-- Profile Views -->
                    <div class="w-full md:w-1/4 text-center mb-6 md:mb-0">
                        <div class="text-3xl font-bold">750</div>
                        <div class="text-sm text-gray-500 mt-1">
                            Profile View
                        </div>
                    </div>

                    <!-- Project Comments -->
                    <div class="w-full md:w-1/4 text-center">
                        <div class="text-3xl font-bold">42</div>
                        <div class="text-sm text-gray-500 mt-1">
                            Project comments
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </FreelancerLayout>
</template>

<script setup>
import { ref } from "vue";
import FreelancerLayout from "@/Layouts/FreelancerLayout.vue";
// import images
import dreamDestination from "../../assets/dream-destination.png";
import brandingName from "../../assets/branding-name.png";
import traversreDestination from "../../assets/traversre-destination.png";

// Project data
const projects = ref([
    {
        title: "Dream Destination",
        image: dreamDestination,
        publishDate: "October 1, 2024",
        views: "3.2k",
        likes: "440",
        comments: "15",
        saves: "25",
    },
    {
        title: "Branding Name",
        image: brandingName,
        publishDate: "August 1, 2024",
        views: "3.2k",
        likes: "440",
        comments: "15",
        saves: "25",
    },
    {
        title: "Traversre Destination",
        image: traversreDestination,
        publishDate: "June 1, 2024",
        views: "3.2k",
        likes: "440",
        comments: "15",
        saves: "25",
    },
    {
        title: "Dream Destination",
        image: dreamDestination,
        publishDate: "May 1, 2024",
        views: "3.2k",
        likes: "440",
        comments: "15",
        saves: "25",
    },
    {
        title: "Branding Name",
        image: brandingName,
        publishDate: "April 30, 2024",
        views: "3.2k",
        likes: "440",
        comments: "15",
        saves: "25",
    },
    {
        title: "Traversre Destination",
        image: traversreDestination,
        publishDate: "March 15, 2024",
        views: "3.2k",
        likes: "440",
        comments: "15",
        saves: "25",
    },
    {
        title: "Branding Name",
        image: brandingName,
        publishDate: "March 1, 2024",
        views: "3.2k",
        likes: "440",
        comments: "15",
        saves: "25",
    },
]);
</script>
