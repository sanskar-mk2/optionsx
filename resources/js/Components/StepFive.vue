<script setup>
import { ref } from 'vue';
import welcomeIllustration from "../../assets/undraw_welcoming_re_x0qo 1.png";
</script>

<template>
  <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
    <div class="p-6 bg-white">
      <div class="flex flex-col lg:flex-row gap-12">
        <!-- Left Column - Content -->
        <div class="flex-1">
          <h2 class="text-3xl font-bold mb-4">Welcome, designer!</h2>
          
          <p class="text-gray-600 mb-8">
            Here is all you need to know about using Envato Market to sell graphic 
            design templates and components.
          </p>

          <!-- Info Sections -->
          <div class="space-y-8 mb-8">
            <div>
              <h3 class="text-xl font-bold mb-2">Quality over quantity</h3>
              <p class="text-gray-600">Focus on selling your best quality design work.</p>
            </div>

            <div>
              <h3 class="text-xl font-bold mb-2">Your items, your prices</h3>
              <p class="text-gray-600">
                Setting your prices correctly will increase sales of your products. 
                <a href="#" class="text-red-600 hover:text-red-700">
                  See our article on avoidance tips and best practices.
                </a>
              </p>
            </div>

            <div>
              <h3 class="text-xl font-bold mb-2">Learn what's required</h3>
              <p class="text-gray-600">
                A quicker review process and a higher probability of success result from 
                adhering to our rules and specifications.
              </p>
            </div>
          </div>

          <!-- Action Buttons -->
          <div class="space-y-4">
            <button 
              class="w-full border border-red-600 text-red-600 px-6 py-3 rounded-lg font-medium hover:bg-red-50 transition-colors"
            >
              Display my dashboard.
            </button>

            <div class="text-center">
              <p class="text-gray-600">
                Not your bag?
                <a href="#" class="text-red-600 hover:text-red-700 ml-1">
                  Go back and change your choice
                </a>
              </p>
            </div>
          </div>
        </div>

        <!-- Right Column - Illustration -->
        <div class="lg:w-1/2 flex items-center justify-center">
          <img 
            :src="welcomeIllustration" 
            alt="Welcome celebration illustration"
            class="max-w-full h-auto"
          />
        </div>
      </div>
    </div>
  </div>
</template>