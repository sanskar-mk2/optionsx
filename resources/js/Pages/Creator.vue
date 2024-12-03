<script setup>
import GuestLayout from "@/Layouts/GuestLayout.vue";
import { Head } from "@inertiajs/vue3";
import CreatorTop from "@/Components/CreatorTop.vue";
import Ecosystem from "@/Components/Ecosystem.vue";
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
            <CreatorTop />
            <Ecosystem />
        </div>
    </GuestLayout>
</template>
