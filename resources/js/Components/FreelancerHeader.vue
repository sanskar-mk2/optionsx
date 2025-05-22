<script setup>
import { ref } from "vue";
import logo from "../../assets/optionsx-logo.png";
import searchIcon from "../../assets/search-icon.png";
import messageIcon from "../../assets/message-icon.png";
import notificationIcon from "../../assets/notification-icon.png";
import profilePic from "../../assets/profile-pic.png";
import verifiedIcon from "../../assets/red-star.png";
import locationIcon from "../../assets/ping.png";
</script>

<template>
    <header
        class="flex items-center justify-between px-4 py-2 bg-white shadow-sm"
    >
        <div class="flex items-center">
            <img :src="logo" alt="OptionsX Logo" class="h-16" />
        </div>
        <div class="flex items-center">
            <img
                :src="profilePic"
                alt="Profile"
                class="h-20 w-20 rounded-full"
            />
            <div>
                <h1>
                    John Doe
                    <img
                        :src="verifiedIcon"
                        alt="Verified"
                        class="ml-2 h-4 w-4 inline-block"
                    />
                </h1>
                <p class="flex items-center gap-2">
                    <img
                        :src="locationIcon"
                        alt="Location"
                        class="inline-block"
                    />
                    <span class="text-gray-500">China</span>
                    <span class="text-green-700 ml-2">
                        <span class="text-green-700 font-bold text-xl">•</span>
                        Available Now
                    </span>
                </p>
            </div>
        </div>
        <div class="flex items-center">
            <div class="relative mx-2 w-96">
                <input
                    type="text"
                    class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none"
                    placeholder="Search"
                />
                <button
                    class="absolute px-2 right-2 top-1/2 -translate-y-1/2 bg-red-600 text-white p-1 rounded"
                >
                    <img :src="searchIcon" alt="Search" class="h-6 w-6" />
                </button>
            </div>
            <button
                class="mx-2 px-4 py-2 border border-red-600 text-red-600 rounded-md hover:bg-red-50"
            >
                Upload Your Project
            </button>
            <div class="mx-2 relative">
                <button class="p-2">
                    <img :src="messageIcon" alt="Messages" class="h-4 w-4" />
                </button>
            </div>
            <div class="mx-2 relative">
                <button class="p-2">
                    <img
                        :src="notificationIcon"
                        alt="Notifications"
                        class="h-4 w-4"
                    />
                </button>
            </div>
            <div class="ml-2">
                <img
                    :src="profilePic"
                    alt="Profile"
                    class="h-10 w-10 rounded-full"
                />
            </div>
        </div>
    </header>
</template>
