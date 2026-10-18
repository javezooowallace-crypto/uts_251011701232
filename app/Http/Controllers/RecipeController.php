<?php

namespace App\Http\Controllers;

use App\Models\Recipe;
use Illuminate\Http\Request;

class RecipeController extends Controller
{
    public function home()
    {
        $featured = Recipe::inRandomOrder()->take(3)->get();

        return view('home', compact('featured'));
    }

    public function index(Request $request)
    {
        $category = $request->query('category');
        $search   = $request->query('search');

        $recipes = Recipe::query()
            ->when($category, fn($query) => $query->where('category', $category))
            ->when($search, fn($query) => $query->where('name', 'like', "%{$search}%"))
            ->orderBy('name')
            ->paginate(4)
            ->withQueryString();

        $categories = Recipe::query()
            ->select('category')
            ->distinct()
            ->orderBy('category')
            ->pluck('category');

        return view('recipes.index', compact('recipes', 'categories', 'category', 'search'));
    }

    public function show(Recipe $recipe)
    {
        return view('recipes.show', compact('recipe'));
    }
}
