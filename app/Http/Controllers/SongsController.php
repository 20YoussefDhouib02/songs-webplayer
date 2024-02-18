<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Song; 

class SongsController extends Controller
{
    public function index()
    {
        $songs = Song::all();
        return view('index', compact('songs'));
    }

    public function show(Request $request)
    {
        // Get the song ID from the query parameters
        $songId = $request->query('id');
        // Fetch the song from the database based on the ID
        $song = Song::find($songId);

        // Pass the song to the view
        return view('song', compact('song'));
    }

    public function create()
    {
        return view('share');
    }

    public function store(Request $request)
    {
        // Validation rules for the request
        $request->validate([
            'title' => 'required',
            'artist' => 'required',
            'link' => 'required|unique:songs',
            'platform' => 'required',
        ]);

        // Create a new song instance with the request data
        $song = new Song();
        $song->title = $request->input('title');
        $song->artist = $request->input('artist');
        $song->description = $request->input('description');
        $song->link = $request->input('link');
        $song->lyrics = $request->input('lyrics');
        $song->platform = $request->input('platform');
        
        $song->save();

        return redirect()->route('index')->with('success', 'Song created successfully.');
    }
}


