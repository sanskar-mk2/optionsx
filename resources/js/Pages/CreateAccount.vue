<script setup>
import CreateAccountLeft from "@/Components/CreateAccountLeft.vue";
import CreateAccountRight from "@/Components/CreateAccountRight.vue";
import GuestLayoutCreator from "@/Layouts/GuestLayoutCreator.vue";
import { Head } from "@inertiajs/vue3";

</script>

<template>
    <Head title="Create Account" />

    <GuestLayoutCreator>
        <div class="flex w-full">
            <CreateAccountLeft />
            <CreateAccountRight />
        </div>
    </GuestLayoutCreator>
</template>
