<?php

namespace App\Services;
use App\Models\Category;

class CategoryService
{
    /**
     * Create a new class instance.
     */
    public static function store($date){
        
        return Category::create($date);
    }

    public static function update(Category $category, $date){
        $category->update($date);

    }

    public static function destroy(Category $category){
        $category->delete();
        
    }
}
