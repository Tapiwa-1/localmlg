<script setup>
    import AuthenticatedLayout from '@/Layouts/AuthenticatedDistrict.vue';
    import { Head, Link } from '@inertiajs/inertia-vue3';
    defineProps({
    villagehead: Object,
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
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">

                        <div class="overflow-x-auto relative">
                            <table class="w-full text-sm text-left text-gray-500 ">
                                <thead class="text-xs text-gray-700 uppercase bg-gray-50 py-5">
                                    <tr class="">
                                        <th scope="col" class="py-3 px-6">
                                            Incumbent
                                        </th>
                                        <th scope="col" class="py-3 px-6">
                                           {{villagehead.incumbent}}
                                        </th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="bg-white border-b  ">
                                        <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap ">
                                            District
                                        </th>
                                        <td class="py-4 px-6">
                                           {{villagehead.district}}
                                        </td>

                                    </tr>
                                    <tr class="bg-white border-b ">
                                        <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap ">
                                            Chieftainship
                                        </th>
                                        <td class="py-4 px-6">
                                           {{villagehead.chieftainship}}
                                        </td>

                                    </tr>
                                    <tr class="bg-white border-b ">
                                        <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap ">
                                            Mutupo
                                        </th>
                                        <td class="py-4 px-6">
                                           {{villagehead.mutupo}}
                                        </td>

                                    </tr>
                                    <tr class="bg-white border-b ">
                                        <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap ">
                                            Incumbent
                                        </th>
                                        <td class="py-4 px-6">
                                           {{villagehead.incumbent}}
                                        </td>

                                    </tr>
                                    <tr class="bg-white border-b ">
                                        <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap ">
                                            Id Number
                                        </th>
                                        <td class="py-4 px-6">
                                           {{villagehead.idnumber}}
                                        </td>

                                    </tr>
                                    <tr class="bg-white border-b ">
                                        <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap ">
                                            EC Number
                                        </th>
                                        <td class="py-4 px-6">
                                           {{villagehead.ecnumber}}
                                        </td>

                                    </tr>
                                    <tr class="bg-white border-b ">
                                        <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap ">
                                            gender
                                        </th>
                                        <td class="py-4 px-6">
                                           {{villagehead.gender}}
                                        </td>

                                    </tr>
                                    <tr class="bg-white border-b ">
                                        <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap ">
                                            Date of birth
                                        </th>
                                        <td class="py-4 px-6">
                                           {{villagehead.dateofbirth}}
                                        </td>

                                    </tr>
                                    <tr class="bg-white border-b ">
                                        <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap ">
                                            Date of appointment
                                        </th>
                                        <td class="py-4 px-6">
                                           {{villagehead.dateofappointment}}
                                        </td>

                                    </tr>
                                    <tr class="bg-white border-b ">
                                        <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap ">
                                            Number of Household
                                        </th>
                                        <td class="py-4 px-6">
                                           {{villagehead.numberofhousehold}}
                                        </td>

                                    </tr>
                                    <tr class="bg-white border-b ">
                                        <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap ">
                                            Contact Number
                                        </th>
                                        <td class="py-4 px-6">
                                           {{villagehead.contactnumber}}
                                        </td>

                                    </tr>

                                    <tr class="bg-white border-b ">
                                        <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap ">
                                            Date of death or removal
                                        </th>
                                        <td class="py-4 px-6">
                                           {{villagehead.dateofdeathorremoval}}
                                        </td>

                                    </tr>

                                    <tr class="bg-white border-b ">
                                        <th scope="row" class="py-4 px-6 ">
                                            <button type="button" class="text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">Edit</button>                                        </th>
                                        <td class="py-4 px-6">
                                            <button type="button" class="text-white bg-gradient-to-r from-red-400 via-red-500 to-red-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">Delete</button>

                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        </AuthenticatedLayout>
    </template>
