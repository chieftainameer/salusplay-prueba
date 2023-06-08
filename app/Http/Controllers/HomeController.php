<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Recipe;

class HomeController extends Controller
{
    public function home()
    {
        $categories = Category::with('recipes')
            ->visible()
            ->orderBy(Category::FIELD_TITLE,'asc')
            ->get();

        return view('pages.home',compact('categories'));
    }

    public function showCategory(Category $category)
    {
        return view('pages.category',compact('category'));
    }

    public function showRecipe(Recipe $recipe)
    {
        return view('pages.recipe',compact('recipe'));
    }
}
