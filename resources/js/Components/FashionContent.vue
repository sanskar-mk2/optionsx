<script setup>
import { ref } from "vue";
import productImage from "../../assets/image 237.png";
import wtf from "../../assets/68747470733a2f2f7777772e61646f726e7468656d65732e636f6d2f646f63756d656e746174696f6e2f61766f6e652f646573632d696d616765732f61766f6e65352d636172747570646174652e6a70673f78.png";

const breadcrumbs = [
    { name: "Home", link: "#" },
    { name: "Files", link: "#" },
    { name: "eCommerce", link: "#" },
    { name: "Shopify", link: "#" },
    { name: "Fashion", link: "#", active: true },
];

const tabs = [
    { name: "Screenshot", active: true },
    { name: "Description", active: false },
    { name: "Reviews", active: false },
    { name: "Comments", active: false },
    { name: "Support", active: false },
];

const tags = [
    "best shopify theme 2024",
    "clothing",
    "dropshipping",
    "fashion",
    "fastest",
    "furniture",
    "jewelry",
    "lingerie shopify theme",
    "medical theme",
    "mobile friendly",
    "modern",
    "multipurpose",
    "shopify",
    "shopping",
    "yoga",
];

const details = {
    lastUpdated: "24 October 2024",
    published: "6 September 2019",
    browsers: "IE11, Firefox, Safari, Opera, Chrome, Edge",
    shopifyVersion: "Shopify 2.0",
    files: "CSS Files, JS Files",
    columns: "4+",
    documentation: "Well Documented",
    layout: "Responsive",
};
</script>

<template>
    <div class="max-w-7xl mx-auto px-4 py-8">
        <!-- Breadcrumbs -->
        <nav class="mb-6">
            <ul class="flex items-center gap-2 text-sm">
                <li v-for="(crumb, index) in breadcrumbs" :key="index">
                    <a
                        :href="crumb.link"
                        :class="[
                            crumb.active
                                ? 'text-red-600'
                                : 'text-gray-600 hover:text-gray-900',
                        ]"
                    >
                        {{ crumb.name }}
                    </a>
                    <span v-if="index < breadcrumbs.length - 1" class="ml-2"
                        >•</span
                    >
                </li>
            </ul>
        </nav>

        <!-- Main Content -->
        <div class="flex flex-col lg:flex-row gap-8">
            <!-- Left Column - Preview -->
            <div class="lg:w-2/3">
                <!-- Preview Image -->
                <div class="bg-white p-4 rounded-lg shadow-sm mb-6">
                    <img
                        :src="productImage"
                        alt="Theme preview"
                        class="w-full rounded"
                    />
                    <button
                        class="mt-4 w-full bg-red-600 text-white px-6 py-3 rounded-lg flex items-center justify-center gap-2"
                    >
                        <svg
                            class="w-5 h-5"
                            viewBox="0 0 20 20"
                            fill="currentColor"
                        >
                            <path d="M10 12a2 2 0 100-4 2 2 0 000 4z" />
                            <path
                                fill-rule="evenodd"
                                d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z"
                                clip-rule="evenodd"
                            />
                        </svg>
                        Live Preview
                    </button>
                </div>

                <!-- Navigation Menu -->
                <div class="flex items-center gap-4 mb-6">
                    <div class="text-red-600 w-8">
                        <svg viewBox="0 0 24 24" fill="currentColor">
                            <path
                                d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"
                            />
                        </svg>
                    </div>
                    <div class="flex items-center gap-2">
                        <button
                            class="px-4 py-2 text-red-600 bg-white rounded hover:bg-gray-50"
                        >
                            Newest
                        </button>
                        <button
                            class="px-4 py-2 text-gray-700 bg-white rounded hover:bg-gray-50"
                        >
                            Week Best Theme
                        </button>
                        <button
                            class="px-4 py-2 text-gray-700 bg-white rounded hover:bg-gray-50"
                        >
                            E-Commerce
                        </button>
                        <button
                            class="px-4 py-2 text-gray-700 bg-white rounded hover:bg-gray-50"
                        >
                            Marketing
                        </button>
                        <button
                            class="px-4 py-2 text-gray-700 bg-white rounded hover:bg-gray-50"
                        >
                            WordPress
                        </button>
                        <button class="px-4 py-2 bg-red-600 text-white rounded">
                            Search
                        </button>
                    </div>
                </div>

                <!-- Tabs -->
                <div class="border-b mb-6">
                    <nav class="flex gap-6">
                        <button
                            v-for="tab in tabs"
                            :key="tab.name"
                            :class="[
                                'pb-4 font-medium',
                                tab.active
                                    ? 'text-red-600 border-b-2 border-red-600'
                                    : 'text-gray-600',
                            ]"
                        >
                            {{ tab.name }}
                        </button>
                    </nav>
                </div>

                <!-- Content -->
                <div class="prose max-w-none">
                    <p class="mb-6">
                        Take your car rental or car hire business to the next
                        level with Novaride Theme, a sleek, modern, and fully
                        responsive WordPress theme designed specifically for car
                        rental companies, Car hire business, Bike and Maxi
                        Scooter hire & rental business and vehicle hire
                        agencies. Packed with powerful features and an intuitive
                        interface, this theme ensures you can effortlessly
                        showcase your Bike, car, Maxi Scooter inventory and
                        engage customers across all devices.
                    </p>
                    <p>
                        You Car Rental or Car Hire business is never been
                        easier. It's hard send the list of vehicle available for
                        rent or hire. With Novaride Car Rental and Car hire
                        WordPress theme you can showcase all of your available
                        vehicle that available for rent or hire and grow your
                        business. Improve customer experience, and stand out
                        from the competition with a professional Car Rental &
                        Car Hire WordPress theme that drives results. Ready to
                        rev up your online presence? Choose Novaride WordPress
                        Today!
                    </p>
                    <p>
                        Novaride is a best combination of modern design and
                        flexibility. Whether you are launching a new site or
                        revamping your existing one, Novaride provides the
                        perfect foundation to build a strong online presence.
                        Smooth animation adds a unique touch to the site.
                    </p>
                    <!-- Cart Page Blocks Preview -->
                    <div class="bg-white p-6 rounded-lg shadow-sm mt-8">
                        <!-- <h3 class="text-xl font-bold mb-4">CART PAGE BLOCKS</h3> -->
                        <!-- <p class="text-gray-600 mb-4">Now you can arrange cart subtotal block with drag & drops</p> -->
                        <img
                            :src="wtf"
                            alt="Theme preview"
                            class="w-full rounded"
                        />
                    </div>
                </div>
            </div>

            <!-- Right Column - Details -->
            <div class="lg:w-1/3 space-y-6">
                <div class="bg-white p-6 rounded-lg shadow-sm">
                    <h1 class="text-2xl font-bold mb-2">
                        WordPress & eComme...
                    </h1>
                    <p class="text-sm text-gray-600 mb-4">
                        by Developer in Business
                    </p>

                    <!-- Rating -->
                    <div class="flex items-center gap-2 mb-6">
                        <div class="flex">
                            <svg
                                v-for="n in 5"
                                :key="n"
                                class="w-5 h-5 text-yellow-400"
                                viewBox="0 0 20 20"
                                fill="currentColor"
                            >
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                                />
                            </svg>
                        </div>
                        <span class="text-gray-600">(26.2k)</span>
                    </div>

                    <button
                        class="w-full bg-red-600 text-white px-6 py-3 rounded-lg mb-4"
                    >
                        Add to Cart
                    </button>

                    <p class="text-sm text-gray-500">
                        Price is in Us Dollar and excludes tax and handling fees
                    </p>
                </div>

                <!-- Details List -->
                <div class="bg-white p-6 rounded-lg shadow-sm">
                    <dl class="space-y-4">
                        <div
                            v-for="(value, key) in details"
                            :key="key"
                            class="flex justify-between"
                        >
                            <dt class="text-gray-600">{{ key }}</dt>
                            <dd class="text-gray-900">{{ value }}</dd>
                        </div>
                    </dl>
                </div>

                <!-- Tags -->
                <div class="bg-white p-6 rounded-lg shadow-sm">
                    <h3 class="font-bold mb-4">Tags</h3>
                    <div class="flex flex-wrap gap-2">
                        <span
                            v-for="tag in tags"
                            :key="tag"
                            class="px-3 py-1 bg-gray-100 rounded-full text-sm text-gray-600 hover:bg-gray-200 cursor-pointer"
                        >
                            {{ tag }}
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
