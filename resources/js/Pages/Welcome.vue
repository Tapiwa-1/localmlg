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

                    <Link :href="route('login')" class="ml-4 mt-1 text-sm text-gray-700  underline">Login</Link>
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
