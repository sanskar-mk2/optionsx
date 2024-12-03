<script setup>
import imageGrid from "../../assets/Group 39.png"; // Assuming the image grid is saved with this name
</script>

<template>
    <div class="py-16 px-4">
        <div class="max-w-4xl mx-auto text-center">
            <!-- Header -->
            <h2 class="text-4xl font-bold mb-4">
                Prioritize <span class="text-red-600">quality</span> first.
            </h2>

            <!-- Description -->
            <p class="text-gray-600 text-lg mb-12">
                Being an Options X creator indicates that you share our strong
                concern for the superior quality of the goods you offer to our
                customers throughout the world.
            </p>

            <!-- Image Grid -->
            <div class="rounded-lg overflow-hidden">
                <img
                    :src="imageGrid"
                    alt="Collection of high quality creative works"
                    class="w-full h-auto"
                />
            </div>
        </div>
    </div>
</template>
