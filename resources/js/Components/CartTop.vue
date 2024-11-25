<script setup>
import { ref } from "vue";
import cart1 from "../../assets/cart1.png";
import cart2 from "../../assets/cart2.jpeg";

const selectedItems = ref([true, false]);

const cartItems = [
    {
        id: 1,
        title: "Avada | Website Builder For WordPress & eCommerce",
        image: cart1,
        originalPrice: 69.0,
        currentPrice: 32.99,
        details: "Buy online Training Plus and 2 others",
        duration: "24 total hours",
        lectures: "32 lectures",
        level: "Beginner",
    },
    {
        id: 2,
        title: "Real State Mastery: From Basic to Investment Strategies",
        image: cart2,
        originalPrice: 40.99,
        currentPrice: 40.99,
        details: "Buy online Training Plus and 4 others",
        duration: "14 total hours",
        lectures: "20 lectures",
        level: "Beginner",
    },
];

const promoCode = ref("AAPPKK22");
const isPromoApplied = ref(true);

const breadcrumbs = [
    "Home",
    "Files",
    "eCommerce",
    "Shopify",
    "Fashion",
    "Shopping Cart",
];

const calculateSubtotal = () => {
    return cartItems.reduce((total, item, index) => {
        return total + (selectedItems.value[index] ? item.currentPrice : 0);
    }, 0);
};
</script>

<template>
    <div class="max-w-7xl mx-auto p-4">
        <!-- Breadcrumb -->
        <div class="flex items-center gap-2 text-sm text-gray-600 mb-8">
            <template v-for="(crumb, index) in breadcrumbs" :key="index">
                <span
                    :class="{
                        'text-red-500': index === breadcrumbs.length - 1,
                    }"
                >
                    {{ crumb }}
                </span>
                <span v-if="index < breadcrumbs.length - 1" class="mx-1"
                    >•</span
                >
            </template>
        </div>

        <div class="flex flex-col lg:flex-row gap-8">
            <!-- Cart Items -->
            <div class="lg:w-2/3">
                <div class="mb-4">
                    <label class="flex items-center">
                        <input
                            type="checkbox"
                            class="form-checkbox h-4 w-4 text-red-500"
                        />
                        <span class="ml-2">Select all</span>
                    </label>
                </div>

                <!-- Cart Items List -->
                <div class="space-y-6">
                    <div
                        v-for="(item, index) in cartItems"
                        :key="item.id"
                        class="flex gap-4 p-4 bg-white rounded-lg shadow"
                    >
                        <input
                            type="checkbox"
                            v-model="selectedItems[index]"
                            class="form-checkbox h-4 w-4 mt-2 text-red-500"
                        />

                        <img
                            :src="item.image"
                            :alt="item.title"
                            class="w-48 h-32 object-cover rounded"
                        />

                        <div class="flex-1">
                            <h3 class="text-lg font-semibold">
                                {{ item.title }}
                            </h3>
                            <p class="text-gray-600 text-sm">
                                {{ item.details }}
                            </p>

                            <div
                                class="flex items-center gap-4 mt-2 text-sm text-gray-600"
                            >
                                <span>{{ item.duration }}</span>
                                <span>•</span>
                                <span>{{ item.lectures }}</span>
                                <span>•</span>
                                <span class="text-red-500">{{
                                    item.level
                                }}</span>
                            </div>

                            <div class="flex items-center justify-between mt-4">
                                <div class="space-x-2">
                                    <a
                                        href="#"
                                        class="text-gray-600 hover:text-gray-800"
                                        >Move to Wishlist</a
                                    >
                                    <span>|</span>
                                    <a
                                        href="#"
                                        class="text-gray-600 hover:text-gray-800"
                                        >Save for later</a
                                    >
                                    <span>|</span>
                                    <a
                                        href="#"
                                        class="text-gray-600 hover:text-gray-800"
                                        >Remove</a
                                    >
                                </div>
                                <div class="text-right">
                                    <span
                                        class="text-gray-400 line-through text-sm"
                                        >${{
                                            item.originalPrice.toFixed(2)
                                        }}</span
                                    >
                                    <span class="text-xl font-bold ml-2"
                                        >${{
                                            item.currentPrice.toFixed(2)
                                        }}</span
                                    >
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Checkout Section -->
            <div class="lg:w-1/3">
                <div class="bg-white p-6 rounded-lg shadow">
                    <h2 class="text-lg mb-4">Subtotal:</h2>
                    <div class="flex justify-between items-center mb-4">
                        <span class="text-3xl font-bold"
                            >${{ calculateSubtotal().toFixed(2) }}</span
                        >
                        <span class="text-gray-400 line-through"
                            >${{ (69.0).toFixed(2) }}</span
                        >
                    </div>

                    <div class="mb-6">
                        <h3 class="font-semibold mb-2">Promotions</h3>
                        <div
                            v-if="isPromoApplied"
                            class="flex items-center text-green-500 mb-2"
                        >
                            <svg
                                class="w-5 h-5 mr-2"
                                fill="none"
                                stroke="currentColor"
                                viewBox="0 0 24 24"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M5 13l4 4L19 7"
                                ></path>
                            </svg>
                            <span>Coupon code applied "AAPPKK22"</span>
                        </div>
                        <div class="flex gap-2">
                            <input
                                type="text"
                                v-model="promoCode"
                                class="flex-1 border rounded px-3 py-2"
                                placeholder="Enter promo code"
                            />
                            <button
                                class="px-4 py-2 bg-gray-200 rounded hover:bg-gray-300"
                            >
                                Apply
                            </button>
                        </div>
                    </div>

                    <a
                        href="#"
                        class="block w-full bg-red-600 text-white text-center py-3 rounded-lg hover:bg-red-700 transition-colors"
                    >
                        Checkout Now
                    </a>
                </div>

                <!-- Product Promotion -->
                <div class="mt-6 border border-red-500 rounded-lg p-4">
                    <div class="flex gap-4">
                        <img
                            src="../../assets/cart3.png"
                            alt="Avada Website Builder"
                            class="w-24 h-24 object-cover"
                        />
                        <div class="flex-1">
                            <h3 class="font-semibold">
                                Avada | Website Builder
                            </h3>
                            <p class="text-sm text-gray-600">
                                by Developer in Business
                            </p>
                            <div class="flex items-center justify-between mt-2">
                                <span class="font-bold">Regular License</span>
                                <span class="text-red-500 text-2xl font-bold"
                                    >$32.99</span
                                >
                            </div>
                            <a
                                href="#"
                                class="block w-full bg-red-600 text-white text-center py-2 rounded mt-2 hover:bg-red-700"
                            >
                                Checkout Now
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
