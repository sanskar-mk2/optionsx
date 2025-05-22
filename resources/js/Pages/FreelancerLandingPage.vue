<script setup>
import GuestLayout from "@/Layouts/GuestLayout.vue";
import { Head } from "@inertiajs/vue3";
import { ref } from "vue";
import { Link } from "@inertiajs/vue3";

// Import images for categories
import graphicDesignImg from "../../assets/category-graphic-design.png";
import uiUxDesignImg from "../../assets/category-ui-ux-design.png";
import webDevelopmentImg from "../../assets/category-web-development.png";
import eCommerceImg from "../../assets/category-e-commerce.png";
import socialMediaImg from "../../assets/category-social-media.png";
import locationIcon from "../../assets/ping.png";
import verifiedIcon from "../../assets/red-star.png";


// Import testimonial avatars
import yifeiChenImg from "../../assets/user1.png";
import sumanRanaImg from "../../assets/user2.png";
import sumitDasImg from "../../assets/user3.png";

// Testimonials data
const testimonials = [
    {
        id: 1,
        name: "Yifei Chen",
        location: "Seoul, South Korea",
        date: "November 2024",
        avatar: yifeiChenImg,
        rating: 5,
        text: "\"The freelancers on OptionsX are top-notch! They truly understand design principles and are great at customizing themes to suit specific needs. I had a fantastic experience collaborating with a freelancer who delivered exactly what I envisioned for my website.\""
    },
    {
        id: 2,
        name: "Suman Rana",
        location: "New Delhi, India",
        date: "November 2024",
        avatar: sumanRanaImg,
        rating: 5,
        text: "\"I've worked with several freelancers on OptionsX, and I've always been impressed by their creativity and attention to detail. They have a great sense of style and are excellent at turning ideas into polished, user-friendly themes. Definitely a great place to find design experts.\""
    },
    {
        id: 3,
        name: "Sumit Das",
        location: "Mumbai, India",
        date: "November 2024",
        avatar: sumitDasImg,
        rating: 5,
        text: "\"The freelancers at OptionsX are not only skilled but also incredibly responsive. I needed a custom theme, and the freelancer I worked with delivered it ahead of schedule, with excellent communication throughout the entire process. Highly recommend!\""
    },
    {
        id: 4,
        name: "Sumit Das",
        location: "Mumbai, India",
        date: "November 2024",
        avatar: sumitDasImg,
        rating: 5,
        text: "\"The freelancers at OptionsX are not only skilled but also incredibly responsive. I needed a custom theme, and the freelancer I worked with delivered it ahead of schedule, with excellent communication throughout the entire process. Highly recommend!\""
    }
];

// Current slide index
const currentSlide2 = ref(0);
const slidesToShow = 3; // Number of slides to show at once
const totalSlides2 = testimonials.length;

// Navigation functions
const nextSlide2 = () => {
    if (currentSlide.value < totalSlides - slidesToShow) {
        currentSlide.value++;
    } else {
        currentSlide.value = 0; // Loop back to the start
    }
};

const prevSlide2 = () => {
    if (currentSlide.value > 0) {
        currentSlide.value--;
    } else {
        currentSlide.value = totalSlides - slidesToShow; // Loop to the end
    }
};

// Popular categories
const popularCategories = [
    {
        name: "Graphic Design",
        image: graphicDesignImg,
        route: "freelancers.index",
        color: "bg-purple-500",
    },
    {
        name: "UI/UX Design",
        image: uiUxDesignImg,
        route: "freelancers.index",
        color: "bg-indigo-500",
    },
    {
        name: "Web Development",
        image: webDevelopmentImg,
        route: "freelancers.index",
        color: "bg-pink-500",
    },
    {
        name: "E-commerce",
        image: eCommerceImg,
        route: "freelancers.index",
        color: "bg-blue-500",
    },
    {
        name: "Social Media",
        image: socialMediaImg,
        route: "freelancers.index",
        color: "bg-rose-500",
    },
];

// Import feature icons
import starIcon from "../../assets/star-icon.png";
import resourcesIcon from "../../assets/resources-icon.png";
import secureIcon from "../../assets/secure-icon.png";
import noFeeIcon from "../../assets/no-fee-icon.png";

// Import feature section images
import developerImg from "../../assets/developer-workspace.jpg";
import designerImg from "../../assets/designer-workspace.jpg";

// For the carousel
const currentSlide = ref(0);
const totalSlides = 5;

const nextSlide = () => {
    currentSlide.value = (currentSlide.value + 1) % totalSlides;
};

const prevSlide = () => {
    currentSlide.value = (currentSlide.value - 1 + totalSlides) % totalSlides;
};

import portfolio1 from "../../assets/branding-name.png";
import portfolio2 from "../../assets/dream-destination.png";
import portfolio3 from "../../assets/branding-name.png";

import user1 from "../../assets/user1.png";
import user2 from "../../assets/user2.png";
import user3 from "../../assets/user3.png";
import user4 from "../../assets/user4.png";

// Featured freelancers data
const featuredFreelancers = [
    {
        id: 1,
        name: "Julia Sonia",
        location: "Italy",
        available: true,
        projectsCompleted: 5,
        portfolio: [
            "../../assets/portfolio/julia-1.jpg",
            "../../assets/portfolio/julia-2.jpg",
            "../../assets/portfolio/julia-3.jpg",
        ],
        avatar: "../../assets/freelancers/julia-sonia.jpg",
    },
    {
        id: 2,
        name: "Ramesh Singh",
        location: "Mumbai",
        available: true,
        projectsCompleted: 3,
        portfolio: [
            "../../assets/portfolio/ramesh-1.jpg",
            "../../assets/portfolio/ramesh-2.jpg",
            "../../assets/portfolio/ramesh-3.jpg",
        ],
        avatar: "../../assets/freelancers/ramesh-singh.jpg",
    },
    {
        id: 3,
        name: "Sagar Singh",
        location: "New Delhi",
        available: true,
        projectsCompleted: 8,
        portfolio: [
            "../../assets/portfolio/sagar-1.jpg",
            "../../assets/portfolio/sagar-2.jpg",
            "../../assets/portfolio/sagar-3.jpg",
        ],
        avatar: "../../assets/freelancers/sagar-singh.jpg",
    },
    {
        id: 4,
        name: "Sam Jorgh",
        location: "USA",
        available: true,
        projectsCompleted: 5,
        portfolio: [
            "../../assets/portfolio/sam-1.jpg",
            "../../assets/portfolio/sam-2.jpg",
            "../../assets/portfolio/sam-3.jpg",
        ],
        avatar: "../../assets/freelancers/sam-jorgh.jpg",
    },
    // {
    //     id: 5,
    //     name: "John Cena",
    //     location: "USA",
    //     available: true,
    //     projectsCompleted: 5,
    //     portfolio: [
    //         "../../assets/portfolio/john-1.jpg",
    //         "../../assets/portfolio/john-2.jpg",
    //         "../../assets/portfolio/john-3.jpg",
    //     ],
    //     avatar: "../../assets/freelancers/john-cena.jpg",
    // },
];
</script>

<template>
    <Head title="Dashboard" />

    <GuestLayout>
        <template #header>
            <h2 class="text-xl font-semibold leading-tight text-gray-800">
                Dashboard
            </h2>
        </template>

        <div class="w-full">
            <div>
                <!-- Hero Section -->
                <div
                    class="relative w-full bg-red-900 py-20 px-4 overflow-hidden"
                    style="background-image: url('/freelancer-hero-bg.png')"
                >
                    <!-- Hero Content -->
                    <div
                        class="max-w-4xl mx-auto text-center text-white relative z-10"
                    >
                        <h1 class="text-4xl font-bold mb-2">
                            Hire World's<br />
                            Best <span class="italic">Freelancers</span> on
                            OptionsX
                        </h1>
                        <p class="text-lg mb-8">
                            Thousands of clients are happy with the work done by
                            OptionsX freelancers.
                        </p>

                        <!-- Search Form -->
                        <div
                            class="flex flex-col sm:flex-row items-center justify-center gap-4 max-w-2xl mx-auto"
                        >
                            <div class="relative flex-grow w-full">
                                <input
                                    type="text"
                                    placeholder="Search Freelancer"
                                    class="w-full py-3 px-4 rounded-md border-0 focus:ring-2 focus:ring-red-600 text-gray-800"
                                />
                                <button
                                    class="absolute right-0 top-0 bottom-0 bg-red-600 hover:bg-red-700 text-white px-6 rounded-r-md flex items-center justify-center transition-colors"
                                >
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        class="h-5 w-5 mr-1"
                                        fill="none"
                                        viewBox="0 0 24 24"
                                        stroke="currentColor"
                                    >
                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            stroke-width="2"
                                            d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"
                                        />
                                    </svg>
                                    Search
                                </button>
                            </div>
                            <Link
                                href="/browse-freelancers"
                                class="bg-red-600 hover:bg-red-700 text-white font-medium px-6 py-3 rounded-md whitespace-nowrap transition-colors"
                            >
                                Browse Freelancer
                            </Link>
                        </div>
                    </div>

                    <!-- Overlay to darken the background image slightly -->
                    <div
                        class="absolute inset-0 bg-red-900 bg-opacity-60"
                    ></div>
                </div>

                <!-- Popular Categories Section -->
                <div class="py-16 px-4 bg-gray-50">
                    <div class="max-w-6xl mx-auto">
                        <div class="mb-12">
                            <h2 class="text-3xl font-bold">
                                Popular
                                <span class="text-red-600">Categories</span>
                            </h2>
                        </div>
                        <div
                            class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6"
                        >
                            <!-- Category Cards -->
                            <Link
                                v-for="(category, index) in popularCategories"
                                :key="category.name"
                                :href="route(category.route)"
                                class="block group"
                            >
                                <div class="flex flex-col h-full">
                                    <!-- Hardcoded colors in template for each category -->
                                    <div
                                        :class="[
                                            index === 0
                                                ? 'bg-purple-500'
                                                : index === 1
                                                ? 'bg-indigo-500'
                                                : index === 2
                                                ? 'bg-pink-500'
                                                : index === 3
                                                ? 'bg-blue-500'
                                                : 'bg-rose-500',
                                            'rounded-md p-4',
                                        ]"
                                    >
                                        <h3
                                            class="text-white text-lg font-medium mb-3"
                                        >
                                            {{ category.name }}
                                        </h3>
                                        <div
                                            class="h-40 flex items-center justify-center overflow-hidden rounded"
                                        >
                                            <img
                                                :src="category.image"
                                                :alt="category.name"
                                                class="w-full h-full object-cover transition-transform group-hover:scale-105"
                                            />
                                        </div>
                                    </div>
                                </div>
                            </Link>
                        </div>
                        <div class="text-center mt-12">
                            <Link
                                href="/all-categories"
                                class="inline-block border border-red-600 text-red-600 hover:bg-red-600 hover:text-white font-medium px-6 py-2 rounded-md transition-colors"
                            >
                                Browse All Categories
                            </Link>
                        </div>
                    </div>
                </div>
            </div>

            <div>
                <!-- Why hire freelancers section -->
                <section class="py-16 px-4 max-w-7xl mx-auto">
                    <div
                        class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center"
                    >
                        <!-- Left side content -->
                        <div>
                            <h2 class="text-3xl font-bold mb-4">
                                Why hire freelancers on
                                <span class="text-red-600">OptionsX</span>?
                            </h2>
                            <p class="text-gray-700 mb-8">
                                OptionsX makes it easy and safe to hire
                                freelancers.
                            </p>

                            <!-- Features list -->
                            <div class="space-y-8">
                                <!-- Feature 1 -->
                                <div class="flex items-start">
                                    <div class="flex-shrink-0 mr-4">
                                        <img
                                            :src="starIcon"
                                            alt="Star"
                                            class="w-8 h-8 text-red-600"
                                        />
                                    </div>
                                    <div>
                                        <h3 class="font-semibold">
                                            Having access to the top creators
                                            worldwide
                                        </h3>
                                        <p class="text-gray-600">
                                            Get matched from a pool of over 1
                                            million qualified freelancers
                                        </p>
                                    </div>
                                </div>

                                <!-- Feature 2 -->
                                <div class="flex items-start">
                                    <div class="flex-shrink-0 mr-4">
                                        <img
                                            :src="resourcesIcon"
                                            alt="Resources"
                                            class="w-8 h-8 text-red-600"
                                        />
                                    </div>
                                    <div>
                                        <h3 class="font-semibold">
                                            The necessary resources in a single
                                            place
                                        </h3>
                                        <p class="text-gray-600">
                                            Start conversations, share files,
                                            and join video calls with candidates
                                        </p>
                                    </div>
                                </div>

                                <!-- Feature 3 -->
                                <div class="flex items-start">
                                    <div class="flex-shrink-0 mr-4">
                                        <img
                                            :src="secureIcon"
                                            alt="Secure"
                                            class="w-8 h-8 text-red-600"
                                        />
                                    </div>
                                    <div>
                                        <h3 class="font-semibold">
                                            Secure payments
                                        </h3>
                                        <p class="text-gray-600">
                                            Use a debit or credit card to make a
                                            quick and safe payment on OptionsX
                                        </p>
                                    </div>
                                </div>

                                <!-- Feature 4 -->
                                <div class="flex items-start">
                                    <div class="flex-shrink-0 mr-4">
                                        <img
                                            :src="noFeeIcon"
                                            alt="No Fee"
                                            class="w-8 h-8 text-red-600"
                                        />
                                    </div>
                                    <div>
                                        <h3 class="font-semibold">
                                            No platform fee
                                        </h3>
                                        <p class="text-gray-600">
                                            OptionsX platform charge no extra
                                            fee
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <!-- Browse button -->
                            <div class="mt-8">
                                <Link
                                    href="/browse-freelancers"
                                    class="inline-block bg-red-600 hover:bg-red-700 text-white font-medium px-6 py-3 rounded-md transition-colors"
                                >
                                    Browse Freelancer
                                </Link>
                            </div>
                        </div>

                        <!-- Right side images -->
                        <div class="relative">
                            <div class="flex">
                                <img
                                    :src="developerImg"
                                    alt="Developer workspace"
                                    class="h-full rounded-md"
                                />
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Featured Freelancers section -->
                <section class="py-16 px-4 max-w-7xl mx-auto">
                    <h2 class="text-3xl font-bold mb-2">
                        Our featured
                        <span class="text-red-600">freelancers</span>
                    </h2>
                    <p class="text-gray-700 mb-12">
                        Hire top freelancers hand-selected by the OptionsX team.
                    </p>

                    <!-- Freelancer carousel -->
                    <div class="relative">
                        <!-- Carousel content -->
                        <div class="overflow-hidden">
                            <div
                                class="flex transition-transform duration-300"
                                :style="{
                                    transform: `translateX(-${
                                        currentSlide * 20
                                    }%)`,
                                }"
                            >
                                <!-- Freelancer cards -->
                                <div
                                    v-for="(
                                        freelancer, idex
                                    ) in featuredFreelancers"
                                    :key="freelancer.id"
                                    class="w-full md:w-1/2 lg:w-1/4 flex-shrink-0 px-2"
                                >
                                    <div
                                        class="bg-white border rounded-md overflow-hidden shadow-sm"
                                    >
                                        <!-- Portfolio images -->
                                        <div class="flex">
                                            <div
                                                v-for="(
                                                    image, index
                                                ) in freelancer.portfolio"
                                                :key="index"
                                                class="h-24 w-24"
                                            >
                                                <img
                                                    :src="
                                                        index === 0
                                                            ? portfolio1
                                                            : index === 1
                                                            ? portfolio2
                                                            : portfolio3
                                                    "
                                                    :alt="`${
                                                        freelancer.name
                                                    } portfolio ${index + 1}`"
                                                    class="object-fill"
                                                />
                                            </div>
                                        </div>

                                        <!-- Freelancer info -->
                                        <div class="p-4 text-center">
                                            <!-- Avatar and name -->
                                            <div
                                                class="flex flex-col items-center -mt-20"
                                            >
                                                <div
                                                    class="w-16 h-16 rounded-full border-4 border-white overflow-hidden mb-2"
                                                >
                                                    <img
                                                        :src="
                                                            idex % 4 === 0
                                                                ? user1
                                                                : idex % 4 === 1
                                                                ? user2
                                                                : idex % 4 === 2
                                                                ? user3
                                                                : user4
                                                        "
                                                        :alt="freelancer.name"
                                                        class="w-full h-full object-cover"
                                                    />
                                                </div>
                                                <h3 class="font-medium text-lg">
                                                    {{ freelancer.name }}
                                                </h3>
                                            </div>

                                            <!-- Location and availability -->
                                            <div
                                                class="flex justify-center items-center text-sm text-gray-500 mt-2 mb-2"
                                            >
                                                <p
                                                    class="flex items-center gap-2"
                                                >
                                                    <img
                                                        :src="locationIcon"
                                                        alt="Location"
                                                        class="inline-block"
                                                    />
                                                    <span
                                                        class="text-gray-500"
                                                        >{{
                                                            freelancer.location
                                                        }}</span
                                                    >
                                                    <span
                                                        class="text-green-700 ml-2"
                                                    >
                                                        <span
                                                            class="text-green-700 font-bold text-xl"
                                                            >•</span
                                                        >
                                                        Available Now
                                                    </span>
                                                </p>
                                            </div>

                                            <!-- Stats -->
                                            <div
                                                class="flex justify-center space-x-4 mt-3"
                                            >
                                                <div class="flex items-center">
                                                    <img
                                                        :src="verifiedIcon"
                                                        alt="Verified"
                                                        class="mr-2 h-4 w-4 inline-block"
                                                    />
                                                    <span
                                                        class="text-xs text-red-600"
                                                        >Featured</span
                                                    >
                                                </div>
                                                <div class="flex items-center">
                                                    <span
                                                        class="text-xs p-1 text-red-600 border border-1 border-gray-200 rounded-md"
                                                        >{{
                                                            freelancer.projectsCompleted
                                                        }}
                                                        Project Completed</span
                                                    >
                                                </div>
                                            </div>

                                            <!-- Action buttons -->
                                            <div class="flex mt-4 space-x-2">
                                                <Link
                                                    :href="`/freelancers/${freelancer.id}`"
                                                    class="flex-1 py-2 border border-red-600 text-red-600 rounded-md text-sm font-medium hover:bg-red-50 transition-colors text-center"
                                                >
                                                    View Profile
                                                </Link>
                                                <Link
                                                    :href="`/message/${freelancer.id}`"
                                                    class="flex-1 py-2 bg-red-600 text-white rounded-md text-sm font-medium hover:bg-red-700 transition-colors text-center"
                                                >
                                                    Send Message
                                                </Link>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Carousel controls -->
                        <button
                            @click="prevSlide"
                            class="absolute -left-4 top-1/2 transform -translate-y-1/2 w-10 h-10 bg-white rounded-full shadow-md flex items-center justify-center hover:bg-gray-100 z-10"
                            aria-label="Previous slide"
                        >
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                class="h-6 w-6 text-red-600"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke="currentColor"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M15 19l-7-7 7-7"
                                />
                            </svg>
                        </button>
                        <button
                            @click="nextSlide"
                            class="absolute -right-4 top-1/2 transform -translate-y-1/2 w-10 h-10 bg-white rounded-full shadow-md flex items-center justify-center hover:bg-gray-100 z-10"
                            aria-label="Next slide"
                        >
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                class="h-6 w-6 text-red-600"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke="currentColor"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M9 5l7 7-7 7"
                                />
                            </svg>
                        </button>
                    </div>

                    <!-- Browse more button -->
                    <div class="mt-10 text-center">
                        <Link
                            href="/browse-freelancers"
                            class="inline-block bg-red-600 hover:bg-red-700 text-white font-medium px-6 py-3 rounded-md transition-colors"
                        >
                            Browse Freelancer
                        </Link>
                    </div>
                </section>
            </div>

            <section class="py-16 px-4 bg-gray-50">
                <div class="max-w-7xl mx-auto">
                    <div class="flex justify-between items-center mb-8">
                        <h2 class="text-3xl font-bold">
                            Success stories of
                            <span class="text-red-600">our clients.</span>
                        </h2>

                        <!-- Navigation arrows -->
                        <div class="flex space-x-2">
                            <button
                                @click="prevSlide"
                                class="w-10 h-10 flex items-center justify-center rounded-full border border-red-600 text-red-600 hover:bg-red-600 hover:text-white transition-colors"
                                aria-label="Previous testimonial"
                            >
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    class="h-5 w-5"
                                    fill="none"
                                    viewBox="0 0 24 24"
                                    stroke="currentColor"
                                >
                                    <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M15 19l-7-7 7-7"
                                    />
                                </svg>
                            </button>
                            <button
                                @click="nextSlide"
                                class="w-10 h-10 flex items-center justify-center rounded-full bg-red-600 text-white hover:bg-red-700 transition-colors"
                                aria-label="Next testimonial"
                            >
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    class="h-5 w-5"
                                    fill="none"
                                    viewBox="0 0 24 24"
                                    stroke="currentColor"
                                >
                                    <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M9 5l7 7-7 7"
                                    />
                                </svg>
                            </button>
                        </div>
                    </div>

                    <p class="text-gray-700 mb-10">
                        Discover for yourself why 95% plus of our clients
                        suggest their OptionsX freelancer.
                    </p>

                    <!-- Testimonial slider -->
                    <div class="relative overflow-hidden">
                        <div
                            class="flex transition-transform duration-300 gap-6"
                            :style="{
                                transform: `translateX(-${
                                    currentSlide * 33.33
                                }%)`,
                            }"
                        >
                            <!-- Testimonial cards -->
                            <div
                                v-for="testimonial in testimonials"
                                :key="testimonial.id"
                                class="w-full md:w-1/3 flex-shrink-0"
                            >
                                <div
                                    class="bg-white p-6 rounded-lg shadow-sm h-full flex flex-col"
                                >
                                    <!-- Client info -->
                                    <div class="flex items-center mb-4">
                                        <img
                                            :src="testimonial.avatar"
                                            :alt="testimonial.name"
                                            class="w-12 h-12 rounded-full object-cover mr-4"
                                        />
                                        <div>
                                            <h3 class="font-medium">
                                                {{ testimonial.name }}
                                            </h3>
                                            <p class="text-sm text-gray-600">
                                                {{ testimonial.location }} |
                                                {{ testimonial.date }}
                                            </p>
                                        </div>
                                    </div>

                                    <!-- Rating stars -->
                                    <div class="flex items-center mb-4">
                                        <div
                                            v-for="i in 5"
                                            :key="i"
                                            class="text-yellow-400"
                                        >
                                            <svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                class="h-5 w-5"
                                                viewBox="0 0 20 20"
                                                fill="currentColor"
                                            >
                                                <path
                                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                                                />
                                            </svg>
                                        </div>
                                    </div>

                                    <!-- Testimonial text -->
                                    <p class="text-gray-700 flex-grow">
                                        {{ testimonial.text }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </GuestLayout>
</template>
