<script setup>
const categories = [
  { name: 'Subscriptions', total: 600, color: 'bg-red-600' },
  { name: 'looking For', total: 800, color: 'bg-yellow-500' },
  { name: 'Web and Code', total: 1500, color: 'bg-blue-500' },
  { name: 'Graphic Design', total: 6900, color: 'bg-navy-900' },
  { name: 'Audio & Video', total: 10400, color: 'bg-blue-800' },
  { name: 'Courses', total: 1200, color: 'bg-red-600' }
];

const topics = [
  {
    title: 'Looking for freelancer to code a instagram clone',
    time: '20 m',
    replies: 12
  },
  {
    title: "Please help! Goodlayer core plugin can't edit",
    time: '38 m',
    replies: 12
  },
  {
    title: 'I got scammed by an creator',
    time: '2 h',
    replies: 12
  },
  {
    title: 'Does purchasing any theme will provide me full-time license?',
    time: '18 h',
    replies: 12
  },
  {
    title: 'Help! WPBakery not working',
    time: '1d',
    replies: 12
  },
  {
    title: 'I accidentally bought three themes of the same type, what i do?',
    time: '3d',
    replies: 12
  },
  {
    title: 'A web-based system to generate ATS-Formatted CV User creates and account and turns on notification b',
    time: '1d',
    replies: 12
  }
];
</script>

<template>
  <div class="max-w-7xl mx-auto px-4 py-8">
    <!-- Header -->
    <h1 class="text-3xl font-bold mb-4">
      OptionsX <span class="text-red-600">Customers</span>
    </h1>
    <p class="text-gray-600 mb-8">
      Whether you're searching for something, creating films, creating websites, or beginning your first graphic design project. This is the spot to share your work along with comments, suggestions, tips, and insights.
    </p>

    <div class="flex flex-col lg:flex-row gap-8">
      <!-- Categories Sidebar -->
      <div class="lg:w-1/3">
        <div class="bg-white rounded-lg p-4 shadow-sm">
          <div v-for="category in categories" 
               :key="category.name" 
               class="flex items-center justify-between py-2 hover:bg-gray-50 cursor-pointer rounded px-2">
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
               class="bg-white p-4 rounded-lg shadow-sm flex justify-between items-start hover:shadow-md transition-shadow">
            <h3 class="text-gray-800 hover:text-gray-600 cursor-pointer flex-1">
              {{ topic.title }}
            </h3>
            <div class="flex items-center gap-4 text-sm text-gray-500 whitespace-nowrap ml-4">
              <span>{{ topic.time }}</span>
              <span>{{ topic.replies }} replies</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>