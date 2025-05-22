<script setup>
import FreelancerHeader from "@/Components/FreelancerHeader.vue";
import FreelancerSidebar from "@/Components/FreelancerSidebar.vue";
import FreelancerFooter from "@/Components/FreelancerFooter.vue";
</script>

<template>
    <div class="flex min-h-screen flex-col">
        <FreelancerHeader />
        <div class="flex flex-1 overflow-hidden">
            <FreelancerSidebar />
            <main class="flex-1 overflow-y-auto bg-gray-50">
                <slot />
            </main>
        </div>
        <FreelancerFooter />
    </div>
</template>
