<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UploadRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [


            'ad_title' => 'required',
            'ad_price' => 'required',
            'ad_shortdesc' => 'max:100',
            'ad_longdesc' => 'max:100',
            'ad_location' => 'required',
            'ad_image' => 'image|mimes:jpg,png,jpeg,gif,svg,bmp|max:3048'
        ];

    }
}
