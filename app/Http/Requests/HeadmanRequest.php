<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HeadmanRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {

        return [
            //
            //     name: '',
            //     district:'',
            //     headmanship:'', //added
            //    chieftainship:'',
            //     mutupo:'',
            //     incumbent:'',
            //    idnumber:'',
            //    ecnumber:'',
            //    gender:'',
            //     dateofbirth:'',
            //    dateofappointment:'',
            //    status:'',
            //    contactnumber:'',
            //    numberofhouseholds:'', //added
            //    numberofwards:'',
            //    numberofvillages:'',
            //    dateofdeathorremoval:'',
            //    physicalladdress:'',

            'name' => ['required'],
            'district' => ['required'],
            'chieftainship' => ['required'],
            'headmanship' => ['required'],
            'mutupo' => ['required'],
            'incumbent' => ['required'],
            'idnumber' => ['required', 'unique:headmans'],
            'ecnumber' => ['required'],
            'gender' => ['required'],
            'dateofbirth' => ['required'],
            'dateofappointment' => ['required'],
            'status' => ['required'],
            'contactnumber' => ['required'],
            'numberofhousehold' => ['required', 'numeric'],
            'numberofwards' => ['required', 'numeric'],
            'numberofvillages' => ['required', 'numeric'],
            'dateofdeathorremoval' => ['required'],
            'physicalladdress' => ['required'],
        ];
    }
}
