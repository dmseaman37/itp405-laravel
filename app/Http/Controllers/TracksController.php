<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class TracksController extends Controller
{
    //
    public function index(Request $request)
    {
    	$query = DB::table('tracks')
    		->select('tracks.Name as Track', 'albums.Title as Album', 'artists.Name as Artist', 'UnitPrice', 'genres.Name as Genre')
    		->join('albums', 'tracks.AlbumId', '=', 'albums.AlbumId')
    		->join('genres', 'tracks.GenreId', '=', 'genres.GenreId')
    		->join('artists', 'albums.ArtistId', '=', 'artists.ArtistId')
    		->where('Genre', '=', $request->query('genre'));

    	$tracks = $query->get();

    	return view('tracks', ['tracks' => $tracks]);
    }
}
