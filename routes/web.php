<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Artisan;
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
Route::get('/', function () {
    return view('welcome');
});

Route::get('/',[PageController::class,'home'])->name('home');

Route::get('/candidats',[PageController::class,'vote'])->name('vote');

Route::get('/a-propos',[PageController::class,'about'])->name('about');

Route::get('/nous-contacter',[PageController::class,'contact'])->name('contact');

Route::post('/votes/candidat/{id}',[PageController::class,'voter'])->name('vote.candidat')->middleware(['auth']);


Route::prefix('admin')->group(function() {
    Route::get('/',[AdminController::class,'home'])->name('admin.home');
    Route::get('/concours',[AdminController::class,'concours'])->name('admin.concours');
});

Route::group(['prefix' => 'lavilledemillecollines123456789'],function () {
    Route::get('/',[AdminController::class,'home'])->name('admin.home');
    Route::get('/concours',[AdminController::class,'concours'])->name('admin.concours');
    Route::get('/candidats',[AdminController::class,'candidat'])->name('admin.candidat');
    Route::get('/votes',[AdminController::class,'vote'])->name('admin.vote');
    Route::post('/concours/storeConcours',[AdminController::class,'storeConcours'])->name('admin.concours.store');
    Route::delete('/concours/deleteConcours/{id}',[AdminController::class,'deleteConcours'])->name('admin.concours.delete');

    Route::post('/concours/storeCandidat',[AdminController::class,'storeCandidat'])->name('admin.candidat.store');

    // For Clear cache
    Route::get('/clear-cache', function() {
        Artisan::call('cache:clear');
        return "Cache is cleared";
    });

    // // 404 for undefined routes
    // Route::any('/{page?}',function(){
    //     return View::make('pages.error-pages.error-404');
    // })->where('page','.*');
});

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
