<script setup>
import SignInLeft from "@/Components/SignInLeft.vue";
import SignInRight from "@/Components/SignInRight.vue";
import GuestLayoutCreator from "@/Layouts/GuestLayoutCreator.vue";
import { Head } from "@inertiajs/vue3";
</script>

<template>
    <Head title="Sign In" />

    <GuestLayoutCreator>
        <div class="flex w-full">
            <SignInLeft />
            <SignInRight />
        </div>
    </GuestLayoutCreator>
</template>
