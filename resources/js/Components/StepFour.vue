<script setup>
import { ref } from 'vue';
import specialtyIllustration from "../../assets/undraw_schedule_re_2vro 1.png";

const selected = ref([]);

const specialties = [
  {
    id: 'website',
    text: 'Website themes and templates'
  },
  {
    id: 'code',
    text: 'Code scripts and plugins'
  },
  {
    id: 'video',
    text: 'Stock video and templates'
  },
  {
    id: 'graphic',
    text: 'Graphic design assets and templates'
  },
  {
    id: '3d',
    text: '3D models'
  },
  {
    id: 'photo',
    text: 'Stock photography'
  },
  {
    id: 'music',
    text: 'Music tracks and sound effects'
  }
];
</script>

<template>
  <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
    <div class="p-6 bg-white">
      <div class="flex flex-col lg:flex-row gap-12">
        <!-- Left Column - Content -->
        <div class="flex-1">
          <h2 class="text-3xl font-bold mb-8">What is your specialty?</h2>

          <!-- Specialties Selection -->
          <div class="space-y-4 mb-8">
            <label 
              v-for="specialty in specialties" 
              :key="specialty.id"
              class="flex items-center p-4 border rounded-lg cursor-pointer hover:border-red-200 transition-colors"
              :class="selected.includes(specialty.id) ? 'border-red-600' : 'border-gray-200'"
            >
              <input
                type="checkbox"
                :value="specialty.id"
                v-model="selected"
                class="form-checkbox h-5 w-5 text-red-600"
              >
              <span class="ml-3">{{ specialty.text }}</span>
            </label>
          </div>

          <!-- Next Button -->
          <button 
            class="w-full border border-red-600 text-red-600 px-6 py-3 rounded-lg font-medium hover:bg-red-50 transition-colors"
          >
            Next
          </button>
        </div>

        <!-- Right Column - Illustration -->
        <div class="lg:w-1/2 flex items-center justify-center">
          <img 
            :src="specialtyIllustration" 
            alt="Specialty selection illustration"
            class="max-w-full h-auto"
          />
        </div>
      </div>
    </div>
  </div>
</template>

<style scoped>
.form-checkbox {
  @apply rounded border-gray-300;
}
.form-checkbox:checked {
  @apply bg-red-600 border-red-600;
}
</style>