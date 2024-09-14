<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class sectionmgmtRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        if(request()->isMethod('put')){
            $rules= [
                'name' => 'required',
                'section_type' => 'required',
                'display_order' => 'required|numeric|unique:homepage_sections,display_order,' .$this->id . ',id',
            ];
            return $rules;
        }
        else{
            $rules =  [
                'name' => 'required',
                'section_type' => 'required',
                'display_order' => 'required|numeric|unique:homepage_sections,display_order',
            ];

            return $rules;
        }

    }
}
