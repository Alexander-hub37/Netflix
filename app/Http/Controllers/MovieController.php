<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use App\Models\Gender;
use App\Models\Qualification;
use Illuminate\Http\Request;
use App\Http\Requests\MovieRequest;
use App\Http\Requests\QualificationRequest;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $movies = Movie::with('genders')->get();
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
    public function store(MovieRequest $request)
    {
        $movie = Movie::create($request->except(['banner', 'image', 'video', 'genders']));

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

        $genders = $request->input('genders', []);
        $movie->genders()->sync($genders);

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
    public function update(MovieRequest $request, Movie $movie)
    {
        $movie->update($request->except(['banner', 'image', 'video', 'genders']));

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

        $genders = $request->input('genders', []);
        $movie->genders()->sync($genders);
        
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

}
