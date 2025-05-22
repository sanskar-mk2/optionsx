<script setup>
import { ref, reactive } from "vue";
import FreelancerLayout from "@/Layouts/FreelancerLayout.vue";

// Profile data
const profileData = reactive({
    name: "Timur Singh",
    email: "timursingh@gmail.com",
    aboutMe: "I am a UI/UX Designer",
    skills: [
        "UI/UX Design",
        "Web Design",
        "Prototyping",
        "Web Development",
        "Wireframing",
        "Mobile Development",
        "Logo Design",
        "Iconography",
        "HTML/CSS",
        "Javascript",
        "Typography",
    ],
});

const showSkillInput = ref(false);
const newSkill = ref("");

// Add a new skill
const addSkill = () => {
    if (newSkill.value.trim() && profileData.skills.length < 12) {
        profileData.skills.push(newSkill.value.trim());
        newSkill.value = "";
        showSkillInput.value = false;
    }
};

// Save profile changes
const saveProfile = () => {
    // Here you would typically make an API call to save the profile data
    console.log("Saving profile:", profileData);
    // Add success notification logic here
};
</script>

<template>
    <FreelancerLayout>
        <div class="p-8 max-w-4xl flex">
            <div class="flex flex-col gap-4 bg-white p-4 rounded-lg max-w-3xl">
                <h1 class="text-2xl font-semibold mb-6">Public Profile</h1>

                <!-- Profile Picture Section -->
                <div class="flex items-center mb-8">
                    <div class="relative">
                        <img
                            src="../../assets/profile-pic.png"
                            alt="Profile Picture"
                            class="w-24 h-24 rounded-full object-cover"
                        />
                    </div>
                    <div class="ml-4 space-x-2">
                        <button
                            class="bg-red-600 text-white px-4 py-2 rounded hover:bg-red-700 transition"
                        >
                            Change Picture
                        </button>
                        <button
                            class="border border-red-600 text-red-600 px-4 py-2 rounded hover:bg-red-50 transition"
                        >
                            Delete Picture
                        </button>
                    </div>
                </div>

                <!-- Profile Form -->
                <div class="space-y-6">
                    <!-- Profile Name -->
                    <div>
                        <label
                            for="profileName"
                            class="block text-sm font-medium text-gray-700 mb-1"
                        >
                            Profile Name
                        </label>
                        <input
                            type="text"
                            id="profileName"
                            v-model="profileData.name"
                            class="w-full p-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-red-500"
                        />
                    </div>

                    <!-- Email -->
                    <div>
                        <label
                            for="email"
                            class="block text-sm font-medium text-gray-700 mb-1"
                        >
                            Email
                        </label>
                        <input
                            type="email"
                            id="email"
                            v-model="profileData.email"
                            class="w-full p-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-red-500"
                        />
                    </div>

                    <!-- About Me -->
                    <div>
                        <label
                            for="aboutMe"
                            class="block text-sm font-medium text-gray-700 mb-1"
                        >
                            About me
                        </label>
                        <textarea
                            id="aboutMe"
                            v-model="profileData.aboutMe"
                            rows="4"
                            class="w-full p-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-red-500"
                        ></textarea>
                    </div>

                    <!-- Skills Section -->
                    <div>
                        <label
                            class="block text-sm font-medium text-gray-700 mb-1"
                        >
                            Skills
                        </label>
                        <p class="text-xs text-gray-500 mb-2">
                            You can add max 12 skills
                        </p>

                        <div class="flex flex-wrap gap-2 mb-3">
                            <div
                                v-for="skill in profileData.skills"
                                :key="skill"
                                class="bg-gray-100 px-3 py-1 rounded-md text-sm flex items-center"
                            >
                                {{ skill }}
                            </div>
                            <button
                                v-if="profileData.skills.length < 12"
                                @click="showSkillInput = true"
                                class="bg-gray-100 px-3 py-1 rounded-md text-sm flex items-center"
                            >
                                +Add
                            </button>
                        </div>

                        <div
                            v-if="showSkillInput"
                            class="flex items-center mt-2"
                        >
                            <input
                                type="text"
                                v-model="newSkill"
                                placeholder="Add a skill"
                                class="p-2 border border-gray-300 rounded-l focus:outline-none focus:ring-2 focus:ring-red-500"
                            />
                            <button
                                @click="addSkill"
                                class="bg-red-600 text-white px-3 py-2 rounded-r"
                            >
                                Add
                            </button>
                        </div>
                    </div>

                    <!-- Save Button -->
                    <div class="flex justify-end">
                        <button
                            @click="saveProfile"
                            class="bg-gray-500 text-white px-6 py-2 rounded hover:bg-gray-600 transition"
                        >
                            Save
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </FreelancerLayout>
</template>
