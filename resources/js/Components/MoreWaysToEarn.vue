<script setup>
import riHandCoin from "../../assets/ri_hand-coin-line.png";
import icMessage from "../../assets/ic_outline-message.png";
import fluentPage from "../../assets/fluent-mdl2_page.png";
import radixLaptop from "../../assets/radix-icons_laptop.png";

const earningOptions = [
    {
        id: 1,
        title: "Sell more, Earn more",
        description:
            "Reach new revenue targets to increase the value of each sale.",
        image: riHandCoin,
        link: {
            text: "View payment schedule",
            url: "#",
        },
    },
    {
        id: 2,
        title: "Spread the word",
        description:
            "Drive customers to Options X Market and be paid for each purchase.",
        image: icMessage,
        link: {
            text: "See our affiliate program",
            url: "#",
        },
    },
    {
        id: 3,
        title: "Choose exclusivity",
        description:
            "To increase your earnings, become exclusive. Otherwise No issue!",
        image: fluentPage,
        link: {
            text: "Check out exclusivity rates",
            url: "#",
        },
    },
    {
        id: 4,
        title: "Multiple markets",
        description:
            "Let your imagination run wild! We offer a variety of platforms.",
        image: radixLaptop,
        link: {
            text: "Discover our ecosystem",
            url: "#",
        },
    },
];
</script>

<template>
    <div class="py-16 px-4">
        <div class="max-w-7xl mx-auto">
            <!-- Header -->
            <h2 class="text-4xl font-bold text-center mb-16">
                More ways to <span class="text-red-600">earn.</span>
            </h2>

            <!-- Cards Grid -->
            <div
                class="mt-16 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8"
            >
                <div
                    v-for="option in earningOptions"
                    :key="option.id"
                    class="text-center"
                >
                    <!-- Icon -->
                    <div class="mb-6">
                        <img
                            :src="option.image"
                            :alt="option.title"
                            class="mx-auto"
                        />
                    </div>

                    <!-- Content -->
                    <h3 class="text-xl font-bold mb-4">
                        {{ option.title }}
                    </h3>

                    <p class="text-gray-600 mb-4">
                        {{ option.description }}
                    </p>

                    <!-- Link -->
                    <a
                        :href="option.link.url"
                        class="text-black hover:text-red-600 font-medium transition-colors"
                    >
                        {{ option.link.text }}
                    </a>
                </div>
            </div>
        </div>
    </div>
</template>
