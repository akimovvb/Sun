<?php

namespace App\Http\Resources\Post;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PostResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'title'=> $this->title,
            'content' =>$this->content,
           'author' =>$this->author,
            'is_published' =>$this->is_published,
            'likes' =>$this->likes,
           'image_path' =>$this->image_path,
           'tag' =>$this->tag,
            'category' =>$this->category,
           'views' =>$this->views,
            'published_at' =>$this->published_at,
        
        ];
    }
}
