<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedTown.vue'
import { Head } from '@inertiajs/inertia-vue3';
import {defineProps} from 'vue';

defineProps({
    chiefs: Number,
    headmans: Number,
    villageheads: Number
});
</script>

<template>
    <Head title="Dashboard" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Dashboard
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class=" overflow-hidden shadow-sm sm:rounded-lg">
                    <section>
                        <div id="main" class="main-content flex-1 bg-gray-100 mt-12 md:mt-2 pb-24 md:pb-5">

                            <div class="pt-2">
                                <div class="rounded-tl-xl rounded-tr-xl bg-gradient-to-r from-gray-900 to-gray-500 p-2 shadow text-xl text-white">
                                    <h1 class="font-bold pl-2">Analytics</h1>
                                </div>
                            </div>

                            <div class="bg-white flex flex-wrap">
                                <div class="w-full md:w-1/2 xl:w-1/3 p-6">
                                    <!--Metric Card-->
                                    <div class="bg-gradient-to-b from-green-200 to-green-100 border-b-4 border-green-600 rounded-lg shadow-xl p-5">
                                        <div class="flex flex-row items-center">
                                            <div class="flex-shrink pr-4">
                                                <div class="p-5"><i class="fa fa-user fa-inverse text-gray-900"></i></div>
                                            </div>
                                            <div class="flex-1 text-right md:text-center">
                                                <h2 class="font-bold uppercase text-gray-600">Total Chiefs</h2>
                                            <p class="font-bold text-md">{{chiefs  }} <span class="text-green-500"><i class="fas fa-caret-up"></i></span></p>
                                            </div>
                                        </div>
                                    </div>
                                    <!--/Metric Card-->
                                </div>
                                 <div class="w-full md:w-1/2 xl:w-1/3 p-6">
                                    <!--Metric Card-->
                                    <div class="bg-gradient-to-b from-green-200 to-green-100 border-b-4 border-green-600 rounded-lg shadow-xl p-5">
                                        <div class="flex flex-row items-center">
                                            <div class="flex-shrink pr-4">
                                                <div class="p-5"><i class="fa fa-user fa-inverse text-gray-900"></i></div>
                                            </div>
                                            <div class="flex-1 text-right md:text-center">
                                                <h2 class="font-bold uppercase text-gray-600">Total Headman</h2>
                                            <p class="font-bold text-md">{{headmans  }} <span class="text-green-500"><i class="fas fa-caret-up"></i></span></p>
                                            </div>
                                        </div>
                                    </div>
                                    <!--/Metric Card-->
                                </div>
                                 <div class="w-full md:w-1/2 xl:w-1/3 p-6">
                                    <!--Metric Card-->
                                    <div class="bg-gradient-to-b from-green-200 to-green-100 border-b-4 border-green-600 rounded-lg shadow-xl p-5">
                                        <div class="flex flex-row items-center">
                                            <div class="flex-shrink pr-4">
                                                <div class="p-5"><i class="fa fa-user fa-inverse text-gray-900"></i></div>
                                            </div>
                                            <div class="flex-1 text-right md:text-center">
                                                <h2 class="font-bold uppercase text-gray-600">Total Villagehead</h2>
                                            <p class="font-bold text-md">{{villageheads  }} <span class="text-green-500"><i class="fas fa-caret-up"></i></span></p>
                                            </div>
                                        </div>
                                    </div>
                                    <!--/Metric Card-->
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
