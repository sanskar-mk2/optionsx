<script setup>
import communityGrid from "../../assets/Group 37.png"; // Assuming this is the name of your combined image
</script>

<template>
  <div class="py-16 px-4">
    <div class="max-w-4xl mx-auto text-center">
      <!-- Header -->
      <h2 class="text-4xl font-bold mb-4">
        Community <span class="text-red-600">support.</span>
      </h2>

      <!-- Description -->
      <p class="text-gray-600 text-lg mb-12 max-w-3xl mx-auto">
        The journey to making a living by doing what you love is not always an easy one. But you can rest assured that, 
        from our most successful Authors to the new starters, everyone will be happy to help you along the way.
      </p>

      <!-- Community Image Grid -->
      <div class="rounded-lg overflow-hidden">
        <img 
          :src="communityGrid" 
          alt="Community members and contributors" 
          class="w-full h-auto"
        />
      </div>
    </div>
  </div>
</template>