<?php

use App\Http\Controllers\ComicController;
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
    $comics = config('db.comics');
    $blueicons = config('db.blueicons');
    $footer = config('db.footerList');
    //dd($comics);
    return Redirect::route('comics.index');
    /*     return view('home', compact('comics', 'blueicons', 'footer')); */
})->name('home');

/* Route::get('/show/{index}', function ($id) {
    $comics = config('db.comics');
    if ($id >= 0 && $id < count($comics)) {
        $comic = $comics[$id];
        $blueicons = config('db.blueicons');
        $footer = config('db.footerList');
        return view('pages.show', compact('comic', 'comics', 'blueicons', 'footer'));
    } else {
        abort(404);
    }
})->name('pages.show');
 */
Route::resource('comics', ComicController::class);

/* Route::resource('comics', ComicController::class)->except([
    'create',
    'store',
    'update',
    'destroy',
]);
 */
