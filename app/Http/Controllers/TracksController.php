<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Validator;

class TracksController extends Controller
{
    //
    public function index(Request $request)
    {
    	$query = DB::table('tracks')
    		->select('tracks.Name as Track', 'albums.Title as Album', 'artists.Name as Artist', 'UnitPrice', 'genres.Name as Genre')
    		->join('albums', 'tracks.AlbumId', '=', 'albums.AlbumId')
    		->join('genres', 'tracks.GenreId', '=', 'genres.GenreId')
    		->join('artists', 'albums.ArtistId', '=', 'artists.ArtistId');
    		
        if ($request->query('genre'))
        {
            $query->where('genre', '=', $request->query('genre'));
        }

    	$tracks = $query->get();

    	return view('tracks', ['tracks' => $tracks]);
    }

    public function create()
    {
        $query1 = DB::table('albums')
            ->select('albums.AlbumId', 'albums.Title as Album');

        $albums = $query1->get();

        $query2 = DB::table('media_types')
            ->select('media_types.MediaTypeId', 'media_types.Name as MediaType');

        $mediaTypes = $query2->get();

        $query3 = DB::table('genres')
            ->select('genres.GenreId', 'genres.Name as Genre');

        $genres = $query3->get();

        return view('track.create', [
            'albums' => $albums,
            'mediaTypes' => $mediaTypes,
            'genres' => $genres
        ]);
    }

    public function store(Request $request)
    {
        //validate name
        $input = $request->all();
        $validation = Validator::make($input, [
            'name' => 'required',
            'album' => 'required',
            'mediaType' => 'required',
            'genre' => 'required',
            'composer' => 'required',
            'milliseconds' => 'required|numeric',
            'bytes' => 'required|numeric',
            'unitPrice' => 'required|numeric'
        ]);

        //if validation fails, redirect back to form with errors
        if ($validation->fails())
        {
            return redirect('/tracks/new')
                ->withInput()
                ->withErrors($validation);
        }

        // otherwise, insert genre into the db
        DB::table('tracks')->insert([
            'Name' => $request->name,
            'AlbumId' => $request->album,
            'MediaTypeId' => $request->mediaType,
            'GenreId' => $request->genre,
            'Composer' => $request->composer,
            'Milliseconds' => $request->milliseconds,
            'Bytes' => $request->bytes,
            'UnitPrice' => $request->unitPrice
        ]);

        // redirect back to /tracks
        return redirect('/tracks');
    }
}
