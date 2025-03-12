<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;

class ServicesRequest extends FormRequest
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

            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'title' => 'nullable|string|max:255',
            'description' => 'nullable|string',
            'link' => 'nullable|string',

        ];
    }

     // to modify the validation error
     public function failedValidation(Validator $validator)
     {
         throw new HttpResponseException(response()->json([
             'code' => 422,
             'status' => 'error',
             'message' => 'Validation error',
             'errors' => $validator->errors()
         ], 422));
     }
}
