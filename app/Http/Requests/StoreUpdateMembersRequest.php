<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUpdateMembersRequest extends FormRequest
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
            'name' => 'required|min:3|max:255',
            'id_ministries' => 'nullable',
            'id_office' => 'nullable'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Campo Nome é Obrigatório.'
        ];
    }
}
