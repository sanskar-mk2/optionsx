<script setup>
import { ref } from "vue";
import expandIcon from "../../assets/expand-icon.png";
import FreelancerLayout from "@/Layouts/FreelancerLayout.vue";
import chatIcon from "../../assets/chat-icon.png";

const openFaqs = ref([1]); // Default to first FAQ open

const toggleFaq = (id) => {
    if (openFaqs.value.includes(id)) {
        // Remove from array if already open
        openFaqs.value = openFaqs.value.filter((faqId) => faqId !== id);
    } else {
        // Add to array if not open
        openFaqs.value.push(id);
    }
};
</script>

<template>
    <FreelancerLayout>
        <main
            class="flex-1 p-8 bg-gray-50 overflow-y-auto justify-center w-full flex"
        >
            <div class="max-w-2xl">
                <div class="max-w-4xl mx-auto">
                    <div
                        class="mb-8 flex flex-col gap-2 justify-center text-center"
                    >
                        <h1 class="text-3xl font-bold">
                            Frequently asked
                            <span class="text-red-600">questions?</span>
                        </h1>
                        <p class="text-gray-600 mt-2">
                            These are the most commonly asked questions by
                            freelancers. Can't find what you're looking for?
                            <span class="underline"
                                >Chat to our friendly team!</span
                            >
                        </p>
                    </div>

                    <div>
                        <!-- FAQ Item 1 -->
                        <div class="divide-y divide-gray-200">
                            <div class="rounded-md shadow-sm overflow-hidden">
                                <div
                                    class="flex justify-between items-center p-4 cursor-pointer"
                                    @click="toggleFaq(1)"
                                >
                                    <h3 class="font-medium">
                                        How do I sell my work on OptionsX?
                                    </h3>
                                    <img
                                        :src="expandIcon"
                                        alt="Expand"
                                        class="transition-transform"
                                        :class="{
                                            'transform rotate-180':
                                                openFaqs.includes(1),
                                        }"
                                    />
                                </div>
                                <div
                                    v-if="openFaqs.includes(1)"
                                    class="p-4 pt-0 border-t border-gray-100"
                                >
                                    <p class="text-gray-600">
                                        Simply upload your designs, set your
                                        price, and list your items in the
                                        marketplace. Buyers can purchase your
                                        work directly.
                                    </p>
                                </div>
                            </div>

                            <!-- FAQ Item 2 -->
                            <div class="rounded-md shadow-sm overflow-hidden">
                                <div
                                    class="flex justify-between items-center p-4 cursor-pointer"
                                    @click="toggleFaq(2)"
                                >
                                    <h3 class="font-medium">
                                        What kind of files can I upload?
                                    </h3>
                                    <img
                                        :src="expandIcon"
                                        alt="Expand"
                                        class="transition-transform"
                                        :class="{
                                            'transform rotate-180':
                                                openFaqs.includes(2),
                                        }"
                                    />
                                </div>
                                <div
                                    v-if="openFaqs.includes(2)"
                                    class="p-4 pt-0 border-t border-gray-100"
                                >
                                    <p class="text-gray-600">
                                        You can upload various file formats
                                        including PSD, AI, JPG, PNG, PDF, and
                                        more. Be sure to check our guidelines
                                        for specific requirements.
                                    </p>
                                </div>
                            </div>

                            <!-- FAQ Item 3 -->
                            <div class="rounded-md shadow-sm overflow-hidden">
                                <div
                                    class="flex justify-between items-center p-4 cursor-pointer"
                                    @click="toggleFaq(3)"
                                >
                                    <h3 class="font-medium">
                                        How do I get paid?
                                    </h3>
                                    <img
                                        :src="expandIcon"
                                        alt="Expand"
                                        class="transition-transform"
                                        :class="{
                                            'transform rotate-180':
                                                openFaqs.includes(3),
                                        }"
                                    />
                                </div>
                                <div
                                    v-if="openFaqs.includes(3)"
                                    class="p-4 pt-0 border-t border-gray-100"
                                >
                                    <p class="text-gray-600">
                                        Payments are processed every two weeks.
                                        You can choose your preferred payment
                                        method in your account settings.
                                    </p>
                                </div>
                            </div>

                            <!-- FAQ Item 4 -->
                            <div class="rounded-md shadow-sm overflow-hidden">
                                <div
                                    class="flex justify-between items-center p-4 cursor-pointer"
                                    @click="toggleFaq(4)"
                                >
                                    <h3 class="font-medium">
                                        Are there any restrictions on the
                                        content I can upload?
                                    </h3>
                                    <img
                                        :src="expandIcon"
                                        alt="Expand"
                                        class="transition-transform"
                                        :class="{
                                            'transform rotate-180':
                                                openFaqs.includes(4),
                                        }"
                                    />
                                </div>
                                <div
                                    v-if="openFaqs.includes(4)"
                                    class="p-4 pt-0 border-t border-gray-100"
                                >
                                    <p class="text-gray-600">
                                        Yes, all content must comply with our
                                        community guidelines. We do not allow
                                        copyright infringement, adult content,
                                        or harmful material.
                                    </p>
                                </div>
                            </div>

                            <!-- FAQ Item 5 -->
                            <div class="rounded-md shadow-sm overflow-hidden">
                                <div
                                    class="flex justify-between items-center p-4 cursor-pointer"
                                    @click="toggleFaq(5)"
                                >
                                    <h3 class="font-medium">
                                        How do I update or delete an item I've
                                        uploaded?
                                    </h3>
                                    <img
                                        :src="expandIcon"
                                        alt="Expand"
                                        class="transition-transform"
                                        :class="{
                                            'transform rotate-180':
                                                openFaqs.includes(5),
                                        }"
                                    />
                                </div>
                                <div
                                    v-if="openFaqs.includes(5)"
                                    class="p-4 pt-0 border-t border-gray-100"
                                >
                                    <p class="text-gray-600">
                                        You can manage your items from your
                                        dashboard. Navigate to "My Items" and
                                        select the item you wish to update or
                                        delete.
                                    </p>
                                </div>
                            </div>

                            <!-- FAQ Item 6 -->
                            <div class="rounded-md shadow-sm overflow-hidden">
                                <div
                                    class="flex justify-between items-center p-4 cursor-pointer"
                                    @click="toggleFaq(6)"
                                >
                                    <h3 class="font-medium">
                                        What happens if my upload is rejected?
                                    </h3>
                                    <img
                                        :src="expandIcon"
                                        alt="Expand"
                                        class="transition-transform"
                                        :class="{
                                            'transform rotate-180':
                                                openFaqs.includes(6),
                                        }"
                                    />
                                </div>
                                <div
                                    v-if="openFaqs.includes(6)"
                                    class="p-4 pt-0 border-t border-gray-100"
                                >
                                    <p class="text-gray-600">
                                        If your upload is rejected, you'll
                                        receive an email with the reason. You
                                        can make the necessary changes and
                                        resubmit.
                                    </p>
                                </div>
                            </div>

                            <!-- FAQ Item 7 -->
                            <div class="rounded-md shadow-sm overflow-hidden">
                                <div
                                    class="flex justify-between items-center p-4 cursor-pointer"
                                    @click="toggleFaq(7)"
                                >
                                    <h3 class="font-medium">
                                        What percentage of my sales do I keep?
                                    </h3>
                                    <img
                                        :src="expandIcon"
                                        alt="Expand"
                                        class="transition-transform"
                                        :class="{
                                            'transform rotate-180':
                                                openFaqs.includes(7),
                                        }"
                                    />
                                </div>
                                <div
                                    v-if="openFaqs.includes(7)"
                                    class="p-4 pt-0 border-t border-gray-100"
                                >
                                    <p class="text-gray-600">
                                        You keep between 50% to 70% of each
                                        sale, depending on your membership level
                                        and exclusivity arrangement.
                                    </p>
                                </div>
                            </div>

                            <!-- FAQ Item 8 -->
                            <div class="rounded-md shadow-sm overflow-hidden">
                                <div
                                    class="flex justify-between items-center p-4 cursor-pointer"
                                    @click="toggleFaq(8)"
                                >
                                    <h3 class="font-medium">
                                        Can I choose my payment method?
                                    </h3>
                                    <img
                                        :src="expandIcon"
                                        alt="Expand"
                                        class="transition-transform"
                                        :class="{
                                            'transform rotate-180':
                                                openFaqs.includes(8),
                                        }"
                                    />
                                </div>
                                <div
                                    v-if="openFaqs.includes(8)"
                                    class="p-4 pt-0 border-t border-gray-100"
                                >
                                    <p class="text-gray-600">
                                        Yes, we support various payment methods
                                        including PayPal, bank transfer, and
                                        Stripe. You can select your preferred
                                        method in your account settings.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="text-center mt-8">
                            <button
                                class="px-6 py-2 border border-red-600 text-red-600 rounded-md hover:bg-red-50"
                            >
                                Load more
                            </button>
                        </div>

                        <div class="mt-12 rounded-md shadow-sm p-6">
                            <h3 class="text-xl font-medium mb-4">Support</h3>
                            <p class="text-gray-600">
                                Need assistance? Contact our support team
                                anytime at
                                <a
                                    href="mailto:support@optionsx.co"
                                    class="text-red-600 hover:underline"
                                    >support@optionsx.co</a
                                >
                                or visit our
                                <span class="font-bold">Live Chat</span> option
                                for instant help.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Chat support button -->
            <div class="fixed bottom-6 right-6 z-50">
                <button class="bg-black text-white rounded-full p-3 shadow-lg">
                    <img :src="chatIcon" alt="Chat support" class="h-6 w-6" />
                </button>
            </div>
        </main>
    </FreelancerLayout>
</template>
