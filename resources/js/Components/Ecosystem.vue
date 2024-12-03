<script setup>
const categories = [
    {
        id: "codescripts",
        title: "codescripts",
        description:
            "Codescripts contains thousands of plugins, code and scripts for Bootstrap, Javascript, PHP, WordPress, HTML5 and more.",
    },
    {
        id: "video",
        title: "video",
        description:
            "Video is our marketplace for all things video and features a huge collection of royalty-free videos, templates and motion graphics.",
    },
    {
        id: "websitethemes",
        title: "websitethemes",
        description:
            "From WordPress to Shopify themes, website themes is the world's #1 marketplace for premium website templates.",
    },
    {
        id: "designassets",
        title: "designassets",
        description:
            "From logo templates to fonts, Photoshop actions to print materials—designassets is the go-to place for graphics and design assets.",
    },
    {
        id: "stockphotos",
        title: "stockphotos",
        description:
            "Stockphotos is home to a huge collection of royalty-free stock photography ready to use for any kind of project.",
    },
    {
        id: "music-audio",
        title: "music & audio",
        description:
            "Hundreds of thousands of tracks and sound effects created by a community of music professionals from all over the world can be found.",
    },
    {
        id: "3dmodels",
        title: "3dmodels",
        description:
            "On 3D models a global community of professionals create all things 3D—models, computer-generated textures, render setups.",
    },
];
</script>

<template>
    <div class="max-w-7xl mx-auto px-4 py-12">
        <h2 class="text-2xl font-bold mb-12">Know more our ecosystem</h2>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <div
                v-for="category in categories"
                :key="category.id"
                class="bg-white p-8 rounded-lg shadow-sm"
            >
                <!-- Title -->
                <h3
                    class="text-xl font-bold mb-4 hover:underline cursor-pointer"
                >
                    {{ category.title }}
                </h3>

                <!-- Description -->
                <p class="text-gray-600 mb-6">
                    {{ category.description }}
                </p>

                <!-- Button -->
                <button
                    class="w-full border border-red-600 text-black px-4 py-2 rounded-lg hover:bg-gray-50 transition-colors"
                >
                    Read our guidelines
                </button>
            </div>
        </div>
    </div>
</template>
