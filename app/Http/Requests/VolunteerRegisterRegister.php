<?php

namespace App\Http\Requests;

use App\Rules\MessageCustomValidation;
use Illuminate\Foundation\Http\FormRequest;

class VolunteerRegisterRegister extends FormRequest
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
            // Check if fullname filed is required and min Chars is 5
            'fullname' => ['required' , 'min:5'],
            // email required and should be required filed 
            'email' => ['required' , 'email' , 'unique:volunteers,email'],
            // phone is required
            'phone' => ['required'],
            // message is required
            'message' => ['required' , new MessageCustomValidation],
        ];
    }
}
