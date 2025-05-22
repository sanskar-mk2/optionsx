<script setup>
import { useForm } from '@inertiajs/vue3';
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import TextInput from '@/Components/TextInput.vue';

const form = useForm({
    name: '',
    email: '',
    password: '',
    password_confirmation: '',
});

const submit = () => {
    form.post(route('register'), {
        onFinish: () => form.reset('password', 'password_confirmation'),
    });
};

const handleGoogleSignIn = () => {
    // Handle Google sign-in integration
    console.log("Google sign-in clicked");
};
</script>

<template>
    <div class="max-w-md bg-white border border-black mx-auto p-6 space-y-6">
        <h1 class="text-3xl font-bold">Create an OptionsX account</h1>

        <form @submit.prevent="submit" class="space-y-4">
            <div class="space-y-2">
                <InputLabel for="name" value="Name" />
                <TextInput
                    id="name"
                    type="text"
                    class="mt-1 block w-full"
                    v-model="form.name"
                    required
                    autofocus
                    autocomplete="name"
                    placeholder="Enter your name"
                />
                <InputError class="mt-2" :message="form.errors.name" />
            </div>

            <div class="space-y-2">
                <InputLabel for="email" value="Email" />
                <TextInput
                    id="email"
                    type="email"
                    class="mt-1 block w-full"
                    v-model="form.email"
                    required
                    autocomplete="username"
                    placeholder="Enter your email"
                />
                <InputError class="mt-2" :message="form.errors.email" />
            </div>

            <div class="space-y-2">
                <InputLabel for="password" value="Password" />
                <TextInput
                    id="password"
                    type="password"
                    class="mt-1 block w-full"
                    v-model="form.password"
                    required
                    autocomplete="new-password"
                    placeholder="Enter your password"
                />
                <InputError class="mt-2" :message="form.errors.password" />
                <p class="text-xs text-gray-500">
                    Use 8 or more character with a mix of letters, number and
                    symbols. Must not contain your name or username
                </p>
            </div>

            <div class="space-y-2">
                <InputLabel for="password_confirmation" value="Confirm Password" />
                <TextInput
                    id="password_confirmation"
                    type="password"
                    class="mt-1 block w-full"
                    v-model="form.password_confirmation"
                    required
                    autocomplete="new-password"
                    placeholder="Confirm your password"
                />
                <InputError class="mt-2" :message="form.errors.password_confirmation" />
            </div>

            <button
                type="submit"
                class="w-full py-2 px-4 bg-red-600 text-white rounded-md hover:bg-red-700 transition-colors"
                :class="{ 'opacity-25': form.processing }"
                :disabled="form.processing"
            >
                Create Account
            </button>
        </form>

        <div class="text-center">
            <p class="text-sm text-gray-600">
                Already have an OptionsX account?
                <Link
                    :href="route('login')"
                    class="text-blue-600 hover:text-blue-800"
                >
                    Sign in
                </Link>
            </p>
        </div>

        <div class="relative">
            <div class="absolute inset-0 flex items-center">
                <div class="w-full border-t border-gray-300"></div>
            </div>
            <div class="relative flex justify-center text-sm">
                <span class="px-2 bg-white text-gray-500">or</span>
            </div>
        </div>

        <button
            @click="handleGoogleSignIn"
            class="w-full flex items-center justify-center space-x-2 py-2 px-4 border rounded-md hover:bg-gray-50 transition-colors"
        >
            <svg
                xmlns="http://www.w3.org/2000/svg"
                x="0px"
                y="0px"
                class="w-6 h-6"
                viewBox="0 0 48 48"
            >
                <path
                    fill="#fbc02d"
                    d="M43.611,20.083H42V20H24v8h11.303c-1.649,4.657-6.08,8-11.303,8c-6.627,0-12-5.373-12-12	s5.373-12,12-12c3.059,0,5.842,1.154,7.961,3.039l5.657-5.657C34.046,6.053,29.268,4,24,4C12.955,4,4,12.955,4,24s8.955,20,20,20	s20-8.955,20-20C44,22.659,43.862,21.35,43.611,20.083z"
                ></path>
                <path
                    fill="#e53935"
                    d="M6.306,14.691l6.571,4.819C14.655,15.108,18.961,12,24,12c3.059,0,5.842,1.154,7.961,3.039	l5.657-5.657C34.046,6.053,29.268,4,24,4C16.318,4,9.656,8.337,6.306,14.691z"
                ></path>
                <path
                    fill="#4caf50"
                    d="M24,44c5.166,0,9.86-1.977,13.409-5.192l-6.19-5.238C29.211,35.091,26.715,36,24,36	c-5.202,0-9.619-3.317-11.283-7.946l-6.522,5.025C9.505,39.556,16.227,44,24,44z"
                ></path>
                <path
                    fill="#1565c0"
                    d="M43.611,20.083L43.595,20L42,20H24v8h11.303c-0.792,2.237-2.231,4.166-4.087,5.571	c0.001-0.001,0.002-0.001,0.003-0.002l6.19,5.238C36.971,39.205,44,34,44,24C44,22.659,43.862,21.35,43.611,20.083z"
                ></path>
            </svg>
            <span>Continue with Google</span>
        </button>

        <p class="text-xs text-gray-500 text-center">
            By continuing, you confirm you are 18 or over and agree to our
            <a href="#" class="text-blue-600 hover:text-blue-800">Privacy Policy</a>
            and
            <a href="#" class="text-blue-600 hover:text-blue-800">Terms of Use</a>
        </p>
    </div>
</template>