<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BookRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }
    
    public function rules()
    {
        return [
            'name' => 'sometimes|required|max:255',
            'year' => 'sometimes|required|integer'
        ];
    }
}
