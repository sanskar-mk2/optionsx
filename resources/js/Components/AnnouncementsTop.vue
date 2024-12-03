<script setup>
const navItems = [
  { name: 'Categories', active: true, isRed: true },
  { name: 'Latest', active: false },
  { name: 'New', active: false },
  { name: 'Post', active: false }
];

const announcements = [
  {
    id: 1,
    title: 'OptionsX market downtime: November 9, 2024',
    daysAgo: 14,
    replies: 12
  },
  {
    id: 2,
    title: 'Introducing a new-look Options X',
    daysAgo: 14,
    replies: 12
  },
  {
    id: 3,
    title: 'OptionsX market downtime: November 9, 2024',
    daysAgo: 14,
    replies: 12
  },
  {
    id: 4,
    title: 'OptionsX market downtime: November 9, 2024',
    daysAgo: 14,
    replies: 12
  },
  {
    id: 5,
    title: 'OptionsX market downtime: November 9, 2024',
    daysAgo: 14,
    replies: 12
  },
  {
    id: 6,
    title: 'OptionsX market downtime: November 9, 2024',
    daysAgo: 14,
    replies: 12
  }
];
</script>

<template>
  <div class="max-w-7xl mx-auto px-4 py-8">
    <!-- Navigation -->
    <div class="flex justify-between items-center mb-8">
      <nav class="flex gap-8">
        <a 
          v-for="item in navItems" 
          :key="item.name"
          href="#"
          :class="[
            'text-gray-700 hover:text-gray-900',
            item.active && item.isRed ? 'text-red-600' : '',
            item.active && !item.isRed ? 'text-gray-900' : ''
          ]"
        >
          {{ item.name }}
        </a>
      </nav>

      <button class="border border-red-600 text-red-600 px-4 py-2 rounded-lg hover:bg-red-50">
        + New Topic
      </button>
    </div>

    <!-- Header -->
    <div class="mb-8">
      <h1 class="text-3xl font-bold mb-4">
        OptionsX <span class="text-red-600">Announcements</span>
      </h1>
      <p class="text-gray-600">
        This category is for official Options X announcements - only Options X staff can create new topics in this area.
      </p>
    </div>

    <!-- Announcements Grid -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
      <div 
        v-for="announcement in announcements" 
        :key="announcement.id"
        class="flex items-start gap-4 p-4 bg-white rounded-lg border hover:shadow-sm transition-shadow"
      >
        <!-- Icon -->
        <div class="mt-1">
          <svg class="w-5 h-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor">
            <path d="M18 3a1 1 0 00-1.447-.894L8.763 6H5a3 3 0 000 6h.28l1.771 5.316A1 1 0 008 18h1a1 1 0 001-1v-4.382l6.553 3.276A1 1 0 0018 15V3z" />
          </svg>
        </div>

        <!-- Content -->
        <div class="flex-1">
          <h3 class="font-medium mb-2 hover:text-gray-600 cursor-pointer">
            {{ announcement.title }}
          </h3>
          <div class="flex justify-between text-sm text-gray-500">
            <span>{{ announcement.daysAgo }} days ago</span>
            <span>{{ announcement.replies }} replies</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>