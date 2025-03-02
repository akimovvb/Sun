<?php

namespace App\Http\Requests\Comment;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCommentRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     

    
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'post' => 'nullable|string',
            'content' => 'nullable|string',
            'author' => 'nullable|string',
            'status' => 'nullable|string',
            'parent' => 'nullable|string',
            'likes' => 'nullable|integer',
        ];
    }
}
