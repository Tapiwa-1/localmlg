<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class VillageheadRequest extends FormRequest
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
            'name' => ['required'],
            'district' => ['required'],
            'headmanship' => ['required'],
            'mutupo' => ['required'],
            'incumbent' => ['required'],
            'gender' => ['required'],
            'idnumber' => ['required', 'unique:chiefs'],
            'dateofbirth' => ['required'],
            'dateofappointment' => ['required'],
            'status' => ['required'],
            'contactnumber' => ['required'],
            'bankdetails' => ['required'],
            'numberofhousehold' => ['required', 'numeric'],
            'dateofdeathorremoval' => ['required'],
        ];
    }
}
