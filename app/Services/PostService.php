<?php

namespace App\Services;
use App\Models\Post;

class PostService
{
    public static function store(array $data) 
    {
        return Post::create($data);
    }

    public static function update(Post $post, $data){
        $post->update($data);
        return $post;

        
    }

    public static function destroy(Post $post){
        $post->delete();
        return redirect();
    }
}


