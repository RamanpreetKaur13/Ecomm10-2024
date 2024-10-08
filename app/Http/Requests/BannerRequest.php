<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class BannerRequest extends FormRequest
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
            // dd( $this->banner);
            $rules= [
                'homepage_section_id' => 'required',
                'image_url' => 'nullable',
                'link_url' => 'required',
                'alt_text' => 'required',
                'display_order' => 'required|numeric|unique:banners,display_order,' . $this->banner . ',id',
                // 'image' => 'dimensions:width=3000,height=1200',
                
            ];
            // Modify image validation message for PUT requests
    
            // if (request()->type === 'Slider') {
            //     $rules['image'] = [
            //         'required',
            //         Rule::dimensions()->width(3000)->height(1200),
            //     ];
            // }

            // $rules['image'] = [
                
            //     Rule::dimensions()->width(3000)->height(1200),
            // ];
            return $rules;
        }
        else{
            $rules =  [
                'homepage_section_id' => 'required',
                'image_url' => 'required',
                'link_url' => 'required',
                'alt_text' => 'required',
                'display_order' => 'required|numeric|unique:banners,display_order',
                // 'display_order' => 'required|numeric|unique:banners,sort',
                // 'image' => 'required|dimensions:width=3000,height=1200',
            ];
                // Modify image validation message for PUT requests
    
                // if (request()->type === 'Slider') {
                //     $rules['image'] = [
                //         'required',
                //         Rule::dimensions()->width(3000)->height(1200),
                //     ];
                // }else{
                //     $rules['image'] = [
                //         'required',
                //     ];
                // }
        

            return $rules;
        }

    }

    // public function messages(): array
    // {
    //     return [
    //         'image.dimensions' => 'The image must be 3000x1200 pixels.',
            
    //     ];
    // }


}
