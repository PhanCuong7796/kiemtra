<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreBookRequest extends FormRequest
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
            'name' => 'required|max:255',
            'page' => 'required',
            'Publishing_year' => 'required|max:2022',
            'IBSN' => 'required|min:20',
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'tên không được đê trống',
            'page.required' => 'số trang không được đê trống',
            'Publishing_year.required' => 'năm xuât bản không được đê trống',
            'ISBN.required' => 'ISBN không được đê trống',
        ];
    }
}
