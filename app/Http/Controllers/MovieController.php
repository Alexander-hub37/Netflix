<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use App\Models\Gender;
use App\Models\Qualification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $movies = Movie::all();
        return view('movies.index', compact('movies'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $genders = Gender::all();
        return view('movies.create', compact('genders'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'banner' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'video' => 'nullable|file|mimes:mp4,avi,mov|max:10240',
            'id_gender' => 'required|exists:genders,id',
        ]);

        $movie = new Movie($validated);
        
        if ($request->hasFile('banner')) {
            $movie->banner = $request->file('banner');
        }
        if ($request->hasFile('image')) {
            $movie->image = $request->file('image');
        }
        if ($request->hasFile('video')) {
            $movie->video = $request->file('video');
        }
        $movie->save();

        return redirect()->route('movies.index')->with('success', 'Movie created successfully.');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Movie $movie)
    {
        $genders = Gender::all();
        return view('movies.edit', compact('movie', 'genders'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Movie $movie)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'banner' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'video' => 'nullable|file|mimes:mp4,avi,mov|max:10240',
            'id_gender' => 'required|exists:genders,id',
        ]);

        $movie->update($validated);

        if ($request->hasFile('banner')) {
            $movie->banner = $request->file('banner');
        }
        if ($request->hasFile('image')) {
            $movie->image = $request->file('image');
        }
        if ($request->hasFile('video')) {
            $movie->video = $request->file('video');
        }
        $movie->save();

        return redirect()->route('movies.index')->with('success', 'Movie updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Movie $movie)
    {
        $movie->delete();
        return redirect()->route('movies.index')->with('success', 'Movie deleted successfully');
    }

    public function browse()
    {

        $latestMovie = Movie::orderBy('created_at', 'desc')->first();
        
        $genders = Gender::all();
        $moviesByGenre = [];

        foreach ($genders as $gender) {
            $moviesByGenre[$gender->name] = Movie::where('id_gender', $gender->id)->orderBy('created_at', 'desc')->take(5)->get();
        }
        

        return view('browse.index', compact('latestMovie', 'moviesByGenre'));
    }


    public function search(Request $request)
    {
        $query = $request->input('query');
        $movies = Movie::where('title', 'like', '%' . $query . '%')->orderBy('created_at', 'desc')->get();
            
        return view('browse.index', ['movies' => $movies]);
    }


}
