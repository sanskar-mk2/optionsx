<script setup>
const categories = [
  { name: 'Creator Hangout', total: 600, color: 'bg-red-600' },
  { name: 'Theme Creators', total: 800, color: 'bg-yellow-500' },
  { name: 'Code Scripts', total: 1500, color: 'bg-blue-500' },
  { name: 'Video Creators', total: 6900, color: 'bg-navy-900' },
  { name: 'Audio & Music', total: 10400, color: 'bg-blue-800' },
  { name: 'Graphics Creators', total: 1200, color: 'bg-red-600' },
  { name: 'Photo Creators', total: 11500, color: 'bg-green-600' },
  { name: 'Elements', total: 8500, color: 'bg-cyan-500' }
];

const topics = [
  {
    title: 'I have not receive my earning for August and September 2024',
    time: '20 m',
    replies: 12
  },
  {
    title: 'OptionsX elements payout email',
    time: '38 m',
    replies: 5
  },
  {
    title: "Haven't received payment this month, paid in November?",
    time: '2 h',
    replies: 2
  },
  {
    title: 'Seeking Recommendations: What parent theme to use?',
    time: '6 h',
    replies: 11
  },
  {
    title: 'Two things are not compatible on mobile with Automotive. Help?',
    time: '8 h',
    replies: 12
  },
  {
    title: 'My ID check is expaired what should i do?',
    time: '10 h',
    replies: 10
  },
  {
    title: 'October payment not received in my paypal in this',
    time: '15 h',
    replies: 1
  }
];
</script>

<template>
  <div class="max-w-7xl mx-auto px-4 py-8">
    <!-- Header -->
    <h1 class="text-3xl font-bold mb-4">
      OptionsX <span class="text-red-600">Creators</span>
    </h1>
    <p class="text-gray-600 mb-8">
      Options X creators can gather here to work together, exchange ideas, and support one another's success. from marketing to item development and feedback, and all points in between.
    </p>

    <div class="flex flex-col lg:flex-row gap-8">
      <!-- Categories Sidebar -->
      <div class="lg:w-1/3">
        <div class="bg-white rounded-lg p-4 shadow-sm">
          <div v-for="category in categories" :key="category.name" class="flex items-center justify-between py-2">
            <div class="flex items-center gap-3">
              <div :class="[category.color, 'w-3 h-3']"></div>
              <span class="text-gray-700">{{ category.name }}</span>
            </div>
            <span class="text-gray-500">{{ category.total }} total</span>
          </div>
        </div>
      </div>

      <!-- Topics List -->
      <div class="lg:flex-1">
        <div class="space-y-4">
          <div v-for="topic in topics" 
               :key="topic.title"
               class="bg-white p-4 rounded-lg shadow-sm flex justify-between items-center hover:shadow-md transition-shadow">
            <h3 class="text-gray-800 hover:text-gray-600 cursor-pointer">
              {{ topic.title }}
            </h3>
            <div class="flex items-center gap-4 text-sm text-gray-500">
              <span>{{ topic.time }}</span>
              <span>{{ topic.replies }} replies</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>