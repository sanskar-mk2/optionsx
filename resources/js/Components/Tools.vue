<script setup>
import groupIcon from "../../assets/Group 43.png";
import chatIcon from "../../assets/mdi_chat-outline.png";
import analyticsIcon from "../../assets/carbon_analytics.png";
import documentIcon from "../../assets/fluent_document-one-page-20-regular.png";

const tools = [
  {
    id: 1,
    title: 'Forums',
    icon: groupIcon,
    description: 'Join the discussion with fellow authors to get help and feedback.'
  },
  {
    id: 2,
    title: 'Support',
    icon: chatIcon,
    description: 'Get support from our dedicated team when you need it.'
  },
  {
    id: 3,
    title: 'Analytics',
    icon: analyticsIcon,
    description: 'Check your dashboard to monitor sales and best times to market.'
  },
  {
    id: 4,
    title: 'Insights',
    icon: documentIcon,
    description: 'Stay on top of the game with helpful articles from our community.'
  }
];
</script>

<template>
  <div class="py-16 px-4">
    <div class="max-w-7xl mx-auto">
      <!-- Header -->
      <h2 class="text-4xl font-bold text-center mb-16">
        Tools and support when you <span class="text-red-600">need it.</span>
      </h2>

      <!-- Tools Grid -->
      <div class="mt-16 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
        <div v-for="tool in tools" 
             :key="tool.id" 
             class="text-center">
          <!-- Icon -->
          <div class="mb-6">
            <img :src="tool.icon" 
                 :alt="tool.title"
                 class="mx-auto"
            />
          </div>

          <!-- Content -->
          <h3 class="text-xl font-bold mb-4">
            {{ tool.title }}
          </h3>
          
          <p class="text-gray-600">
            {{ tool.description }}
          </p>
        </div>
      </div>
    </div>
  </div>
</template>
