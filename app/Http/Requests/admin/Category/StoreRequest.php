<?php

namespace App\Http\Requests\admin\Category;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
        return [
            'name' => 'required|unique:categories,name'
        ];
    }

    public function attributes(): array
    {
        return [
            'name' => 'category name'
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'Please enter category name',
            'name.unique' => 'Category name is exists. Please enter other category name'
        ];
    }
}
