<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

use DataTables;

class MovieController extends Controller{

    //Display 30 lists of movie
    public function listOfMovies()
    {
        $apiKey = env('TMDB_API_KEY');
        $listMovies = [];

        // Fetch first page of results (page 1)
        $url = "https://api.themoviedb.org/3/discover/movie?api_key={$apiKey}&page=1";
        $response = file_get_contents($url);
        $listMovies = array_merge($listMovies, json_decode($response)->results);

        // Fetch second page of results (page 2)
        $url = "https://api.themoviedb.org/3/discover/movie?api_key={$apiKey}&page=2";
        $response = file_get_contents($url);
        $listMovies = array_merge($listMovies, array_slice(json_decode($response)->results, 0, 10));

        return view('movies.index', compact('listMovies'));
    }

    //Save fav movie into db
    public function storeFavourite(Request $request)
    {
        $movieTitle = $request->input('title');

        DB::statement("INSERT INTO fav_movie (movie_title) VALUES (?)", [$movieTitle]);
        //DB::statement("INSERT INTO fav_movie (column1, column2, column3) VALUES (?, ?, ?)", [$value1, $value2, $value3]);

        return response()->json(['message' => 'Movie added to favourites']);
    }

    //Fetch and display fav movies in pagination of 10
    public function showFavouritedMovies()
    {
        $favMovies = DB::table('fav_movie')->paginate(10);
        return view('movies.favourite-movies', compact('favMovies'));
    }
    
}

