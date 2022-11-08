<script setup>
    import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
    import GuestLayout from '@/Layouts/GuestLayout.vue';
    import InputError from '@/Components/InputError.vue';
    import InputLabel from '@/Components/InputLabel.vue';
    import PrimaryButton from '@/Components/PrimaryButton.vue';
    import TextInput from '@/Components/TextInput.vue';
    import { Head, Link, useForm } from '@inertiajs/inertia-vue3';
    import { ref } from 'vue';

    const Zimdetails = {
    "Harare": [
        "Harare"
    ],
    "Bulawayo": [
        "Bulawayo"
    ],
    "Manicaland": [
        "Buhera","Chimanimani","Chipinge","Makoni","Mutare","Mutasa","Nyanga"
    ],
    "Mashonaland_Central": [
        "Bindura","Guruve","Mazowe","Mbire","Mount Darwin","Muzarabani","Mukumbura","Rushinga","Shamva"
    ],
    "Mashonaland_East":[
        "Chikomba","Goromonzi","Marondera","Mudzi","Murehwa","Mutoko","Seke","UMP (Uzumba-Maramba-Pfungwe)","Wedza (Hwedza)"
    ],
    "Mashonaland_West":[
        "Chegutu","Hurungwe","Kariba","Makonde","Mhondoro-Ngezi","Sanyati","Zvimba","Kadoma","Chinhoyi"
    ],
    "Masvingo":[
        "Bikita","Chiredzi","Chivi","Gutu","Masvingo","Mwenezi","Zaka"
    ],
    "Matabeleland_North":[
        "Binga","Bubi","Hwange","Lupane","Nkayi","Tsholotsho","Umguza"
    ],
    "Matabeleland_South":[
        "Beitbridge","Bulilima","Gwanda","Insiza","Mangwe","Matobo","Umzingwane"
    ],
    "Midlands": [
        "Chirumhanzu","Gokwe North","Gokwe South","Gweru","Kwekwe","Mberengwa","Shurugwi","Zvishavane"
    ]
    }



    let removedordied = ref(false);

    const District = ref("false")
    const Province =ref([]);

    function DistFun() {
    if (form.province){
        District.value = false;
        Province.value= form.province;
    }else{
        District.value = true;
    }
    };


    function removed(){
        removedordied.value = !removedordied.value;
    }
    const form = useForm({
    name: '',
    district:'',
    chieftainship:'',
    mutupo:'',
    incumbent:'',
    idnumber:'',
    ecnumber:'',
    gender:'',
    dateofbirth:'',
    dateofappointment:'',
    status:'',
    contactnumber:'',
    numberofheadman:'',
    numberofwards:'',
    numberofvillages:'',
    dateofdeathorremoval:'',
    physicalladdress:'',

    });


    const submit = () => {
        form.post(route("chief.store"));
    };
    </script>

    <template>
        <Head title="Dashboard" />

        <AuthenticatedLayout>
            <template #header>
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    Adding a Chief
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
                                    <InputLabel for="chieftainship" value="Chieftainship" />
                                    <TextInput id="chieftainship" type="text" class="mt-1 block w-full" v-model="form.chieftainship" required autofocus autocomplete="name" />
                                    <InputError class="mt-2" :message="form.errors.chieftainship" />
                                </div>
                            </div>
                            <div class="md:flex md:my-2">
                                <div class="flex-auto mx-2">
                                    <InputLabel for="mutupo" value="Mutupo" />
                                    <TextInput id="mutupo" type="text" class="mt-1 block w-full" v-model="form.mutupo" required autofocus autocomplete="mutupo" />
                                    <InputError class="mt-2" :message="form.errors.mutupo" />
                                </div>
                                <div class="flex-auto mx-2">
                                    <InputLabel for="ecnumber" value="EC number" />
                                    <TextInput id="ecnumber" type="text" class="mt-1 block w-full" v-model="form.ecnumber" required autofocus autocomplete="ecnumber" />
                                    <InputError class="mt-2" :message="form.errors.ecnumber" />
                                </div>
                            </div>
                            <div class="md:grid md:grid-cols-2 gap-2">
                                <div class="flex-auto mx-2">
                                     <InputLabel for="password_confirmation" value="Choose Province" />
                                    <select v-model="form.province"  @click="DistFun" style="width:100%" class="border-gray-300 w-100 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm" name="province" id="provice">
                                            <option class="w-100"  value="">Select</option>
                                            <option  v-for="(value,key) in Zimdetails" :key="key" :value="value">{{key}}</option>
                                        </select>
                                        <InputError class="mt-2" :message="form.errors.password_confirmation" />

                                </div>
                                <div class="flex-auto mx-2" v-if="!District">
                                    <InputLabel for="password_confirmation" value="Now select district" />
                                    <select  style="width:100%" class="border-gray-300 w-100 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm" name="province" id="provice">
                                            <option class="w-100"  value="">Select</option>
                                            <option  v-for="province in form.province" :key="province" value="province">{{province}}</option>
                                    </select>
                                    <InputError class="mt-2" :message="form.errors.password_confirmation" /><InputLabel for="Idnumber" value="Id Number" />
                                    <TextInput id="idnumber" type="text" class="mt-1 block w-full" v-model="form.idnumber" required autofocus autocomplete="idnumber" />
                                    <InputError class="mt-2" :message="form.errors.idnumber" />
                                </div>
                            </div>
                            <div class="md:grid md:grid-cols-2 gap-2">
                                <div class="flex-auto mx-2 w-100">
                                   <InputLabel for="dateofbirth" value="Date Of Birth" />
                                    <TextInput id="dateofbirth" type="date" class="mt-1 block w-full" v-model="form.dateofbirth" required autofocus autocomplete="dateofbirth" />
                                    <InputError class="mt-2" :message="form.errors.dateofbirth" /> <InputLabel for="ecnumber" value="EC number" />

                                </div>
                                <div class="flex-auto mx-2 w-100 pt-4">
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
                            </div>
                            <div class="md:grid md:grid-cols-2 gap-2">
                                <div class="flex-auto mx-2">
                                    <InputLabel for="dateofbirth" value="Date Of Birth" />
                                    <TextInput id="dateofbirth" type="date" class="mt-1 block w-full" v-model="form.dateofbirth" required autofocus autocomplete="dateofbirth" />
                                    <InputError class="mt-2" :message="form.errors.dateofbirth" />
                                </div>
                                <div class="flex-auto mx-2">
                                    <InputLabel for="dateofappointment" value="Date Of Appointment" />
                                    <TextInput id="dateofappointment" type="date" class="mt-1 block w-full" v-model="form.dateofappointment" required autofocus autocomplete="dateofappointment" />
                                    <InputError class="mt-2" :message="form.errors.dateofappointment" />
                                </div>
                            </div>
                            <div class="md:flex">
                                <div class="flex-auto mx-2">
                                    <InputLabel for="status" value="Status" />
                                    <TextInput id="status" type="text" class="mt-1 block w-full" v-model="form.status" required autofocus autocomplete="status" />
                                    <InputError class="mt-2" :message="form.errors.status" />
                                </div>
                                <div class="flex-auto mx-2">
                                    <InputLabel for="contactnumber" value="Contact number" />
                                    <TextInput id="contactnumber" type="text" class="mt-1 block w-full" v-model="form.contactnumber" required autofocus autocomplete="contactnumber" />
                                    <InputError class="mt-2" :message="form.errors.contactnumber" />
                                </div>
                            </div>
                            <div class="md:flex">
                                <div class="flex-auto mx-2">
                                    <InputLabel for="numberofheadman" value="Number Of Headman" />
                                    <TextInput id="numberofheadman" type="number" class="mt-1 block w-full" v-model="form.numberofheadman" required autofocus autocomplete="numberofheadman" />
                                    <InputError class="mt-2" :message="form.errors.numberofheadman" />
                                </div>
                                <div class="flex-auto mx-2">
                                    <InputLabel for="numberofwards" value="Number Of Wards" />
                                    <TextInput id="numberofwards" type="number" class="mt-1 block w-full" v-model="form.numberofwards" required autofocus autocomplete="numberofwards" />
                                    <InputError class="mt-2" :message="form.errors.numberofwards" />
                                </div>
                            </div>
                            <div class="md:grid md:grid-cols-2 gap-2">
                                <div class="flex-auto mx-2">
                                    <InputLabel for="numberofvillages" value="Numberof Villages" />
                                    <TextInput id="numberofvillages" type="number" class="mt-1 block w-full" v-model="form.numberofvillages" required autofocus autocomplete="numberofvillages" />
                                    <InputError class="mt-2" :message="form.errors.numberofvillages" />
                                </div>
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
                            <div class="">
                                    <InputLabel for="physicalladdress" value="Physical Address" />
                                    <textarea name="physicalladdress" id=""  class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full" cols="30" rows="4" v-model="form.physicalladdress" autocomplete="physicalladdress" autofocus required ></textarea>
                                    <InputError class="mt-2" :message="form.errors.name" />
                            </div>
                            <div class="flex items-center justify-end mt-4">
                                <PrimaryButton class="ml-4" :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                                    ADD Chief
                                </PrimaryButton>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </AuthenticatedLayout>
    </template>
