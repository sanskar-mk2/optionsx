<script setup>
import { ref, onMounted } from "vue";
import FreelancerLayout from "@/Layouts/FreelancerLayout.vue";
import Chart from "chart.js/auto";

// Chart data and options
const mountChart = () => {
    const ctx = document.getElementById("earningChart").getContext("2d");

    // Sample monthly data for 2024
    const monthlyData = [
        100, 320, 480, 180, 280, 956, 280, 220, 150, 380, 240, 120,
    ];

    new Chart(ctx, {
        type: "bar",
        data: {
            labels: [
                "Jan",
                "Feb",
                "Mar",
                "Apr",
                "May",
                "Jun",
                "Jul",
                "Aug",
                "Sep",
                "Oct",
                "Nov",
                "Dec",
            ],
            datasets: [
                {
                    label: "Income",
                    data: monthlyData,
                    backgroundColor: (context) => {
                        // Highlight June with red, others with gray
                        return context.index === 5 ? "#ef4444" : "#e5e7eb";
                    },
                    borderWidth: 0,
                    borderRadius: 2,
                    barThickness: 12,
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
                    callbacks: {
                        title: (tooltipItems) => {
                            return tooltipItems[0].label;
                        },
                        label: (context) => {
                            return `£ ${context.raw}.00`;
                        },
                    },
                },
            },
            scales: {
                y: {
                    beginAtZero: true,
                    display: false,
                },
                x: {
                    grid: {
                        display: false,
                    },
                },
            },
        },
    });
};

onMounted(() => {
    mountChart();
});
</script>

<template>
    <FreelancerLayout>
        <div class="p-8">
            <!-- Earnings Summary Cards -->
            <div
                class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-5 mb-8"
            >
                <!-- Total Earning -->
                <div class="bg-green-200 p-6 rounded-md shadow-sm">
                    <div class="text-sm text-gray-600">Total Earning</div>
                    <div class="text-3xl font-bold mt-1">£ 10,000</div>
                </div>

                <!-- Projects Earning -->
                <div class="bg-blue-200 p-6 rounded-md shadow-sm">
                    <div class="text-sm text-gray-600">Projects Earning</div>
                    <div class="text-3xl font-bold mt-1">£ 9,900</div>
                </div>

                <!-- Rewards Earning -->
                <div class="bg-yellow-200 p-6 rounded-md shadow-sm">
                    <div class="text-sm text-gray-600">Rewards Earning</div>
                    <div class="text-3xl font-bold mt-1">£ 100</div>
                </div>

                <!-- Total Withdraw -->
                <div class="bg-red-200 p-6 rounded-md shadow-sm">
                    <div class="text-sm text-gray-600">Total Withdraw</div>
                    <div class="text-3xl font-bold mt-1">£ 8,000</div>
                </div>

                <!-- Total Balance -->
                <div class="bg-purple-200 p-6 rounded-md shadow-sm">
                    <div class="text-sm text-gray-600">Total Balance</div>
                    <div class="text-3xl font-bold mt-1">£ 2,000</div>
                </div>
            </div>
            <div class="flex gap-4 w-full">
                <!-- Earning History & Payment History Section -->
                <div class="flex flex-col basis-3/5 gap-6">
                    <!-- Earning History Graph -->
                    <div class="bg-white p-6 rounded-md shadow-sm">
                        <div class="flex justify-between items-start mb-4">
                            <div>
                                <h2 class="text-xl font-semibold">
                                    Earning History
                                </h2>
                                <div class="text-3xl font-bold mt-1">
                                    £5,000.00
                                </div>
                            </div>
                            <div class="flex items-center space-x-2">
                                <div
                                    class="flex items-center text-sm text-gray-600"
                                >
                                    <div
                                        class="w-3 h-3 rounded-full bg-red-500 mr-1"
                                    ></div>
                                    <span>Income</span>
                                </div>
                                <select
                                    class="border rounded-md px-6 py-0 text-sm bg-blue-50"
                                >
                                    <option value="2024">2024</option>
                                </select>
                            </div>
                        </div>

                        <!-- Chart.js Container -->
                        <div class="relative h-48 mt-8">
                            <canvas id="earningChart" height="140"></canvas>
                        </div>
                    </div>

                    <!-- Withdraw History Section -->
                    <div class="bg-white p-6 rounded-md shadow-sm">
                        <h2 class="text-xl font-semibold mb-6">
                            Withdraw History
                        </h2>

                        <table class="w-full text-left">
                            <thead>
                                <tr class="text-gray-500 text-sm">
                                    <th class="pb-4 font-normal">Amount</th>
                                    <th class="pb-4 font-normal">Withdraw Date</th>
                                    <th class="pb-4 font-normal">Method</th>
                                    <th class="pb-4 font-normal">Status</th>
                                    <th class="pb-4 font-normal">Reference Number</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="border-t border-gray-100">
                                    <td class="py-4 font-semibold">£ 512.00</td>
                                    <td class="py-4">Dec 22, 2024</td>
                                    <td class="py-4">
                                        <div class="flex items-center">
                                            <img
                                                src="../../assets/paypal.png"
                                                alt="PayPal"
                                                class="h-4 mr-1"
                                            />
                                        </div>
                                    </td>
                                    <td class="py-4">
                                        <span class="text-red-500 bg-red-50 px-3 py-1 rounded-md">Processing</span>
                                    </td>
                                    <td class="py-4">
                                        <span class="border border-gray-200 rounded px-2 py-1 text-gray-600">110022002200220</span>
                                    </td>
                                </tr>
                                <tr class="border-t border-gray-100">
                                    <td class="py-4 font-semibold">£ 869.00</td>
                                    <td class="py-4">Sep 22, 2024</td>
                                    <td class="py-4">
                                        <div class="flex items-center">
                                            <img
                                                src="../../assets/paypal.png"
                                                alt="PayPal"
                                                class="h-4 mr-1"
                                            />
                                        </div>
                                    </td>
                                    <td class="py-4">
                                        <span class="text-green-500 bg-green-50 px-3 py-1 rounded-md">Done</span>
                                    </td>
                                    <td class="py-4">
                                        <span class="border border-gray-200 rounded px-2 py-1 text-gray-600">110022002200230</span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                        <div class="text-center mt-6">
                            <a href="#" class="text-gray-500 text-sm">More...</a>
                        </div>
                    </div>
                </div>
                <!-- Payment History -->
                <div class="bg-white basis-2/5 p-6 rounded-md shadow-sm">
                    <h2 class="text-xl font-semibold mb-2">Payment History</h2>
                    <div class="text-xs text-gray-500 mb-6">
                        Below is showing all transaction history.
                    </div>

                    <!-- Payment history items -->
                    <div class="space-y-4">
                        <!-- Payment 1 -->
                        <div class="border border-gray-100 rounded-lg p-4">
                            <div class="flex items-center">
                                <img
                                    src="../../assets/user1.png"
                                    alt="Jane Cooper"
                                    class="w-10 h-10 rounded-full mr-3"
                                />
                                <div class="flex-1">
                                    <div class="font-semibold">Jane Cooper</div>
                                    <div class="text-xs text-gray-500">jane@gmail.com</div>
                                </div>
                                <div class="text-green-500 text-sm bg-green-50 px-3 py-0.5 rounded">Success</div>
                            </div>
                            <div class="flex justify-between text-sm mt-3">
                                <div>
                                    <div class="text-gray-500">Date</div>
                                    <div class="font-medium">Oct 22, 2024</div>
                                </div>
                                <div>
                                    <div class="text-gray-500">Method</div>
                                    <div>
                                        <img
                                            src="../../assets/paypal.png"
                                            alt="PayPal"
                                            class="h-5"
                                        />
                                    </div>
                                </div>
                                <div>
                                    <div class="text-gray-500">Amount</div>
                                    <div class="font-semibold">£ 512.00</div>
                                </div>
                            </div>
                        </div>

                        <!-- Payment 2 -->
                        <div class="border border-gray-100 rounded-lg p-4">
                            <div class="flex items-center">
                                <img
                                    src="../../assets/user2.png"
                                    alt="Janella Fortogi"
                                    class="w-10 h-10 rounded-full mr-3"
                                />
                                <div class="flex-1">
                                    <div class="font-semibold">Janella Fortogi</div>
                                    <div class="text-xs text-gray-500">janella@gmail.com</div>
                                </div>
                                <div class="text-red-500 text-sm bg-red-50 px-3 py-0.5 rounded">Canceled</div>
                            </div>
                            <div class="flex justify-between text-sm mt-3">
                                <div>
                                    <div class="text-gray-500">Date</div>
                                    <div class="font-medium">Sep 22, 2024</div>
                                </div>
                                <div>
                                    <div class="text-gray-500">Method</div>
                                    <div>
                                        <img
                                            src="../../assets/paypal.png"
                                            alt="PayPal"
                                            class="h-5"
                                        />
                                    </div>
                                </div>
                                <div>
                                    <div class="text-gray-500">Amount</div>
                                    <div class="font-semibold">£ 512.00</div>
                                </div>
                            </div>
                        </div>

                        <!-- Payment 3 -->
                        <div class="border border-gray-100 rounded-lg p-4">
                            <div class="flex items-center">
                                <img
                                    src="../../assets/user3.png"
                                    alt="Sam John"
                                    class="w-10 h-10 rounded-full mr-3"
                                />
                                <div class="flex-1">
                                    <div class="font-semibold">Sam John</div>
                                    <div class="text-xs text-gray-500">sam@gmail.com</div>
                                </div>
                                <div class="text-green-500 text-sm bg-green-50 px-3 py-0.5 rounded">Success</div>
                            </div>
                            <div class="flex justify-between text-sm mt-3">
                                <div>
                                    <div class="text-gray-500">Date</div>
                                    <div class="font-medium">Aug 22, 2024</div>
                                </div>
                                <div>
                                    <div class="text-gray-500">Method</div>
                                    <div>
                                        <img
                                            src="../../assets/paypal.png"
                                            alt="PayPal"
                                            class="h-5"
                                        />
                                    </div>
                                </div>
                                <div>
                                    <div class="text-gray-500">Amount</div>
                                    <div class="font-semibold">£ 512.00</div>
                                </div>
                            </div>
                        </div>

                        <!-- Payment 4 -->
                        <div class="border border-gray-100 rounded-lg p-4">
                            <div class="flex items-center">
                                <img
                                    src="../../assets/user4.png"
                                    alt="Ronak Singh"
                                    class="w-10 h-10 rounded-full mr-3"
                                />
                                <div class="flex-1">
                                    <div class="font-semibold">Ronak Singh</div>
                                    <div class="text-xs text-gray-500">singh@gmail.com</div>
                                </div>
                                <div class="text-green-500 text-sm bg-green-50 px-3 py-0.5 rounded">Success</div>
                            </div>
                            <div class="flex justify-between text-sm mt-3">
                                <div>
                                    <div class="text-gray-500">Date</div>
                                    <div class="font-medium">Jun 22, 2024</div>
                                </div>
                                <div>
                                    <div class="text-gray-500">Method</div>
                                    <div>
                                        <img
                                            src="../../assets/paypal.png"
                                            alt="PayPal"
                                            class="h-5"
                                        />
                                    </div>
                                </div>
                                <div>
                                    <div class="text-gray-500">Amount</div>
                                    <div class="font-semibold">£ 512.00</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="text-center mt-6">
                        <a href="#" class="text-gray-500 text-sm">More...</a>
                    </div>
                </div>
            </div>
        </div>
    </FreelancerLayout>
</template>
