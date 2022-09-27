<script setup>
    import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
    import { Head, Link } from '@inertiajs/inertia-vue3';
    defineProps({
    chiefs: Object,
    });

    </script>
    
    <template>
        <Head title="Dashboard" />
    
        <AuthenticatedLayout>
            <template #header>
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    Chief
                </h2>
                
            </template>
    
            <div class="py-12">
                
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <Link type="button" class=" ml-auto text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br   dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2" :href="route('chief.create')">Add Chief</Link>

                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                   
                <div class="overflow-x-auto relative shadow-md sm:rounded-lg">
                    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="py-3 px-6">
                                    Name
                                </th>
                                <th scope="col" class="py-3 px-6">
                                    District
                                </th>
                                <th scope="col" class="py-3 px-6">
                                    Chieftainship
                                </th>
                                <th scope="col" class="py-3 px-6">
                                    Gender
                                </th>
                                <th scope="col" class="py-3 px-6">
                                    Action
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr v-for="chief in chiefs.data" :key="chief.slug"  class="bg-white border-b">
                                <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap ">
                                    {{chief.name}}
                                </th>
                                <td class="py-4 px-6">
                                    {{chief.district}}
                                </td>
                                <td class="py-4 px-6">
                                    {{chief.chieftainship}}
                                </td>
                                <td class="py-4 px-6">
                                    {{chief.gender}}
                                </td>
                                <td class="py-4 px-6">
                                    <!-- <Link class="font-medium text-blue-600  hover:underline">View More</Link> -->
                                    <Link type="button" class="text-white bg-gradient-to-r from-cyan-400 via-cyan-500 to-cyan-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-cyan-300 dark:focus:ring-cyan-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2" :href="route('chief.show', chief.slug)">View</Link>
                                    <Link type="button" class="text-gray-900 bg-gradient-to-r from-lime-200 via-lime-400 to-lime-500 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-lime-300 dark:focus:ring-lime-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2" :href="route('chief.edit', chief.slug)">Edit</Link>
                                    <button type="button" class="text-white bg-gradient-to-r from-red-400 via-red-500 to-red-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">Delete</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                    </div>
                </div>
            </div>
        </AuthenticatedLayout>
    </template>
    