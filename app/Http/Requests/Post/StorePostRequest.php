<?php

namespace App\Http\Requests\Post;

use Illuminate\Foundation\Http\FormRequest;

class StorePostRequest extends FormRequest
{
   

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title' => 'nullable|string',
            'content' => 'nullable|string',
            'author' => 'nullable|string',
            'is_published' => 'nullable|boolean',
            'category' => 'nullable|string',
            'like' => 'nullable|integer',
            'image' => 'nullable|string',
            'tag' => 'nullable|string',
            'views' => 'nullable|string',
            'published_at' => 'nullable|date',   
        ];
    }
}
