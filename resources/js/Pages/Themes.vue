<script setup>
import GuestLayout from "@/Layouts/GuestLayout.vue";
import ThemesContent from "@/Components/ThemesContent.vue";
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
            <ThemesContent />
        </div>
    </GuestLayout>
</template>
