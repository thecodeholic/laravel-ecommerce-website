<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductRequest extends FormRequest
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
            'title' => 'required|max:2000',
            'description' => 'required',
            'price' => 'required|numeric|min:0',
            'discount_pct' => 'nullable|numeric|min:1',
            'discounted_price' => 'nullable|numeric|min:0'
        ];
    }
}
