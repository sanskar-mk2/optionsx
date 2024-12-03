<script setup>
const categories = [
  {
    id: 1,
    title: 'codescripts',
    description: 'Codescripts contains thousands of plugins, code and scripts for Bootstrap, Javascript, PHP, WordPress, HTML5 and more.'
  },
  {
    id: 2,
    title: 'video',
    description: 'Video is our marketplace for all things video and features a huge collection of royalty-free videos, templates and motion graphics.'
  },
  {
    id: 3,
    title: 'websitethemes',
    description: "From WordPress to Shopify themes, webthemes is the world's #1 marketplace for premium website templates."
  },
  {
    id: 4,
    title: 'designassets',
    description: 'Codescripts contains thousands of plugins, code and scripts for Bootstrap, Javascript, PHP, WordPress, HTML5 and more.'
  },
  {
    id: 5,
    title: 'stockphotos',
    description: 'Codescripts contains thousands of plugins, code and scripts for Bootstrap, Javascript, PHP, WordPress, HTML5 and more.'
  },
  {
    id: 6,
    title: 'music & audio',
    description: 'Codescripts contains thousands of plugins, code and scripts for Bootstrap, Javascript, PHP, WordPress, HTML5 and more.'
  },
  {
    id: 7,
    title: '3dmodels',
    description: 'On 3D models a global community of professionals create all things 3D—models, computer-generated textures, render setups and a lot more.'
  }
];
</script>

<template>
  <div class="bg-gray-50 py-16 px-4">
    <!-- Header Section -->
    <div class="max-w-6xl mx-auto text-center mb-16">
      <h2 class="text-4xl font-bold mb-4">
        What can you <span class="text-red-600">sell?</span>
      </h2>
      <p class="text-gray-600 text-lg">
        Everything creative and digital, including stock footage and website layouts.
      </p>
    </div>

    <!-- Categories Grid -->
    <div class="max-w-6xl mx-auto grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mt-16">
      <div v-for="category in categories" :key="category.id" class="flex flex-col">
        <!-- Category Title -->
        <h3 class="text-xl font-medium mb-4">
          <a href="#" class="hover:text-red-600 border-b border-black hover:border-red-600 pb-1 transition-colors">
            {{ category.title }}
          </a>
        </h3>
        
        <!-- Category Description -->
        <p class="text-gray-600">
          {{ category.description }}
        </p>
      </div>
    </div>
  </div>
</template>