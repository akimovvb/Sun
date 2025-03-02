<?php

namespace App\Http\Resources\Comment;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CommentResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return[
            'post' => $this->post,
            'content' => $this->content,
            'author' => $this->author,
            'status' => $this->status,
            'parent' => $this->parent,
            'likes' => $this->likes,
            'profile_id' => $this->profile_id
            
        ];
    }
}
