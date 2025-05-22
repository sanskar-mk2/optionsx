<script setup>
import { ref } from "vue";
import { Link } from "@inertiajs/vue3";
</script>

<template>
    <nav class="w-full self-start">
        <!-- Top Navigation -->
        <div class="flex items-center justify-between px-6 py-4 bg-white">
            <!-- Logo -->
            <Link href="/" class="flex items-center">
                <img
                    src="../../assets/logo-white.png"
                    alt="OptionsX Logo"
                    class="h-12"
                />
            </Link>
        </div>
    </nav>
</template>
