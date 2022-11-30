<template>
    <Head title="Dashboard" />

    <AuthenticatedLayout>
        <template #header>
          <Usernav/>
        </template>


        <div class="py-12">

                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class=" grid grid-cols-2 gap-20">
                        <div>
                            <Link type="button" class="ml-auto text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br  font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2" :href="route('provincial.create')">Add provincial Officer</Link>
                        </div>
                        <div>

                                <form class="flex items-center">
                                    <label for="simple-search" class="sr-only">Search</label>
                                    <div class="relative w-full">
                                        <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                                            <svg aria-hidden="true" class="w-5 h-5 text-gray-500 " fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path></svg>
                                        </div>
                                        <input type="text" v-model="search" id="simple-search" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5" placeholder="Search" required="">
                                    </div>
                                </form>

                        </div>
                    </div>

                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">

                <div class="overflow-x-auto relative shadow-md sm:rounded-lg">
                    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="py-3 px-6">
                                    Name
                                </th>
                                <th scope="col" class="py-3 px-6">
                                    email
                                </th>
                                <th scope="col" class="py-3 px-6">
                                    Provice
                                </th>

                                <th scope="col" class="py-3 px-6">
                                    Action
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr v-for="provincialOfficer in provincialOfficers.data" :key="provincialOfficer.slug"  class="bg-white border-b">
                                <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap ">
                                    {{provincialOfficer.name}}
                                </th>
                                <td class="py-4 px-6">
                                    {{provincialOfficer.email}}
                                </td>
                                <td class="py-4 px-6">
                                    {{provincialOfficer.province}}
                                </td>
                                <td class="py-4 px-6">
                                    <!-- <Link type="button" class="text-gray-900 bg-gradient-to-r from-lime-200 via-lime-400 to-lime-500 hover:bg-gradient-to-br  font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2" :href="route('provincialOfficer.edit', provincialOfficer.slug)">Edit</Link> -->
                                    <!-- <Link type="button" class="text-white bg-gradient-to-r from-red-400 via-red-500 to-red-600 hover:bg-gradient-to-br font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2" method="delete" as="button" ae :href="route('provincialOfficer.destroy', provincialOfficer.slug)" >Delete</Link> -->
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                    </div>
                    <div class="m-2 p-2">
                    <Pagination :links="provincialOfficers.links"/>

                </div>
                </div>
            </div>
    </AuthenticatedLayout>
</template>


<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Link } from '@inertiajs/inertia-vue3';
import Usernav from '@/Components/Usersnav.vue';
import Pagination from '@/Components/Pagination.vue';
import { Inertia } from '@inertiajs/inertia';
import {ref, watch, defineProps} from 'vue';
const props = defineProps({
    provincialOfficers: Object,
    filters: Object
});
let search = ref(props.filters.search);


watch (search, value =>{
    Inertia.get('/user/provincial', {search:value},{
    preserveState: true,
    replace: true
    });
})

</script>

<style>

</style>
