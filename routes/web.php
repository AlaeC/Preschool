<?php

use App\Http\Controllers\DataController;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\AdminAuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LearningController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('view.welcome');
})->name('home');

// Route pour afficher toutes les catégories (index.blade.php)
Route::get('/learning', [LearningController::class, 'index'])->name('learning');
Route::get('learning/game',[LearningController::class,'game'])->name('learning.game');
Route::get('pricing',[LearningController::class,'price'])->name('princing');

Route::get('login',[LearningController::class,'login'])->name('login');
Route::get('signup',[LearningController::class,'signup'])->name('signup');

Route::get('/learning/{id}', [LearningController::class, 'showCategory'])->name('learning.category');
// for category in admin 


// Show login form
Route::get('/admin/login', [AdminAuthController::class, 'showLoginForm'])->name('admin.login');

// Handle login submission
Route::post('/admin/login', [AdminAuthController::class, 'login'])->name('admin.login.submit');

// Handle logout
Route::post('/admin/logout', [AdminAuthController::class, 'logout'])->name('admin.logout');

Route::get('/admin/categorie',[CategorieController::class, 'index'])->name('admin.categories.index');
Route::get('/admin/categorie/create',[CategorieController::class,'create'])->name('admin.categories.create');
Route::post('/admin/categorie',[CategorieController::class,'store'])->name('admin.categories.store');

Route::get('/admin/categorie{categorie}',[CategorieController::class,'show'])->name('admin.categories.show');
Route::get('/admin/categorie/{categorie}/edit',[CategorieController::class,'edit'])->name('admin.categories.edit');
Route::put('/admin/categorie/{categorie}',[CategorieController::class,'update'])->name('admin.categories.update');
Route::delete('/admin/categorie/{categorie}',[CategorieController::class,'destroy'])->name('admin.categories.destroy');


// for data in admin

Route::get('/admin/categorie/data/{categorie}',[Datacontroller::class, 'index'])->name('admin.data.index');
Route::get('/admin/categorie/data/{categorie}/create',[DataController::class,'create'])->name('admin.data.create');
Route::post('/admin/categorie/data/{categorie}',[DataController::class,'store'])->name('admin.data.store');
Route::get('/admin/categorie/data/{categorie}/{data}/edit',[DataController::class,'edit'])->name('admin.data.edit');
Route::put('/admin/categorie/data/{categorie}/{data}',[DataController::class,'update'])->name('admin.data.update');
Route::delete('/admin/categorie/data/{categorie}/{data}',[DataController::class,'destroy'])->name('admin.admin.destroy');



Route::middleware(['auth'])->prefix('admin')->name('admin.')->group(function () {
  //  Route::get('/dashboard', [AdminDashboardController::class, 'index'])->name('dashboard');
    Route::get('/admin/categorie',[CategorieController::class, 'index'])->name('admin.categories.index');
    Route::get('/admin/categorie/create',[CategorieController::class,'create'])->name('admin.categories.create');
    Route::post('/admin/categorie',[CategorieController::class,'store'])->name('admin.categories.store');
    
    Route::get('/admin/categorie{categorie}',[CategorieController::class,'show'])->name('admin.categories.show');
    Route::get('/admin/categorie/{categorie}/edit',[CategorieController::class,'edit'])->name('admin.categories.edit');
    Route::put('/admin/categorie/{categorie}',[CategorieController::class,'update'])->name('admin.categories.update');
    Route::delete('/admin/categorie/{categorie}',[CategorieController::class,'destroy'])->name('admin.categories.destroy');
    
    
    // for data in admin
    
    Route::get('/admin/categorie/data/{categorie}',[Datacontroller::class, 'index'])->name('admin.data.index');
    Route::get('/admin/categorie/data/{categorie}/create',[DataController::class,'create'])->name('admin.data.create');
    Route::post('/admin/categorie/data/{categorie}',[DataController::class,'store'])->name('admin.data.store');
    Route::get('/admin/categorie/data/{categorie}/{data}/edit',[DataController::class,'edit'])->name('admin.data.edit');
    Route::put('/admin/categorie/data/{categorie}/{data}',[DataController::class,'update'])->name('admin.data.update');
    Route::delete('/admin/categorie/data/{categorie}/{data}',[DataController::class,'destroy'])->name('admin.admin.destroy');
}


);
