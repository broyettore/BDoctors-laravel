<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreGameRequest extends FormRequest
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
            "title" => "required|max:60",
            "price" => "required|numeric|decimal:2",
            "languages" => "required",
            "developer" => "required",
            "release" => "required",
            "pegi" => "required",
            "image" => "nullable|image",
            'editor_id' => 'nullable|exists:editors,id',
            "genres" => "nullable|exists:genres,id",
            "discount" => "required|integer|min:0|max:75",
            "relevant" => "boolean"
            // "description_id" => "nullable|exists:description,id"
        ];
    }
}
