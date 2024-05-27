<?php

namespace App\Http\Requests\Post;

use Illuminate\Foundation\Http\FormRequest;

class PatchRequest extends FormRequest
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
            'title' => 'required|min:8|max:100',
            // 'slug' => 'required|min:5|max:100|unique:posts',
            'content' => 'required|min:7|max:100',
            'category_id' => 'required|integer',
            'description' => 'required|min:5|max:100',
            'posted' => 'required',
            'image' => 'mimes:jpeg,jpg,png|max:10240',
        ];
    }
}
