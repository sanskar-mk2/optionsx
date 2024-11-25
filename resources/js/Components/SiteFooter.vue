<script setup>
const footerSections = {
    "All Category": [
        { name: "Site Templates", href: "#" },
        { name: "WordPress", href: "#" },
        { name: "CMS Theme", href: "#" },
        { name: "eCommerce", href: "#" },
        { name: "Blogging", href: "#" },
        { name: "Marketing", href: "#" },
    ],
    Forums: [
        { name: "Forums", href: "#" },
        { name: "Muse Templates", href: "#" },
        { name: "Jamstack", href: "#" },
        { name: "Courses", href: "#" },
        { name: "Template Kits", href: "#" },
        { name: "UI Templates", href: "#" },
    ],
    "For Clients": [
        { name: "How We Works", href: "#", highlight: true },
        { name: "Customers Success", href: "#" },
        { name: "Trust & Safety", href: "#" },
        { name: "Quality Guide", href: "#" },
        { name: "Learns", href: "#" },
    ],
    "For Freelancers": [
        { name: "How We Works", href: "#" },
        { name: "Customers Success", href: "#" },
        { name: "Trust & Safety", href: "#" },
        { name: "Quality Guide", href: "#" },
        { name: "Learns", href: "#" },
    ],
    "About Options X": [
        { name: "About Us", href: "#" },
        { name: "Help Support", href: "#" },
        { name: "Social Impact", href: "#" },
        { name: "Careers", href: "#" },
        { name: "Terms Of services", href: "#" },
    ],
};
</script>

<template>
    <footer class="bg-black text-white w-full py-16">
        <div class="container w-full px-6">
            <!-- Logo -->
            <div class="mb-12">
                <a href="#" class="inline-block">
                    <img src="../../assets/logo.png" alt="Options X" class="h-8" />
                </a>
            </div>

            <!-- Footer Links Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-8">
                <!-- Dynamically generate footer columns -->
                <div
                    v-for="(links, title) in footerSections"
                    :key="title"
                    class="space-y-4"
                >
                    <h3 class="text-lg font-semibold mb-6 text-gray-400">
                        {{ title }}
                    </h3>
                    <ul class="space-y-3">
                        <li v-for="link in links" :key="link.name">
                            <a
                                :href="link.href"
                                :class="{
                                    'text-white hover:text-gray-300 transition duration-150': true,
                                    'text-red-500': link.highlight,
                                }"
                            >
                                {{ link.name }}
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Optional: Add a bottom border -->
            <div class="border-t border-gray-800 mt-16"></div>
        </div>
    </footer>
</template>
