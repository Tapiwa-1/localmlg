<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ChiefRequest extends FormRequest
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
            'district' => ['required'],
            'province' => ['required'],
            'chieftainship' => ['required'],
            'mutupo' => ['required'],
            'incumbent' => ['required'],
            'idnumber' => ['required', 'unique:chiefs'],
            'ecnumber' => ['required'],
            'gender' => ['required'],
            'dateofbirth' => ['required'],
            'dateofappointment' => ['required'],
            'status' => ['required'],
            'contactnumber' => ['required'],
            'numberofheadman' => ['required', 'numeric'],
            'numberofwards' => ['required', 'numeric'],
            'numberofvillages' => ['required', 'numeric'],
            'dateofdeathorremoval' => ['nullable', 'date'],
            'physicalladdress' => ['required'],

        ];
    }
}
