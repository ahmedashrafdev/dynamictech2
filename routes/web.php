<?php

use App\Http\Controllers\HomePageController;
use App\Http\Controllers\PagesController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use Laravel\Jetstream\Rules\Role;

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
Route::group(['middleware'=>'language'],function (){
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
});



Route::get('setlocale/{locale}',function($lang){
    Session::put('locale',$lang);
    return redirect()->back();   
});

Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::get('/dashboard',[HomePageController::class , 'index'])->name('dashboard');
    Route::put('/text/update/{slug}',[HomePageController::class , 'updateText'])->name('update_text');
    Route::put('/text/update/images/{slug}',[HomePageController::class , 'updateTextImages'])->name('update_text_images');
});
