<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Data;
use Illuminate\Http\Request;

class LearningController extends Controller
{
    public function index()
    {
        $categories = Category::all(); // On récupère toutes les catégories avec le nombre d'éléments
        return view('view.learning.index', ['categories' => $categories]);
    }

    public function game() {
        return view('game.game');
    }

    public function price() {
        return view('view.princing_page');
    }

    public function login() {
        return view('view.login');
    }

    public function signup() {
        return view('view.signup');
    }

    public function showCategory($id)
    {
        $category = Category::with('data')->where('categorie_id', $id)->firstOrFail();
    
        return view('view.learning.categorie', [
            'category' => $category,
        ]);
    }
}