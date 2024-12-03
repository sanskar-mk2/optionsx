<script setup>
const announcements = [
    {
        id: 1,
        content:
            "Free File nominations for GraphicRiver are now open - we're looking for files to use in Marketing promotions during July, August and September, including GraphicRiver's Free File of the Month items. View the criteria and nominate items",
        link: "#",
        date: "October 9",
    },
    {
        id: 2,
        content:
            "Free File nominations for GraphicRiver are now open - we're looking for files to use in Marketing promotions during July, August and September, including GraphicRiver's Free File of the Month items. View the criteria and nominate items",
        link: "#",
        date: "October 9",
    },
    {
        id: 3,
        content:
            "Free File nominations for GraphicRiver are now open - we're looking for files to use in Marketing promotions during July, August and September, including GraphicRiver's Free File of the Month items. View the criteria and nominate items",
        link: "#",
        date: "October 9",
    },
    {
        id: 4,
        content:
            "Free File nominations for GraphicRiver are now open - we're looking for files to use in Marketing promotions during July, August and September, including GraphicRiver's Free File of the Month items. View the criteria and nominate items",
        link: "#",
        date: "October 9",
    },
    {
        id: 5,
        content:
            "Free File nominations for GraphicRiver are now open - we're looking for files to use in Marketing promotions during July, August and September, including GraphicRiver's Free File of the Month items. View the criteria and nominate items",
        link: "#",
        date: "October 9",
    },
    {
        id: 6,
        content:
            "Free File nominations for GraphicRiver are now open - we're looking for files to use in Marketing promotions during July, August and September, including GraphicRiver's Free File of the Month items. View the criteria and nominate items",
        link: "#",
        date: "October 9",
    },
];
</script>

<template>
    <div class="max-w-4xl mx-auto px-4 py-8">
        <h1 class="text-3xl font-bold mb-4">OptionsX Announcements</h1>

        <p class="text-gray-600 mb-8">
            This category is for official Options X announcements - only Options
            X staff can create new topics in this area.
        </p>

        <div class="space-y-6">
            <div
                v-for="announcement in announcements"
                :key="announcement.id"
                class="flex justify-between items-start gap-4 py-4 border-b last:border-b-0"
            >
                <div class="flex gap-4">
                    <!-- Announcement Icon -->
                    <div class="mt-1">
                        <svg
                            class="w-5 h-5 text-gray-600"
                            viewBox="0 0 20 20"
                            fill="currentColor"
                        >
                            <path
                                d="M18 3a1 1 0 00-1.447-.894L8.763 6H5a3 3 0 000 6h.28l1.771 5.316A1 1 0 008 18h1a1 1 0 001-1v-4.382l6.553 3.276A1 1 0 0018 15V3z"
                            />
                        </svg>
                    </div>

                    <!-- Announcement Content -->
                    <div>
                        <p class="text-gray-800">
                            {{ announcement.content }}
                            <a
                                :href="announcement.link"
                                class="text-blue-500 hover:text-blue-600"
                                >HERE</a
                            >.
                        </p>
                    </div>
                </div>

                <!-- Date -->
                <div class="text-gray-500 whitespace-nowrap">
                    {{ announcement.date }}
                </div>
            </div>
        </div>
    </div>
</template>
