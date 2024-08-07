<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use App\Models\Gender;
use App\Models\Qualification;
use Illuminate\Http\Request;
use App\Http\Requests\QualificationRequest;

class BrowseController extends Controller
{
    public function search(Request $request)
    {
        $query = $request->input('query');
        $genderId = $request->input('gender');
        $moviesQuery = Movie::where('title', 'like', '%' . $query . '%');

        if ($genderId) {
            $moviesQuery->whereHas('genders', function ($query) use ($genderId) {
                $query->where('genders.id', $genderId);
            });
        }

        $movies = $moviesQuery->orderBy('created_at', 'desc')->get();
            
        $genders = Gender::all();

        return view('browse.index', [
            'movies' => $movies,
            'query' => $query,
            'searching' => true,
            'genders' => $genders
        ]);
    }

    public function browse()
    {

        $latestMovie = Movie::orderBy('created_at', 'desc')->first();
        
        $genders = Gender::all();
        $moviesByGenre = [];

        foreach ($genders as $gender) {
            $moviesByGenre[$gender->name] = Movie::whereHas('genders', function ($query) use ($gender) {
                $query->where('genders.id', $gender->id);
            })->orderBy('created_at', 'desc')->take(4)->get();     
        }

        $topRatedMovies = Movie::withAvg('qualifications', 'value')->orderBy('qualifications_avg_value', 'desc')->take(4)->get();
        
        $allMovies = Movie::all();

        return view('browse.index', compact('latestMovie', 'moviesByGenre', 'topRatedMovies', 'allMovies'));
    }

    public function rate(QualificationRequest $request, Movie $movie)
    {

        Qualification::create([
            'movie_id' => $movie->id,
            'value' => $request->validated()['value'],
        ]);

        return redirect()->route('browse.index', $movie->id)->with('success', 'Thank you for your rating!');
    }
}
