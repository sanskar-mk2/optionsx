<script setup>
import { ref } from "vue";
import theme1 from "../../assets/theme1.png";
import theme2 from "../../assets/theme2.png";
import theme3 from "../../assets/theme3.png";

const searchQuery = ref("");
const selectedView = ref("list"); // 'list' or 'grid'
const currentPage = ref(1);

const categories = ref([
    { name: "All Category", count: null },
    { name: "Site Template", count: 12000 },
    { name: "WordPress", count: 12000 },
    { name: "UI Template", count: 12000 },
    { name: "WordPress", count: 12000 },
    { name: "WordPress", count: 12000 },
    { name: "WordPress", count: 12000 },
]);

const templates = ref([
    {
        id: 1,
        title: "Free WordPress Themes",
        image: theme1,
        author: "ThemeFusion",
        category: "Business",
        price: 69,
        rating: 5,
        reviews: "26.2k",
        sales: "983.4K",
        features: [
            "Top 1 Selling Shopify Theme",
            "SEO Optimized, Fast Loading",
            "Feature-rich, Highly Flexible & Customizable",
        ],
    },
    {
        id: 2,
        title: "Avada | Website Builder For WordPress & eCommerce",
        image: theme2,
        author: "ThemeFusion",
        category: "Business",
        price: 69,
        rating: 5,
        reviews: "26.2k",
        sales: "983.4K",
        features: [
            "Top 1 Selling Shopify Theme",
            "SEO Optimized, Fast Loading",
            "Feature-rich, Highly Flexible & Customizable",
        ],
    },
    {
        id: 3,
        title: "Avada | Website Builder For WordPress & eCommerce",
        image: theme3,
        author: "ThemeFusion",
        category: "Business",
        price: 69,
        rating: 5,
        reviews: "26.2k",
        sales: "983.4K",
        features: [
            "Top 1 Selling Shopify Theme",
            "SEO Optimized, Fast Loading",
            "Feature-rich, Highly Flexible & Customizable",
        ],
    },
    // Additional templates would follow the same pattern
]);
</script>

<template>
    <div class="container mx-auto px-4 py-8">
        <!-- Header Section -->
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-2xl font-bold">Website Template and Themes</h1>
        </div>

        <!-- Search and View Controls -->
        <div class="flex justify-between mb-6">
            <div class="flex-1 max-w-xl">
                <div class="relative">
                    <input
                        v-model="searchQuery"
                        type="text"
                        placeholder="e.g Dashboard theme, CMS"
                        class="w-full px-4 py-2 pr-20 border rounded-lg"
                    />
                    <button
                        class="absolute right-0 top-0 h-full px-6 bg-red-600 text-white rounded-r-lg"
                    >
                        Search
                    </button>
                </div>
            </div>

            <div class="flex items-center gap-4">
                <button
                    :class="[
                        'p-2 border rounded',
                        selectedView === 'list'
                            ? 'border-red-600'
                            : 'border-gray-300',
                    ]"
                    @click="selectedView = 'list'"
                >
                    <span class="sr-only">List view</span>
                    ☰
                </button>
                <button
                    :class="[
                        'p-2 border rounded',
                        selectedView === 'grid'
                            ? 'border-red-600'
                            : 'border-gray-300',
                    ]"
                    @click="selectedView = 'grid'"
                >
                    <span class="sr-only">Grid view</span>
                    ▤
                </button>
                <select class="border rounded-lg px-4 py-2">
                    <option>Sort By</option>
                </select>
            </div>
        </div>

        <!-- Filters and Results -->
        <div class="flex gap-8">
            <!-- Sidebar Filters -->
            <div class="w-64 flex-shrink-0">
                <div class="flex justify-between items-center mb-4">
                    <h2 class="font-bold">Filter</h2>
                    <button class="p-2 border rounded">
                        <span class="sr-only">Filter options</span>
                        ⚙️
                    </button>
                </div>

                <!-- Categories -->
                <div class="mb-6">
                    {/* Category list */}
                    <div
                        v-for="category in categories"
                        :key="category.name"
                        class="flex justify-between py-2"
                    >
                        <span>{{ category.name }}</span>
                        <span class="text-gray-500">{{ category.count }}</span>
                    </div>
                </div>

                <!-- Additional Filters -->
                <div class="border-t py-4">
                    <button class="flex justify-between w-full py-2">
                        <span>Price</span>
                        <span>▼</span>
                    </button>
                </div>
                <div class="border-t py-4">
                    <button class="flex justify-between w-full py-2">
                        <span>On Sale</span>
                        <span>▼</span>
                    </button>
                </div>
                <div class="border-t py-4">
                    <button class="flex justify-between w-full py-2">
                        <span>Rating</span>
                        <span>▼</span>
                    </button>
                </div>
            </div>

            <!-- Results Section -->
            <div class="flex-1">
                <!-- Filter Tags -->
                <div class="flex items-center gap-4 mb-6">
                    <div class="text-sm text-gray-600">59,299 items</div>
                    <div class="flex items-center gap-2">
                        <span
                            class="px-3 py-1 bg-gray-100 rounded-full flex items-center gap-2"
                        >
                            Best Seller
                            <button class="text-gray-500">×</button>
                        </span>
                        <button class="text-red-600">Clear All</button>
                    </div>
                </div>

                <!-- Templates List -->
                <div class="space-y-6">
                    <div
                        v-for="template in templates"
                        :key="template.id"
                        class="border rounded-lg p-4"
                    >
                        <div class="flex gap-6">
                            <div class="w-2/3">
                                <img
                                    :src="template.image"
                                    :alt="template.title"
                                    class="w-full h-48 object-cover rounded"
                                />
                            </div>
                            <div class="flex-1">
                                <div class="flex justify-between items-start">
                                    <h3 class="text-xl font-semibold">
                                        {{ template.title }}
                                    </h3>
                                    <div class="flex gap-2">
                                        <button class="p-2 border rounded">
                                            🔖
                                        </button>
                                        <button class="p-2 border rounded">
                                            ♥
                                        </button>
                                    </div>
                                </div>
                                <p class="text-sm text-gray-600 mb-4">
                                    by {{ template.author }} in
                                    {{ template.category }}
                                </p>
                                <ul class="space-y-1 mb-4">
                                    <li
                                        v-for="feature in template.features"
                                        :key="feature"
                                        class="text-sm"
                                    >
                                        • {{ feature }}
                                    </li>
                                </ul>
                                <div class="flex justify-between items-center">
                                    <div>
                                        <div class="text-2xl font-bold">
                                            ${{ template.price }}
                                        </div>
                                        <div class="flex items-center gap-2">
                                            <div class="flex text-yellow-400">
                                                ★★★★★
                                            </div>
                                            <span class="text-gray-500"
                                                >({{ template.reviews }})</span
                                            >
                                        </div>
                                        <div class="text-sm text-gray-600">
                                            {{ template.sales }} Sales
                                        </div>
                                    </div>
                                    <div class="flex items-center gap-2">
                                        <button class="p-2 border rounded">
                                            🛒
                                        </button>
                                        <button
                                            class="bg-red-600 text-white px-6 py-2 rounded"
                                        >
                                            Live Preview
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Pagination -->
                <div class="flex justify-center gap-2 mt-8">
                    <button
                        v-for="n in 9"
                        :key="n"
                        :class="[
                            'w-8 h-8 rounded border',
                            currentPage === n
                                ? 'bg-red-600 text-white'
                                : 'text-gray-600',
                        ]"
                    >
                        {{ n }}
                    </button>
                    <button class="w-8 h-8 rounded border">→</button>
                </div>
            </div>
        </div>
    </div>
</template>
