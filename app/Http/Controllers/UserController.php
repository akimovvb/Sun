<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Services\UserService;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = User::all();
        return $user;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $date = [
            'login' => 'Mcgil',
            'email' => 'HmMcgil@gmail.com',
            'password' => '123',
            'role' => 'Lawyer'
        ];

        return UserService::store($date);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(User $user)
    {
        $date = [
            'login' => 'Hmlin',
            'email' => 'HmMcgil@gmail.com',
            'password' => '123',
            'role' => 'Lawyer'
        ];

        return UserService::update($user, $date);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        return UserService::destroy($user);
    }
}
