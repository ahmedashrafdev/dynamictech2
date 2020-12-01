<?php

use App\Http\Controllers\PagesController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', [PagesController::class, 'homePage'])->name('home');
Route::get('/about', [PagesController::class, 'aboutPage'])->name('about');
Route::get('/products', [PagesController::class, 'productsPage'])->name('products');
Route::get('/products/{slug}', [PagesController::class, 'productPage'])->name('product');
Route::get('/blog', [PagesController::class, 'blogPage'])->name('blog');
Route::get('/blog/{slug}', [PagesController::class, 'postPage'])->name('post');
Route::get('/clients', [PagesController::class, 'clientsPage'])->name('clients');
Route::get('/team', [PagesController::class, 'teamPage'])->name('team');
Route::get('/contact', [PagesController::class, 'contactPage'])->name('contact');
Route::get('/demo', [PagesController::class, 'demoPage'])->name('demo');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return Inertia\Inertia::render('Dashboard');
})->name('dashboard');
