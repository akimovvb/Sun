<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;
use App\Services\ProfileService;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $profile = Profile::all();
        return $profile;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $date = [
            'name' => 'Sol Goodman',
            'phone' => 555996504,
            'adress' => 'Albuquerque, New Mexico',
            'gender' => 'Men'
        ];
        return ProfileService::store($date);
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
    public function update(Profile $profile)
    {
        $date = [
            'name' => 'Hamlin Mcgill'
        ];
        return ProfileService::update($profile, $date);


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Profile $profile)
    {
        return ProfileService::destroy($profile);
    }
}
