<script setup>
import { Head, Link } from '@inertiajs/inertia-vue3';
import ApplicationLogo from '@/Components/ApplicationLogo.vue'
import DropdownLink from '@/Components/DropdownLink.vue'
import Dropdown from '@/Components/Dropdown.vue'

defineProps({
    canLogin: Boolean,
    canRegister: Boolean,
    laravelVersion: String,
    phpVersion: String,
})
</script>

<template>
    <Head title="Welcome" />

    <div class="relative flex items-top justify-center min-h-screen bg-gray-100  sm:items-center sm:pt-0">
        <div v-if="canLogin" class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
            <Link v-if="$page.props.auth.user" :href="route('dashboard')" class="text-sm text-gray-700  underline">Dashboard</Link>

            <template v-else>
                <div class="flex  align-content-center justify-center">
                    <Dropdown width="48">
                                    <template #trigger>
                                        <span class="inline-flex rounded-md">
                                            <button type="button" class=" text-sm underline inline-flex items-center bg-gray-100 px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white text-gray-700 focus:outline-none transition ease-in-out duration-150">
                                                Login
                                                <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                                </svg>
                                            </button>
                                        </span>
                                    </template>
                                    <template #content>
                                        <div class="">
                                            <Link :href="route('login')" class="text-sm text-gray-700  hover:underline">Admin</Link>
                                        </div>
                                        <div class="">
                                            <Link :href="route('login')" class="text-sm text-gray-700  hover:underline">Desk Officer</Link>
                                        </div>
                                        <div class="">
                                            <Link :href="route('login')" class="text-sm text-gray-700  hover:underline">Provincial Officer</Link>
                                        </div>
                                        <div class="">
                                            <Link :href="route('login')" class="text-sm text-gray-700  hover:underline">District Officer</Link>
                                        </div>
                                    </template>
                    </Dropdown>
                    <Link v-if="canRegister" :href="route('register')" class="ml-4 mt-1 text-sm text-gray-700  underline">Register</Link>
                </div>

            </template>
        </div>

        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
            <div class="grid grid-cols-2 divide-x place-items-center">
                <div>
                    <ApplicationLogo/>
                </div>
                <div class=" w-100" >
                    <div class="m-auto">
                        <h1 class="font-bold text-4xl" >Tradional Leaders Portal</h1>
                    </div>
                </div>
            </div>


        </div>
    </div>
</template>
