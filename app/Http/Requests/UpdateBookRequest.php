<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateBookRequest extends FormRequest
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
            // 'name' => 'required',
            // 'page' => 'required',
            // 'author' => 'required',
            // 'category' => 'required',
            // 'Publishing_year' => 'required|max:2022',
            // 'ISBN' => 'required|min:20',
        ];
    }
    public function messages()
    {
        return [
            // 'name.required' => 'Trường bắt buộc',
            // 'page.required' => 'Trường bắt buộc',
            // 'Publishing_year.required' => 'Trường bắt buộc',
            // 'author.required' => 'Trường bắt buộc',
            // 'category.required' => 'Trường bắt buộc',
            // 'ISBN.required' => 'Trường bắt buộc',
        ];
    }
}
