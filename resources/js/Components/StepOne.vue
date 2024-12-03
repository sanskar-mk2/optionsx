<script setup>
import { ref } from 'vue';
import illustrationImage from "../../assets/undraw_building_websites_i78t 1.png";

const expertise = [
  'Website themes and templates',
  'Code scripts and plugins',
  'Stock Video and templates',
  'Graphic design assets and templates',
  '3D models'
];

const termsAccepted = ref(false);
</script>

<template>
  <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
    <div class="p-6 bg-white">
      <div class="flex flex-col lg:flex-row gap-12">
        <!-- Left Column - Content -->
        <div class="flex-1">
          <h2 class="text-3xl font-bold mb-8">Let's begin!</h2>

          <!-- Expertise Section -->
          <div class="mb-8">
            <p class="text-lg mb-4">We are now seeking fresh creators with expertise in:</p>
            <ul class="space-y-3">
              <li v-for="item in expertise" :key="item" class="flex items-center">
                <svg class="w-5 h-5 text-green-500 mr-3" viewBox="0 0 20 20" fill="currentColor">
                  <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                </svg>
                {{ item }}
              </li>
            </ul>
          </div>

          <!-- Stock Photography Note -->
          <p class="mb-6">
            If you are a <a href="#" class="text-red-600 hover:text-red-700">stock photography</a> creator, please click here to apply to be an Creator on our Options X elements subscription.
          </p>

          <!-- Warning Note -->
          <div class="mb-8">
            <p class="text-red-600 font-medium">Note:</p>
            <p>we are temporarily <span class="text-red-600 font-medium">not accepting new creators for music tracks or sound effects</span>, To express your interest for future opportunities, please proceed to the next step.</p>
          </div>

          <!-- Terms Checkbox -->
          <div class="mb-8">
            <label class="flex items-center">
              <input 
                type="checkbox" 
                v-model="termsAccepted"
                class="form-checkbox h-5 w-5 text-red-600 rounded border-gray-300"
              >
              <span class="ml-2">By continuing you agree to the Options X creator terms</span>
            </label>
          </div>

          <!-- Continue Button -->
          <button 
            class="w-full border border-red-600 text-red-600 px-6 py-3 rounded-lg font-medium hover:bg-red-50 transition-colors"
          >
            Continue
          </button>
        </div>

        <!-- Right Column - Illustration -->
        <div class="lg:w-1/2 flex items-center justify-center">
          <img 
            :src="illustrationImage" 
            alt="Creators collaboration illustration"
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