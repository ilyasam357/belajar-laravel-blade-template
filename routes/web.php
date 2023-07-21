<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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
    return view('home',
                [
                    'name' => 'arga',
                    'role' => 'admin',
                    'hobi' => [
                        'mancing','membaca','ngoding','nonton'
                    ],
                    'kategori' => [
                        'Category','Popular','Desktop','Mobile',
                        'Illustration','Branding','Poster','Icon','Product Design'
],                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              
                ]
);
});

Route::get('/about', function(){
    return view('about',
                [
                    'title1' => 'halaman about',
                     'kategori' => [
                        'Category','Popular','Desktop','Mobile',
                        'Illustration','Branding','Poster','Icon','Product Design'
                     ],
                     'desimg' =>[
                        'Muhammad yasir','Muhammad yasir','Muhammad yasir','Muhammad yasir',
                        'Muhammad yasir','Muhammad yasir','Muhammad yasir','Muhammad yasir'
                     ]
                ]
);
});

Route::get('/product', function(){
    return view('product',
                [
                    'title2' => 'halaman product',
                    'kategori' => [
                        'Category','Popular','Desktop','Mobile',
                        'Illustration','Branding','Poster','Icon','Product Design'
                     ],
                ]
);
});






Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
