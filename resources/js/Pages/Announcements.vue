<script setup>
import GuestLayout from "@/Layouts/GuestLayout.vue";
import { Head } from "@inertiajs/vue3";
import AnnouncementsTop from "@/Components/AnnouncementsTop.vue";
import AnnouncementsMiddle from "@/Components/AnnouncementsMiddle.vue";
import AnnouncementsBottom from "@/Components/AnnouncementsBottom.vue";
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
            <AnnouncementsTop />
            <AnnouncementsMiddle />
            <AnnouncementsBottom />
        </div>
    </GuestLayout>
</template>
