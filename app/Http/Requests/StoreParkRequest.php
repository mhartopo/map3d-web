<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreParkRequest extends FormRequest
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
            'address' => 'required|min:10|max:255',
            'length' => 'required|numeric|min:0',
            'width' => 'required|numeric|min:0',
            'owner_id' => 'integer',
            'cluster_id' => 'required|integer',
            'model_url' => 'required|url',
        ];
    }
}
