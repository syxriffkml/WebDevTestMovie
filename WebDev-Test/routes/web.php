<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MovieController;

use App\Models\Movie;

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

/*Route::get('/', function () {
    return view('welcome');
});*/


Route::get('/', [MovieController::class, 'listOfMovies'])->name('list-movies'); //Display lists of 30 movies

Route::post('/store-favourite', 'MovieController@storeFavourite'); //Favourited movies will be saved in database

Route::get('/favourite-movies', 'MovieController@showFavouritedMovies')->name('favourite-movies'); //Display the list of fav movies





