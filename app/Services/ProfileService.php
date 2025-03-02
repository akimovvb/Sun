<?php

namespace App\Services;
use App\Models\Profile;

class ProfileService
{
    public static function store($date){
        Profile::create($date);
    }

    public static function update($profile, $date){
        $profile->update($date);
        return $profile;
    }

    public static function destroy(Profile $profile){
        $profile->delete();
        return redirect();
    }

}
