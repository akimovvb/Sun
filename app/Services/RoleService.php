<?php

namespace App\Services;
use App\Models\Role;

class RoleService
{
    public static function store($date){
        Role::create($date);
    }
    public static function update($role, $date){
        $role->update($date);

    }
    
    public static function destroy($role){
        $role->delete();
    }
}
