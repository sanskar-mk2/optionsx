<script setup>
import { ref } from 'vue';
import welcomeIllustration from "../../assets/undraw_join_re_w1lh 1.png";

const selected = ref('');
const subscribedToNewsletter = ref(false);

const options = [
  {
    id: 'full-time',
    text: 'I already make my living from making and selling items online'
  },
  {
    id: 'planning-full',
    text: 'I plan to make and sell items full time'
  },
  {
    id: 'part-time',
    text: 'I plan to make and sell items part time'
  },
  {
    id: 'hobby',
    text: 'This is just a hobby for me'
  }
];
</script>

<template>
  <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
    <div class="p-6 bg-white">
      <div class="flex flex-col lg:flex-row gap-12">
        <!-- Left Column - Content -->
        <div class="flex-1">
          <h2 class="text-3xl font-bold mb-2">Hello purshora</h2>
          <h3 class="text-2xl font-bold mb-6">Thank you for joining!</h3>

          <p class="text-gray-600 mb-8">
            Tell us about your plans so that we can provide you with the information you require to succeed.
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

          <!-- Newsletter Checkbox -->
          <label class="flex items-center mb-8 cursor-pointer">
            <input 
              type="checkbox"
              v-model="subscribedToNewsletter"
              class="form-checkbox h-5 w-5 text-red-600 rounded border-gray-300"
            >
            <span class="ml-2">
              To receive the most recent advice from our community, register to join our creator mailing list.
            </span>
          </label>

          <!-- Next Button -->
          <button 
            class="w-full border border-red-600 text-white bg-red-600 px-6 py-3 rounded-lg font-medium hover:bg-red-700 transition-colors"
          >
            Next
          </button>
        </div>

        <!-- Right Column - Illustration -->
        <div class="lg:w-1/2 flex items-center justify-center">
          <img 
            :src="welcomeIllustration" 
            alt="Welcome illustration"
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
.form-checkbox {
  @apply rounded border-gray-300;
}
.form-checkbox:checked {
  @apply bg-red-600 border-red-600;
}
</style>