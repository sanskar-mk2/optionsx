<script setup>
import { ref } from "vue";

const email = ref("");

const handleSubscribe = () => {
    // Handle subscription logic here
    console.log("Subscribing with email:", email.value);
};
</script>

<template>
    <div class="w-full bg-red-600 py-20">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-4xl font-bold text-white mb-4">
                Didn't Find Perfect Theme
            </h2>
            <p class="text-white mb-8">
                Need More Options? Subscribe to get more themes
            </p>

            <!-- Email Subscription Form -->
            <div class="max-w-2xl mx-auto">
                <form
                    @submit.prevent="handleSubscribe"
                    class="flex gap-4 bg-white p-2 rounded-lg"
                >
                    <input
                        v-model="email"
                        type="email"
                        placeholder="Enter your email address"
                        required
                        class="flex-1 px-4 py-2 focus:outline-none text-gray-700 rounded-md"
                    />
                    <button
                        type="submit"
                        class="bg-red-600 text-white px-8 py-2 rounded-md hover:bg-red-700 transition-colors"
                    >
                        Subscribe
                    </button>
                </form>
            </div>
        </div>
    </div>
</template>
