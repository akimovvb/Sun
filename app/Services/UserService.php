<?php

namespace App\Services;
use App\Models\User;

class UserService
{
    public static function store($date){
        User::create($date);
       }
       public static function update($user, $date){
        $user->update($date);
        return $user;
       }
       public static function destroy($tag){
        $tag->delete();
        return redirect();
       }
}
