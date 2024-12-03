<script setup>
import { ref } from "vue";
import GuestLayout from "@/Layouts/GuestLayout.vue";
import { Head } from "@inertiajs/vue3";
import StepOne from "@/Components/StepOne.vue";
import StepTwo from "@/Components/StepTwo.vue";
import StepThree from "@/Components/StepThree.vue";
import StepFour from "@/Components/StepFour.vue";
import StepFive from "@/Components/StepFive.vue";

const currentStep = ref(1);

const steps = [
    { number: 1, component: StepOne },
    { number: 2, component: StepTwo },
    { number: 3, component: StepThree },
    { number: 4, component: StepFour },
    { number: 5, component: StepFive },
];

const goToStep = (step) => {
    currentStep.value = step;
};
</script>

<template>
    <Head title="Dashboard" />

    <GuestLayout>
        <template #header>
            <h2 class="text-xl font-semibold leading-tight text-gray-800">
                Dashboard
            </h2>
        </template>
        <div class="py-12">
            <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                <!-- Steps Navigation -->
                <div class="flex justify-center space-x-2 mb-8">
                    <button
                        v-for="step in steps"
                        :key="step.number"
                        @click="goToStep(step.number)"
                        class="w-16 h-1 rounded transition-colors"
                        :class="
                            currentStep === step.number
                                ? 'bg-red-600'
                                : 'bg-gray-200 hover:bg-gray-300'
                        "
                    />
                </div>

                <!-- Current Step Content -->
                <component :is="steps[currentStep - 1].component" />
            </div>
        </div>
    </GuestLayout>
</template>
