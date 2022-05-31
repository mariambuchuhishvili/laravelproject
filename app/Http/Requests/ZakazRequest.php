<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use JetBrains\PhpStorm\ArrayShape;


class ZakazRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    #[ArrayShape(['message' => "string", 'name' => "string", 'email' => "string"])] public function rules(): array
    {
        return [
            'message'=> 'required|min:5|max:500',
            'name'=>'required|min:2',
            'email'=>'required|email'
        ];
    }

    #[ArrayShape(['message' => "string"])] public function attributes(): array
    {
        return [
            'message'=> 'Ваше пожелание'
        ];
    }
     #[ArrayShape(['message.required' => "string"])] public function messages(): array
    {
        return [
            'message.required'=> 'Поле "Ваши желания кзаказу" должно быть заполнено'
        ];
    }
}
