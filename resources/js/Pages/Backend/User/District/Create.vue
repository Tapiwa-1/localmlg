<template>
    <Head title="Dashboard" />

    <AuthenticatedLayout>
        <template #header>
          <Usernav/>
        </template>

        
        <div class="p-4 max-w-sm m-auto bg-white border rounded mt-4 ">
                
               
        <form @submit.prevent="submit">
            <div>
                <InputLabel for="name" value="Name" />
                <TextInput id="name" type="text" class="mt-1 block w-full" v-model="form.name" required autofocus autocomplete="name" />
                <InputError class="mt-2" :message="form.errors.name" />
            </div>

            <div class="mt-4">
                <InputLabel for="email" value="Email" />
                <TextInput id="email" type="email" class="mt-1 block w-full" v-model="form.email" required autocomplete="username" />
                <InputError class="mt-2" :message="form.errors.email" />
            </div>

            <div class="mt-4">
                <InputLabel for="password" value="Password" />
                <TextInput id="password" type="password" class="mt-1 block w-full" v-model="form.password" required autocomplete="new-password" />
                <InputError class="mt-2" :message="form.errors.password" />
            </div>

            <div class="mt-4">
                <InputLabel for="password_confirmation" value="Confirm Password" />
                <TextInput id="password_confirmation" type="password" class="mt-1 block w-full" v-model="form.password_confirmation" required autocomplete="new-password" />
                <InputError class="mt-2" :message="form.errors.password_confirmation" />
            </div>
            <div class="mt-4">
                <InputLabel for="password_confirmation" value="Choose Province" />
                <select v-model="form.province"  @click="DistFun" style="width:100%" class="border-gray-300 w-100 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm" name="province" id="provice">
                        <option class="w-100"  value="">Select</option>
                        <option  v-for="(value,key) in Zimdetails" :key="key" :value="value">{{key}}</option>
                </select>
                <InputError class="mt-2" :message="form.errors.password_confirmation" />
            </div>
            <div class="mt-4" v-if="!District">
                <InputLabel for="password_confirmation" value="Now select district" />
                <select  style="width:100%" class="border-gray-300 w-100 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm" name="province" id="provice">
                        <option class="w-100"  value="">Select</option>
                        <option  v-for="province in form.province" :key="province" value="province">{{province}}</option>
                </select>
                <InputError class="mt-2" :message="form.errors.password_confirmation" />
            </div>
        
            <div  class="flex items-center justify-end mt-4">
                <Link :href="route('login')" class="underline text-sm text-gray-600 hover:text-gray-900">
                    Already registered?
                </Link>

                <PrimaryButton class="ml-4" :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                    Register
                </PrimaryButton>
            </div>
        </form>
            </div>
    </AuthenticatedLayout>
</template>


<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import Usernav from '@/Components/Usersnav.vue'
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
const form = useForm({
    name: '',
    email: '',
    password: '',
    province:'',
    password_confirmation: '',
    terms: false,
});

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


const submit = () => {
    form.post(route('register'), {
        onFinish: () => form.reset('password', 'password_confirmation'),
    });
};


</script>

<style>

</style>