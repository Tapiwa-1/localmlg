<template>
    <Head title="Dashboard" />

    <AuthenticatedLayout>
        <template #header>
            <Usersnav/>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 py-4">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-4">
                   Users
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>


<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Link } from '@inertiajs/inertia-vue3';
import Usersnav from '@/Components/Usersnav.vue';


</script>

<style>

</style>