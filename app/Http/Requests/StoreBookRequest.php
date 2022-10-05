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
            // 'author' => 'required',
            // 'category' => 'required',
            'Publishing_year' => 'required|max:2022',
            // 'ISBN' => 'required|min:20',
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'Vui lòng nhập tên',
            'page.required' => 'Vui lòng nhập số trang',
            'Publishing_year.required' => 'Vui lòng nhập năm xuất bản',
            // 'author.required' => 'Vui lòng nhập tên tác giả',
            // 'category.required' => 'Vui lòng nhập loại sách',
            // 'ISBN.required' => 'Vui lòng nhập ISBN',
        ];
    }
}
