<script setup>
import NavBarBarebones from "@/Components/NavBarBarebones.vue";
import { Link } from "@inertiajs/vue3";
import SiteFooterCreator from "@/Components/SiteFooterCreator.vue";
</script>

<template>
    <div
        class="flex min-h-screen flex-col items-center bg-gray-100 pt-6 sm:justify-between sm:pt-0"
    >
        <NavBarBarebones />
        <slot />
        <SiteFooterCreator />
    </div>
</template>
