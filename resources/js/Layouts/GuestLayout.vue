<script setup>
import NavigationBar from "@/Components/NavigationBar.vue";
import { Link } from "@inertiajs/vue3";
import SiteFooter from '@/Components/SiteFooter.vue';
</script>

<template>
    <div
        class="flex min-h-screen flex-col items-center bg-gray-100 pt-6 sm:justify-center sm:pt-0"
    >
        <NavigationBar />
        <slot />
        <SiteFooter />
    </div>
</template>
