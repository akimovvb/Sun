<?php

namespace App\Services;
use App\Models\Comment;

class CommentService
{
    /**
     * Create a new class instance.
     */
   public static function store($data){
    Comment::create($data);
   }

   public static function update(Comment $comment, $data){
    $comment->update($data);
    return $comment;
   }

   public static function destroy(Comment $comment){
    $comment->delete();
    return redirect();
   }
}
