<script setup>
import GuestLayout from "@/Layouts/GuestLayout.vue";
import Hero from "@/Components/Hero.vue";
import Tools from "@/Components/Tools.vue";
import WhatCanYouSell from "@/Components/WhatCanYouSell.vue";
import MoreWaysToEarn from "@/Components/MoreWaysToEarn.vue";
import { Head } from "@inertiajs/vue3";
import Quality from "@/Components/Quality.vue";
import Community from "@/Components/Community.vue";
import CTA from "@/Components/CTA.vue";
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
            <Hero />
            <WhatCanYouSell/>
            <MoreWaysToEarn/>
            <Quality/>
            <Tools />
            <Community />
            <CTA />
        </div>
    </GuestLayout>
</template>
