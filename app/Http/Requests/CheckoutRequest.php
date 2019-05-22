<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CheckoutRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'email'      => 'required',
            'firstname'  => 'required',
            'lastname'   => 'required',
            'address'    => 'required',
            'city'       => 'required',
            'state'      => 'required',
            'postcode'   => 'required',
            'phone'      => 'required',

            'email1'     => 'required',
            'firstname1' => 'required',
            'lastname1'  => 'required',
            'address1'   => 'required',
            'city1'      => 'required',
            'state1'     => 'required',
            'postcode1'  => 'required',
            'phone1'     => 'required',

            'phone2'     => 'required',
        ];
    }
}
