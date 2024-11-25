<script setup>
import GuestLayout from '@/Layouts/GuestLayout.vue';
import { Head } from '@inertiajs/vue3';
import CartTop from '@/Components/CartTop.vue';
import CartBottom from '@/Components/CartBottom.vue';
</script>

<template>
    <Head title="Dashboard" />

    <GuestLayout>
        <template #header>
            <h2
                class="text-xl font-semibold leading-tight text-gray-800"
            >
                Dashboard
            </h2>
        </template>

        <div class="py-12">
            <CartTop />
            <CartBottom />
        </div>
    </GuestLayout>
</template>
