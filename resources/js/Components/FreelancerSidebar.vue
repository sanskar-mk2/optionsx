<script setup>
import { ref } from "vue";
import dashboardIcon from "../../assets/dashboard-icon.png";
import projectsIcon from "../../assets/projects-icon.png";
import performanceIcon from "../../assets/performance-icon.png";
import earningIcon from "../../assets/earning-icon.png";
import settingIcon from "../../assets/setting-icon.png";
import communityIcon from "../../assets/community-icon.png";
import rewardsIcon from "../../assets/rewards-icon.png";
import helpIcon from "../../assets/help-icon.png";
import logoutIcon from "../../assets/logout-icon.png";
import behanceIcon from "../../assets/behance-icon.png";
import dribbbleIcon from "../../assets/dribbble-icon.png";
import linkedinIcon from "../../assets/linkedin-icon.png";
import instagramIcon from "../../assets/instagram-icon.png";
import twitterIcon from "../../assets/twitter-icon.png";
</script>

<template>
    <aside class="w-64 bg-white border-r border-gray-200 h-screen">
        <div class="flex flex-col h-full">
            <nav class="px-4 py-6">
                <ul class="space-y-4">
                    <li>
                        <router-link
                            to="/dashboard"
                            class="flex items-center py-2 px-4 text-gray-800 hover:bg-red-50 hover:text-red-600 rounded-md"
                            :class="{
                                'bg-red-50 text-red-600':
                                    activePage === 'dashboard',
                            }"
                        >
                            <img
                                :src="dashboardIcon"
                                alt="Dashboard"
                                class="h-5 w-5 mr-3 text-red-600"
                            />
                            <span class="font-medium">Dashboard</span>
                        </router-link>
                    </li>
                    <li>
                        <router-link
                            to="/projects"
                            class="flex items-center py-2 px-4 text-gray-800 hover:bg-red-50 hover:text-red-600 rounded-md"
                            :class="{
                                'bg-red-50 text-red-600':
                                    activePage === 'projects',
                            }"
                        >
                            <img
                                :src="projectsIcon"
                                alt="Projects"
                                class="h-5 w-5 mr-3 text-red-600"
                            />
                            <span class="font-medium">Projects</span>
                        </router-link>
                    </li>
                    <li>
                        <router-link
                            to="/performance"
                            class="flex items-center py-2 px-4 text-gray-800 hover:bg-red-50 hover:text-red-600 rounded-md"
                            :class="{
                                'bg-red-50 text-red-600':
                                    activePage === 'performance',
                            }"
                        >
                            <img
                                :src="performanceIcon"
                                alt="Performance"
                                class="h-5 w-5 mr-3 text-red-600"
                            />
                            <span class="font-medium">Performance</span>
                        </router-link>
                    </li>
                    <li>
                        <router-link
                            to="/earning"
                            class="flex items-center py-2 px-4 text-gray-800 hover:bg-red-50 hover:text-red-600 rounded-md"
                            :class="{
                                'bg-red-50 text-red-600':
                                    activePage === 'earning',
                            }"
                        >
                            <img
                                :src="earningIcon"
                                alt="Earning"
                                class="h-5 w-5 mr-3 text-red-600"
                            />
                            <span class="font-medium">Earning</span>
                        </router-link>
                    </li>
                    <li>
                        <router-link
                            to="/setting"
                            class="flex items-center py-2 px-4 text-gray-800 hover:bg-red-50 hover:text-red-600 rounded-md"
                            :class="{
                                'bg-red-50 text-red-600':
                                    activePage === 'setting',
                            }"
                        >
                            <img
                                :src="settingIcon"
                                alt="Setting"
                                class="h-5 w-5 mr-3 text-red-600"
                            />
                            <span class="font-medium">Setting</span>
                        </router-link>
                    </li>
                    <li>
                        <router-link
                            to="/community"
                            class="flex items-center py-2 px-4 text-gray-800 hover:bg-red-50 hover:text-red-600 rounded-md"
                            :class="{
                                'bg-red-50 text-red-600':
                                    activePage === 'community',
                            }"
                        >
                            <img
                                :src="communityIcon"
                                alt="Community"
                                class="h-5 w-5 mr-3 text-red-600"
                            />
                            <span class="font-medium">Community</span>
                        </router-link>
                    </li>
                    <li>
                        <router-link
                            to="/rewards"
                            class="flex items-center py-2 px-4 text-gray-800 hover:bg-red-50 hover:text-red-600 rounded-md"
                            :class="{
                                'bg-red-50 text-red-600':
                                    activePage === 'rewards',
                            }"
                        >
                            <img
                                :src="rewardsIcon"
                                alt="Rewards"
                                class="h-5 w-5 mr-3 text-red-600"
                            />
                            <span class="font-medium">Rewards</span>
                        </router-link>
                    </li>
                    <li>
                        <router-link
                            to="/help"
                            class="flex items-center py-2 px-4 text-gray-800 hover:bg-red-50 hover:text-red-600 rounded-md"
                            :class="{
                                'bg-red-50 text-red-600': activePage === 'help',
                            }"
                        >
                            <img
                                :src="helpIcon"
                                alt="Help"
                                class="h-5 w-5 mr-3 text-red-600"
                            />
                            <span class="font-medium">Help</span>
                        </router-link>
                    </li>
                    <li>
                        <router-link
                            to="/help"
                            class="flex items-center py-2 px-4 text-gray-800 hover:bg-red-50 hover:text-red-600 rounded-md"
                            :class="{
                                'bg-red-50 text-red-600': activePage === 'help',
                            }"
                        >
                            <img
                                :src="logoutIcon"
                                alt="Help"
                                class="h-5 w-5 mr-3 text-red-600"
                            />
                            <span class="font-medium">Log Out</span>
                        </router-link>
                    </li>
                </ul>
            </nav>

            <div class="p-4 border-t border-gray-200">
                <div class="space-y-2">
                    <h4 class="text-sm font-semibold text-red-600">
                        Profile URL
                    </h4>
                    <div
                        class="p-2 bg-gray-50 rounded text-xs text-gray-600 overflow-hidden"
                    >
                        https://www.optionsx.co/timur_singh
                    </div>

                    <h4 class="text-sm font-semibold text-red-600 mt-4">
                        Social Links
                    </h4>
                    <div class="flex flex-col space-y-2">
                        <a
                            href="#"
                            class="flex outline outline-1 outline-gray-200 items-center text-xs text-gray-600 p-1 hover:bg-gray-50 rounded"
                        >
                            <img
                                :src="behanceIcon"
                                alt="Behance"
                                class="h-4 w-4 mr-2"
                            />
                            <span>Behance</span>
                        </a>
                        <a
                            href="#"
                            class="flex outline outline-1 outline-gray-200 items-center text-xs text-gray-600 p-1 hover:bg-gray-50 rounded"
                        >
                            <img
                                :src="dribbbleIcon"
                                alt="Dribbble"
                                class="h-4 w-4 mr-2"
                            />
                            <span>Dribbble</span>
                        </a>
                        <a
                            href="#"
                            class="flex outline outline-1 outline-gray-200 items-center text-xs text-gray-600 p-1 hover:bg-gray-50 rounded"
                        >
                            <img
                                :src="linkedinIcon"
                                alt="LinkedIn"
                                class="h-4 w-4 mr-2"
                            />
                            <span>LinkedIn</span>
                        </a>
                        <a
                            href="#"
                            class="flex outline outline-1 outline-gray-200 items-center text-xs text-gray-600 p-1 hover:bg-gray-50 rounded"
                        >
                            <img
                                :src="instagramIcon"
                                alt="Instagram"
                                class="h-4 w-4 mr-2"
                            />
                            <span>Instagram</span>
                        </a>
                        <a
                            href="#"
                            class="flex outline outline-1 outline-gray-200 items-center text-xs text-gray-600 p-1 hover:bg-gray-50 rounded"
                        >
                            <img
                                :src="twitterIcon"
                                alt="Twitter"
                                class="h-4 w-4 mr-2"
                            />
                            <span>Twitter</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </aside>
</template>
