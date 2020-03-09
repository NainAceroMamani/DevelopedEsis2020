<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PersonRequest extends FormRequest
{

    protected $redirect = "/";

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
            'name_person'       => 'required|max:60',
            'last_name_person'  => 'max:60',
            'email_person'      => 'max:55|unique:people,email_person|nullable',
            'type_document'     => 'required|max:45',
            'num_document'      => 'required|max:45|unique:people,num_document',
            'phone_person'      => 'max:18',
            'type_person'       => 'max:5'
        ];
    }
}
