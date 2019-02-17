<?php

namespace App\Http\Controllers;

use App\Cinema;
use App\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $movies = Movie::all();
//        foreach ($movies as $movie) {
//
//            dd($movie->cinema);
//        }
        return view('movies.index', compact('movies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cinemas = Cinema::pluck('name', 'id');
//        dd($cinemas);
        return view('movies.create', compact('cinemas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $movie = new Movie();
        $movie->name = $request->name;
        $movie->description = $request->description;
        $movie->time = $request->time;
        if ($request->hasFile('poster')) {
            $poster = $request->poster;
            $path = $poster->store('images', 'public');
            $movie->poster = $path;
        }
        $movie->category = $request->category;
        $movie->releaseDate = $request->releaseDate;
        $movie->save();

//        $cinema = Cinema::find([1, 2]);
//        dd($request->cinema);
        $movie->cinemas()->sync($request->cinemas, false);
//        $movie->cinema()->attach($request->cinema);
        return redirect(route('index'))->with('success', 'Create success!');

    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $movie = Movie::find($id);
        return view('movies.show', compact('movie'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $movie = Movie::findOrFail($id);
        return view('movies.edit', compact('movie'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $movie = Movie::findOrFail($id);
        $movie->delete();
        return redirect(route('index'))->with('success', 'Delete success!');
    }
}
