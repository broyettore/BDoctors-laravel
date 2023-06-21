<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule as ValidationRule;

class UpdateDoctorRequest extends FormRequest
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
            "cv" => "file|mimes:pdf",
            "address" => "required|max:100",
            "photo" => "image",
            "phone_number" => "required|max:20",
            "services" => "required",
            "user_id" => ValidationRule::exists('users', 'id'),
            "specialisations" => "exists:specialisations,id"
        ];
    }
}
