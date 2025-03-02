<?php

namespace App\Services;
use App\Models\Tag;
class TagService
{
   public static function store($date){
    Tag::create($date);
   }
   public static function update($tag, $date){
    $tag->update($date);
    return $tag;
   }
   public static function destroy($tag){
    $tag->delete();
    return redirect();
   }
   
}
