<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreDoctorRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            "cv" => "required|file",
            "address" => "required|max:100",
            "photo" => "required|image",
            "phone_number" => "required|max:20",
            "services" => "required",
            "user_id" => "exists:user_id,id"
        ];
    }

}
