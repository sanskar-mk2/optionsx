<script setup>
import { ref } from 'vue';
import avatarPlaceholder from "../../assets/avatar-placeholder.png";

const balances = {
  elements: {
    amount: 0.00,
    calculatedDate: '10 Nov 2024'
  },
  market: {
    amount: 0.00,
    calculatedDate: '10 Nov 2024'
  }
};

const profileItems = [
  {
    id: 'tax',
    icon: 'document',
    title: 'Tax information',
    description: 'Get charged the right amount of tax on your earnings'
  },
  {
    id: 'payout',
    icon: 'credit-card',
    title: 'Payout method',
    description: 'Let us know where you would like your earnings paid'
  }
];
</script>

<template>
  <div class="max-w-7xl py-16 mx-auto p-8">
    <!-- Header -->
    <div class="flex items-center gap-4 mb-12">
      <img :src="avatarPlaceholder" alt="" class="w-16 h-16 bg-gray-200" />
      <div>
        <p class="text-lg text-gray-600">Welcome,</p>
        <h1 class="text-2xl font-bold">nkumaruiux</h1>
      </div>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
      <!-- Profile Management -->
      <div class="bg-white rounded-lg p-6 shadow-sm">
        <h2 class="text-xl font-bold mb-6">Manage your profile</h2>

        <div class="space-y-6">
          <div v-for="item in profileItems" 
               :key="item.id"
               class="flex items-start gap-4">
            <!-- Icon -->
            <div class="p-3 bg-gray-50 rounded-full">
              <svg v-if="item.icon === 'document'" class="w-6 h-6 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
              </svg>
              <svg v-else class="w-6 h-6 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z" />
              </svg>
            </div>

            <div>
              <h3 class="font-medium">{{ item.title }}</h3>
              <p class="text-gray-600">{{ item.description }}</p>
            </div>
          </div>
        </div>

        <a href="#" class="inline-block mt-6 text-red-600 hover:text-red-700">
          Learn more about your profile →
        </a>
      </div>

      <!-- Balances -->
      <div class="bg-white rounded-lg p-6 shadow-sm">
        <h2 class="text-xl font-bold mb-6">Balances</h2>

        <div class="grid grid-cols-2 gap-4">
          <!-- Elements Balance -->
          <div class="bg-gray-50 p-4 rounded-lg">
            <p class="text-gray-600 mb-2">Elements</p>
            <p class="text-2xl font-bold mb-1">${{ balances.elements.amount.toFixed(2) }}</p>
            <p class="text-sm text-gray-500">(after tax)</p>
            <p class="text-sm text-gray-500 mt-4">
              Calculated on {{ balances.elements.calculatedDate }}
            </p>
          </div>

          <!-- Market Balance -->
          <div class="bg-gray-50 p-4 rounded-lg">
            <p class="text-gray-600 mb-2">Market</p>
            <p class="text-2xl font-bold mb-1">${{ balances.market.amount.toFixed(2) }}</p>
            <p class="text-sm text-gray-500">(after tax)</p>
            <p class="text-sm text-gray-500 mt-4">
              Calculated on {{ balances.market.calculatedDate }}
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>