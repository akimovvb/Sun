<?php

namespace App\Http\Controllers;

use App\Http\Resources\Category\CategoryResource;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Services\CategoryService;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
      $category = Category::all();
      dd($category);
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
            'title' => 'its category title'
        ];

        $category =  CategoryService::store($date);
        return CategoryResource::make($category);
    }

    /**
     * Display the specified resource.
     */
    public function show($category)
    {
        $category = Category::find($category);
        return $category;
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
    public function update(Category $category)
    {
        $date = [
            'title' => 'its updated category title page'
        ];
      
       return CategoryService::update($category, $date);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        return CategoryService::destroy($category);
    }
}
