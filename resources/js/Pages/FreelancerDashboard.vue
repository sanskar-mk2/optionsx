<template>
    <FreelancerLayout>
        <div class="p-8 bg-gray-50">
            <!-- Project Info Header -->
            <div
                class="flex items-center justify-center mb-6 bg-white p-4 rounded-md"
            >
                <div class="flex-shrink-0 mr-4">
                    <div
                        class="w-12 h-12 rounded-full bg-black flex items-center justify-center text-white"
                    >
                        <img
                            src="../../assets/white-bell.png"
                            alt="User"
                            class="rounded-full"
                        />
                    </div>
                </div>
                <div class="flex-grow">
                    <h2 class="text-xl font-medium">Mobile design mockup</h2>
                    <p class="text-gray-500 text-sm">
                        Lorem eiusmod et amet, consectetur adipiscing elit, sunt
                        nulum teinko nobulkus el blerc et shore miglos elus.
                    </p>
                </div>
                <div class="flex-shrink-0">
                    <button
                        class="bg-red-600 text-white px-4 py-2 rounded-md text-sm"
                    >
                        View Details
                    </button>
                </div>
            </div>

            <!-- Project Stats Cards -->
            <div
                class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 mb-8"
            >
                <!-- Total Projects -->
                <div
                    class="bg-yellow-50 p-4 rounded-md flex items-center justify-between"
                >
                    <div class="flex flex-col justify-between">
                        <div class="text-lg font-semibold">Total Projects</div>
                        <div class="text-3xl font-bold">10</div>
                    </div>
                    <div class="p-2 rounded">
                        <img
                            :src="documentsIcon"
                            alt="Projects Icon"
                            class="w-12"
                        />
                    </div>
                </div>

                <!-- Complete Project -->
                <div
                    class="bg-blue-50 p-4 rounded-md flex items-center justify-between"
                >
                    <div class="flex flex-col justify-between">
                        <div class="text-lg font-semibold">
                            Complete Project
                        </div>
                        <div class="text-3xl font-bold">7</div>
                    </div>
                    <div class="p-2 rounded">
                        <img
                            :src="checklistIcon"
                            alt="Complete Icon"
                            class="w-12"
                        />
                    </div>
                </div>

                <!-- In-Process Project -->
                <div
                    class="bg-green-50 p-4 rounded-md flex items-center justify-between"
                >
                    <div class="flex flex-col justify-between">
                        <div class="text-lg font-semibold">
                            In-Process Project
                        </div>
                        <div class="text-3xl font-bold">3</div>
                    </div>
                    <div class="p-2 rounded">
                        <img
                            :src="processIcon"
                            alt="Process Icon"
                            class="w-12"
                        />
                    </div>
                </div>

                <!-- Canceled Project -->
                <div
                    class="bg-red-50 p-4 rounded-md flex items-center justify-between"
                >
                    <div class="flex flex-col justify-between">
                        <div class="text-lg font-semibold">
                            Canceled Project
                        </div>
                        <div class="text-2xl font-bold">0</div>
                    </div>
                    <div class="p-2 rounded">
                        <img :src="cancelIcon" alt="Cancel Icon" class="w-12" />
                    </div>
                </div>
            </div>

            <!-- Projects Table -->
            <div class="bg-white rounded-md shadow-sm mb-8 p-4 overflow-hidden">
                <table class="w-full">
                    <thead>
                        <tr class="text-left text-gray-600 text-sm">
                            <th class="px-4 py-3">Project Name</th>
                            <th class="px-4 py-3">Start date</th>
                            <th class="px-4 py-3">End date</th>
                            <th class="px-4 py-3">Status</th>
                            <th class="px-4 py-3">Work type</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr
                            v-for="(project, index) in projects"
                            :key="index"
                            class="border-t border-gray-100"
                        >
                            <td class="px-4 py-3">
                                <div class="flex items-center">
                                    <img
                                        :src="project.image"
                                        :alt="project.name"
                                        class="w-10 h-10 object-cover rounded-full mr-2"
                                    />
                                    <span>{{ project.name }}</span>
                                </div>
                            </td>
                            <td class="px-4 py-3 text-sm">
                                {{ project.startDate }}
                            </td>
                            <td class="px-4 py-3 text-sm">
                                {{ project.endDate }}
                            </td>
                            <td class="px-4 py-3">
                                <span
                                    :class="{
                                        'bg-green-100 text-green-600':
                                            project.status === 'Active',
                                        'bg-red-100 text-red-600':
                                            project.status === 'Completed',
                                    }"
                                    class="px-2 py-1 rounded-full text-xs"
                                >
                                    {{ project.status }}
                                </span>
                            </td>
                            <td class="px-4 py-3 text-sm">
                                {{ project.workType }}
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- Bottom Section -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                <!-- On Going Project's -->
                <div class="bg-white p-6 rounded-md shadow-sm">
                    <h3 class="font-medium">On Going Project's</h3>
                    <p class="text-xs text-gray-500 mb-4">
                        Below showing is the on going project.
                    </p>

                    <!-- Updated Ongoing Projects Based on Figma -->
                    <div class="space-y-6">
                        <!-- Traversore Destination -->
                        <div class="border-b border-gray-100 pb-4">
                            <div class="flex items-center mb-2">
                                <img
                                    :src="traverseDestination"
                                    alt="Traversore Destination"
                                    class="w-14 h-14 object-cover rounded-full mr-3"
                                />
                                <span class="font-medium"
                                    >Traversore Destination</span
                                >
                            </div>
                            <div class="grid grid-cols-4 gap-2 text-sm">
                                <div>
                                    <div class="text-gray-500 text-xs">
                                        Start date
                                    </div>
                                    <div>01/01/2024</div>
                                </div>
                                <div>
                                    <div class="text-gray-500 text-xs">
                                        End date
                                    </div>
                                    <div>On Going</div>
                                </div>
                                <div>
                                    <div class="text-gray-500 text-xs">
                                        Work
                                    </div>
                                    <div>Web Design, Development</div>
                                </div>
                                <div>
                                    <div class="text-gray-500 text-xs">
                                        Status
                                    </div>
                                    <div class="text-green-500">Active</div>
                                </div>
                            </div>
                        </div>

                        <!-- Branding Build -->
                        <div class="border-b border-gray-100 pb-4">
                            <div class="flex items-center mb-2">
                                <img
                                    :src="brandingBuild"
                                    alt="Branding Build"
                                    class="w-14 h-14 object-cover rounded-md mr-3"
                                />
                                <span class="font-medium">Branding Build</span>
                            </div>
                            <div class="grid grid-cols-4 gap-2 text-sm">
                                <div>
                                    <div class="text-gray-500 text-xs">
                                        Start date
                                    </div>
                                    <div>01/01/2024</div>
                                </div>
                                <div>
                                    <div class="text-gray-500 text-xs">
                                        End date
                                    </div>
                                    <div>On Going</div>
                                </div>
                                <div>
                                    <div class="text-gray-500 text-xs">
                                        Work
                                    </div>
                                    <div>UI/UX Design</div>
                                </div>
                                <div>
                                    <div class="text-gray-500 text-xs">
                                        Status
                                    </div>
                                    <div class="text-green-500">Active</div>
                                </div>
                            </div>
                        </div>

                        <!-- Dream Destination -->
                        <div>
                            <div class="flex items-center mb-2">
                                <img
                                    :src="dreamDestination"
                                    alt="Dream Destination"
                                    class="w-14 h-14 object-cover rounded-full mr-3"
                                />
                                <span class="font-medium"
                                    >Dream Destination</span
                                >
                            </div>
                            <div class="grid grid-cols-4 gap-2 text-sm">
                                <div>
                                    <div class="text-gray-500 text-xs">
                                        Start date
                                    </div>
                                    <div>01/01/2024</div>
                                </div>
                                <div>
                                    <div class="text-gray-500 text-xs">
                                        End date
                                    </div>
                                    <div>On Going</div>
                                </div>
                                <div>
                                    <div class="text-gray-500 text-xs">
                                        Work
                                    </div>
                                    <div>Web Design, Development</div>
                                </div>
                                <div>
                                    <div class="text-gray-500 text-xs">
                                        Status
                                    </div>
                                    <div class="text-green-500">Active</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Graphs and Analysis -->
                <div class="bg-white p-6 rounded-md shadow-sm">
                    <div class="flex justify-between items-center mb-6">
                        <div>
                            <h3 class="font-medium">Graphs and Analysis</h3>
                            <p class="text-xs text-gray-500">
                                Project completed per month.
                            </p>
                        </div>
                        <div class="flex items-center">
                            <select
                                class="borderborder-gray-300 rounded-md px-10 py-1 text-sm mr-2"
                            >
                                <option>Month</option>
                            </select>
                            <button
                                class="p-1 rounded-md border border-gray-300"
                            >
                                <img
                                    :src="refreshIcon"
                                    alt="Refresh"
                                    class="w-4 h-4"
                                />
                            </button>
                        </div>
                    </div>

                    <!-- Chart.js Bar Chart -->
                    <div class="h-64">
                        <canvas id="projectChart" ref="projectChart"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </FreelancerLayout>
</template>

<script setup>
import { ref, onMounted } from "vue";
import FreelancerLayout from "@/Layouts/FreelancerLayout.vue";
import Chart from "chart.js/auto";

// Import icons
import documentsIcon from "../../assets/documents-icon.png";
import checklistIcon from "../../assets/checklist-icon.png";
import processIcon from "../../assets/process-icon.png";
import cancelIcon from "../../assets/cancel-icon.png";
import refreshIcon from "../../assets/refresh-icon.png";

// Import images
import traverseDestination from "../../assets/traverse-destination.png";
import dreamDestination from "../../assets/dream-destination.png";
import brandingName from "../../assets/branding-name.png";
import brandingBuild from "../../assets/branding-build.png";

// Projects data
const projects = ref([
    {
        name: "Traversre Destination",
        image: traverseDestination,
        startDate: "01/12/2024",
        endDate: "On Going",
        status: "Active",
        workType: "Web Design, Development",
    },
    {
        name: "Dream Destination",
        image: dreamDestination,
        startDate: "01/11/2024",
        endDate: "On Going",
        status: "Active",
        workType: "UI/UX Design",
    },
    {
        name: "Branding Name",
        image: brandingName,
        startDate: "01/10/2024",
        endDate: "On Going",
        status: "Active",
        workType: "UI/UX Design",
    },
    {
        name: "Dream Destination",
        image: dreamDestination,
        startDate: "01/08/2024",
        endDate: "01/10/2024",
        status: "Completed",
        workType: "UI/UX Design",
    },
    {
        name: "Branding Name",
        image: brandingName,
        startDate: "01/05/2024",
        endDate: "01/08/2024",
        status: "Completed",
        workType: "UI/UX Design",
    },
    {
        name: "Traversre Destination",
        image: traverseDestination,
        startDate: "01/04/2024",
        endDate: "01/06/2024",
        status: "Completed",
        workType: "Web Design, Development",
    },
    {
        name: "Dream Destination",
        image: dreamDestination,
        startDate: "01/03/2024",
        endDate: "01/05/2024",
        status: "Completed",
        workType: "UI/UX Design",
    },
    {
        name: "Branding Name",
        image: brandingName,
        startDate: "30/01/2024",
        endDate: "30/04/2024",
        status: "Completed",
        workType: "UI/UX Design",
    },
    {
        name: "Traversre Destination",
        image: traverseDestination,
        startDate: "10/01/2024",
        endDate: "15/03/2024",
        status: "Completed",
        workType: "Web Design, Development",
    },
    {
        name: "Branding Name",
        image: brandingName,
        startDate: "01/01/2024",
        endDate: "01/03/2024",
        status: "Completed",
        workType: "UI/UX Design",
    },
]);

const projectChart = ref(null);

onMounted(() => {
    // Initialize chart
    const ctx = document.getElementById("projectChart").getContext("2d");

    // Chart data
    const monthlyData = [
        { month: "Jan", value: 2 },
        { month: "Feb", value: 4 },
        { month: "Mar", value: 2 },
        { month: "Apr", value: 3 },
        { month: "May", value: 6 },
        { month: "June", value: 4 },
        { month: "July", value: 3 },
        { month: "Aug", value: 4 },
        { month: "Sept", value: 2 },
    ];

    // Create chart
    new Chart(ctx, {
        type: "bar",
        data: {
            labels: monthlyData.map((data) => data.month),
            datasets: [
                {
                    data: monthlyData.map((data) => data.value),
                    backgroundColor: (context) => {
                        // Highlight May with red, others with light gray
                        return context.index === 4 ? "#dc2626" : "#e5e7eb";
                    },
                    borderWidth: 0,
                    borderRadius: 4,
                    barThickness: 24,
                    maxBarThickness: 28,
                },
            ],
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: {
                    display: false,
                },
                tooltip: {
                    enabled: true,
                    callbacks: {
                        title: (tooltipItems) => {
                            return tooltipItems[0].label;
                        },
                        label: (context) => {
                            return `${context.raw} projects`;
                        },
                    },
                },
            },
            scales: {
                y: {
                    beginAtZero: true,
                    grid: {
                        color: "#f3f4f6",
                        lineWidth: 0.5,
                    },
                    ticks: {
                        display: false,
                    },
                    border: {
                        display: false,
                    },
                },
                x: {
                    grid: {
                        display: false,
                    },
                    border: {
                        display: false,
                    },
                },
            },
            layout: {
                padding: {
                    top: 20,
                },
            },
        },
    });
});
</script>
