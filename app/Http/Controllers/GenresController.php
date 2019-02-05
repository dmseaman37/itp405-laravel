<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Validator;

class GenresController extends Controller
{
    //
    public function index(Request $request)
    {
    	$genres = DB::table('genres')->get();

    	return view('genres', ['genres' => $genres]);
    }

    public function edit($genreId)
    {
        $genre = DB::table('genres')
        	->where('GenreId', '=', $genreId)
        	->first();

        return view('genre.edit', ['genre' => $genre]);
    }

    public function store($genreId, Request $request)
    {
        $input = $request->all();

        $validation = Validator::make($input, [
            'name' => 'required|min:3|unique:genres,Name'
        ]);

        if ($validation->fails())
        {
            return redirect('/genres/' . $genreId . '/edit')
                ->withInput()
                ->withErrors($validation);
        }

        DB::table('genres')->where('GenreId', $genreId)
            ->update(['Name' => $request->name]);

        return redirect('/genres');
    }
}
