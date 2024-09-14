<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class GridCardRequest extends FormRequest
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
        if (request()->isMethod('put')) {
            $rules = [
                'homepage_section_id' => 'required',
                'image_url' => 'nullable',
                'link_url' => 'required',
                'title' => 'required',
                'subtitle' => 'required',
                'display_order' => 'required|numeric|unique:grid_cards,display_order,' . $this->id . ',id',
                // 'image' => 'dimensions:width=3000,height=1200',

            ];
            // Modify image validation message for PUT requests


            // $rules['image_url'] = [
            //     'nullable',
            //     Rule::dimensions()->width(150)->height(100),
            // ];
            return $rules;
        } else {
            $rules =  [
                'homepage_section_id' => 'required',
                'image_url' => 'required',
                'link_url' => 'required',
                'title' => 'required',
                'subtitle' => 'required',
                'display_order' => 'required|numeric|unique:grid_cards,display_order',
                // 'display_order' => 'required|numeric|unique:banners,sort',
                // 'image' => 'required|dimensions:width=3000,height=1200',
            ];

            // $rules['image_url'] = [
            //     'required',
            //     Rule::dimensions()->width(150)->height(100),
            // ];

            return $rules;
        }
    }

     public function messages(): array
    {
        return [
            'image.dimensions' => 'The image must be 150x100 pixels.',
            
        ];
    }

}
