<script setup>
import { ref } from 'vue';
import sellingIllustration from "../../assets/undraw_choose_re_7d5a 1.png";

const selected = ref('');

const options = [
  {
    id: 'exclusive',
    text: 'I will sell exclusively on OptionsX platform'
  },
  {
    id: 'multiple',
    text: 'I will sell on OptionsX platform and elsewhere'
  }
];
</script>

<template>
  <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
    <div class="p-6 bg-white">
      <div class="flex flex-col lg:flex-row gap-12">
        <!-- Left Column - Content -->
        <div class="flex-1">
          <h2 class="text-3xl font-bold mb-6">Where do you want to sell?</h2>

          <p class="text-gray-600 mb-8">
            You earn higher creator rates if you sell items just through us. Later on, 
            you are free to change your mind.
          </p>

          <!-- Options Selection -->
          <div class="space-y-4 mb-8">
            <label 
              v-for="option in options" 
              :key="option.id"
              class="flex items-center p-4 border rounded-lg cursor-pointer hover:border-red-200 transition-colors"
              :class="selected === option.id ? 'border-red-600' : 'border-gray-200'"
            >
              <input
                type="radio"
                :value="option.id"
                v-model="selected"
                class="form-radio h-5 w-5 text-red-600"
              >
              <span class="ml-3">{{ option.text }}</span>
            </label>
          </div>

          <!-- Note -->
          <div class="mb-8">
            <p>
              <span class="text-red-600 font-medium">Note:</span> After comparing $10,000 of sales, 
              our top exclusive creator earns twice as much as a non-exclusive creator for the same 
              amount of sales.
            </p>
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
            :src="sellingIllustration" 
            alt="Selling platform illustration"
            class="max-w-full h-auto"
          />
        </div>
      </div>
    </div>
  </div>
</template>

<style scoped>
.form-radio {
  @apply rounded-full border-gray-300;
}
.form-radio:checked {
  @apply bg-red-600 border-red-600;
}
</style>