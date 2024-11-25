<script setup>
import GuestLayout from "@/Layouts/GuestLayout.vue";
import WelcomeTop from "@/Components/WelcomeTop.vue";
import WelcomeTop2 from "@/Components/WelcomeTop2.vue";
import WelcomeMiddle from "@/Components/WelcomeMiddle.vue";
import theme from "../../assets/Theme Selection Process.png";
import WelcomeBottom2 from "@/Components/WelcomeBottom2.vue";
import WelcomeBottom from "@/Components/WelcomeBottom.vue";
import { Head } from "@inertiajs/vue3";
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
            <WelcomeTop />
            <WelcomeTop2 />
            <WelcomeMiddle />
            <img :src="theme" />
            <WelcomeBottom2 />
            <WelcomeBottom />
        </div>
    </GuestLayout>
</template>
