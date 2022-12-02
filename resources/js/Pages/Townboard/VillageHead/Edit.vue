<script setup>
    import AuthenticatedLayout from '@/Layouts/AuthenticatedTown.vue';
    import GuestLayout from '@/Layouts/GuestLayout.vue';
    import InputError from '@/Components/InputError.vue';
    import InputLabel from '@/Components/InputLabel.vue';
    import PrimaryButton from '@/Components/PrimaryButton.vue';
    import TextInput from '@/Components/TextInput.vue';
    import { Head, Link, useForm } from '@inertiajs/inertia-vue3';
    import { ref } from 'vue';

    const props =defineProps({
            villagehead: Object,
    });

    const form = useForm({
        province: props.villagehead.province,
        district: props.villagehead.district,
        chieftainship:props.villagehead.chieftainship,
        headmanship: props.villagehead.headmanship,
        mutupo:props.villagehead.mutupo,
        incumbent: props.villagehead.incumbent,
        idnumber:props.villagehead.idnumber,
        ecnumber:props.villagehead.ecnumber,
        gender:props.villagehead.gender,
        dateofbirth:props.villagehead.dateofbirth,
        dateofappointment:props.villagehead.dateofappointment,
        status:props.villagehead.status,
        contactnumber:props.villagehead.contactnumber,
        numberofheadman:props.villagehead.numberofheadman,
        numberofhousehold: props.villagehead.numberofhousehold,
        numberofwards:props.villagehead.numberofwards,
        bankdetails: props.villagehead.bankdetails,
        numberofhousehold: props.villagehead.numberofhousehold,
        dateofdeathorremoval:props.villagehead.dateofdeathorremoval,
        physicalladdress:props.villagehead.physicalladdress,
    });


    const submit = () => {
          form.put(route("villagehead.update", props.villagehead.slug));
    };
    </script>

    <template>
        <Head title="Dashboard" />

        <AuthenticatedLayout>
            <template #header>
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    Adding a villagehead
                </h2>

            </template>

            <div class="py-12">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 py-4">
                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-4">
                        <form @submit.prevent="submit">
                            <div class="md:flex">
                                <div class="flex-auto mx-2">
                                    <InputLabel for="incumbent" value="Incumbent" />
                                    <TextInput id="incumbent" type="text" class="mt-1 block w-full" v-model="form.incumbent" required autofocus autocomplete="incumbent" />
                                    <InputError class="mt-2" :message="form.errors.incumbent" />
                                </div>
                                <div class="flex-auto mx-2">
                                    <InputLabel for="chieftainship" value="chieftainship" />
                                    <TextInput id="chieftainship" type="text" class="mt-1 block w-full" v-model="form.chieftainship" required autofocus autocomplete="name" />
                                    <InputError class="mt-2" :message="form.errors.chieftainship" />
                                </div>
                            </div>
                            <div class="md:grid md:grid-cols-2 gap-2">
                                <div class="flex-auto mx-2">
                                        <InputLabel for="headmanship" value="headmanship" />
                                        <TextInput id="headmanship" type="text" class="mt-1 block w-full" v-model="form.headmanship" required autofocus autocomplete="name" />
                                        <InputError class="mt-2" :message="form.errors.headmanship" />
                                </div>
                                <div class="flex-auto mx-2">
                                    <InputLabel for="Idnumber" value="Id Number" />
                                    <TextInput id="idnumber" type="text" class="mt-1 block w-full" v-model="form.idnumber" required autofocus autocomplete="idnumber" />
                                    <InputError class="mt-2" :message="form.errors.idnumber" />
                                </div>
                            </div>
                            <div class="md:grid md:grid-cols-2 gap-2">
                                <div class="flex-auto mx-2">
                                        <InputLabel for="password_confirmation" value="Choose Province" />
                                        <select v-model="form.province"  @click="DistFun" style="width:100%" class="border-gray-300 w-100 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm" name="province" id="provice">
                                            <option class="w-100"  value="">Select</option>
                                           <option  v-for="(value,key) in Zimdetails" :key="key" :value="value">{{key}}</option>
                                        </select>
                                        <InputError class="mt-2" :message="form.errors.province" />

                                </div>
                                <div class="flex-auto mx-2" v-if="!District">
                                    <InputLabel for="password_confirmation" value="Now select district" />
                                    <select v-model="form.district" style="width:100%" class="border-gray-300 w-100 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm" name="province" id="provice">
                                            <option class="w-100"  value="">Select</option>
                                            <option  v-for="district in form.province" :key="district" :value="district">{{district}}</option>
                                    </select>
                                    <InputError class="mt-2" :message="form.errors.province" />
                                </div>
                            </div>
                            <div class="md:flex md:my-2">
                                <div class="flex-auto mx-2">
                                    <InputLabel for="status" value="Status" />
                                    <TextInput id="status" type="text" class="mt-1 block w-full" v-model="form.status" required autofocus autocomplete="status" />
                                    <InputError class="mt-2" :message="form.errors.status" />
                                </div>
                                <div class="flex-auto mx-2">
                                    <InputLabel for="mutupo" value="Mutupo" />
                                    <TextInput id="mutupo" type="text" class="mt-1 block w-full" v-model="form.mutupo" required autofocus autocomplete="mutupo" />
                                    <InputError class="mt-2" :message="form.errors.mutupo" />
                                </div>
                            </div>

                            <div class="md:grid md:grid-cols-2 gap-2">
                                <div class="flex-auto mx-2 w-100">
                                    <InputLabel for="ecnumber" value="Gender" />
                                    <div class="flex ">
                                        <div class="flex-auto items-center">

                                            <input id="male" value="male" type="radio" v-model="form.gender" name="gender" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                            <label for="male" class="ml-2 text-sm font-medium text-gray-900 ">Male</label>
                                        </div>
                                        <div class="flex-auto items-center">
                                            <input  id="female" value="female" v-model="form.gender" type="radio" name="gender" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                            <label for="female" class="ml-2 text-sm font-medium text-gray-900">Female</label>
                                        </div>
                                    </div>
                                    <InputError class="mt-2" :message="form.errors.gender" />
                                </div>
                                <div class="flex-auto mx-2 w-100 pt-4">
                                    <InputLabel for="dateofbirth" value="Date Of Birth" />
                                    <TextInput id="dateofbirth" type="date" class="mt-1 block w-full" v-model="form.dateofbirth" required autofocus autocomplete="dateofbirth" />
                                    <InputError class="mt-2" :message="form.errors.dateofbirth" />
                                </div>
                            </div>
                            <div class="md:grid md:grid-cols-2 gap-2">
                                <div class="flex-auto mx-2">
                                    <InputLabel for="dateofappointment" value="Date Of Appointment" />
                                    <TextInput id="dateofappointment" type="date" class="mt-1 block w-full" v-model="form.dateofappointment" required autofocus autocomplete="dateofappointment" />
                                    <InputError class="mt-2" :message="form.errors.dateofappointment" />
                                </div>
                                <div class="flex-auto mx-2">
                                    <InputLabel for="numberofhousehold" value="Number Of Household" />
                                    <TextInput id="numberofhousehold" type="number" class="mt-1 block w-full" v-model="form.numberofhousehold" required autofocus autocomplete="numberofhousehold" />
                                    <InputError class="mt-2" :message="form.errors.numberofhousehold" />
                                </div>
                            </div>
                            <div class="md:flex">
                                <div class="flex-auto mx-2">
                                    <InputLabel for="bankdetails" value="Bank details" />
                                    <TextInput id="bankdetails" type="text" class="mt-1 block w-full" v-model="form.bankdetails" required autofocus autocomplete="bankdetails" />
                                    <InputError class="mt-2" :message="form.errors.bankdetails" />
                                </div>
                                <div class="flex-auto mx-2">
                                    <InputLabel for="contactnumber" value="Contact number" />
                                    <TextInput id="contactnumber" type="text" class="mt-1 block w-full" v-model="form.contactnumber" required autofocus autocomplete="contactnumber" />
                                    <InputError class="mt-2" :message="form.errors.contactnumber" />
                                </div>
                            </div>
                            <div class="md:flex md:grid-cols-2 gap-2">

                                <div class="flex-auto mx-2">
                                  <div class="flex items-center mb-4">
                                        <input @click="removed" id="default-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="default-checkbox" class="ml-2 text-sm font-medium text-gray-900">Chief removed or died</label>
                                    </div>
                                    <div v-if="removedordied">
                                        <InputLabel for="dateofdeathorremoval" value="Date of Death or Removal" />
                                        <TextInput id="dateofdeathorremoval" type="date" class="mt-1 block w-full" v-model="form.dateofdeathorremoval"  autofocus autocomplete="dateofdeathorremoval" />
                                        <InputError class="mt-2" :message="form.errors.dateofdeathorremoval" />
                                    </div>
                                </div>
                            </div>
                            <div class="flex items-center justify-end mt-4">
                                <PrimaryButton class="ml-4" :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                                    ADD Villagehead
                                </PrimaryButton>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </AuthenticatedLayout>
    </template>
