<script setup>
const categories = [
    { name: "Back to top", href: "#" },
    { name: "Privacy Policy", href: "#" },
    { name: "Cookies", href: "#" },
    { name: "Cookie Settings", href: "#" },
    { name: "Do not sell or share my personal information", href: "#" },
];
</script>

<template>
    <footer
        class="bg-gray-100 self-end text-white w-full py-8 border-t border-gray-300"
    >
        <div class="w-full px-6">
            <!-- loop categories -->
            <ul class="flex justify-around">
                <li v-for="category in categories" :key="category.name">
                    <a
                        :href="category.href"
                        class="text-gray-500 hover:text-gray-700 transition duration-150"
                    >
                        {{ category.name }}
                    </a>
                </li>
            </ul>
        </div>
    </footer>
</template>
