<script setup>
import { ref } from "vue";
import logoWhite from "../../assets/logo.png";
import linkedinFooterIcon from "../../assets/linkedin-footer-icon.png";
import instagramFooterIcon from "../../assets/instagram-footer-icon.png";
import facebookFooterIcon from "../../assets/facebook-footer-icon.png";
import twitterFooterIcon from "../../assets/twitter-footer-icon.png";
</script>

<template>
    <footer class="bg-black text-white py-6">
        <div class="container mx-auto px-4">
            <div class="flex md:flex-row justify-between items-center">
                <div class="mb-4 md:mb-0 flex items-center justify-center gap-4">
                    <img :src="logoWhite" alt="OptionsX Logo" class="h-10" />
                    <p class="text-xs text-gray-400 mt-2">
                        © 2024 OptionsX Ltd. Trademarks and brands are the
                        property of their respective owners.
                    </p>
                </div>
                <div class="flex space-x-8">
                    <a href="#" class="text-white hover:text-gray-300">
                        <img
                            :src="linkedinFooterIcon"
                            alt="LinkedIn"
                            class="h-6 w-6"
                        />
                    </a>
                    <a href="#" class="text-white hover:text-gray-300">
                        <img
                            :src="instagramFooterIcon"
                            alt="Instagram"
                            class="h-6 w-6"
                        />
                    </a>
                    <a href="#" class="text-white hover:text-gray-300">
                        <img
                            :src="facebookFooterIcon"
                            alt="Facebook"
                            class="h-6 w-6"
                        />
                    </a>
                    <a href="#" class="text-white hover:text-gray-300">
                        <img
                            :src="twitterFooterIcon"
                            alt="Twitter"
                            class="h-6 w-6"
                        />
                    </a>
                </div>
            </div>
        </div>
    </footer>
</template>
