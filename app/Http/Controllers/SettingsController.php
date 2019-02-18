<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class SettingsController extends Controller
{
	public function index()
	{
		$config = DB::table('config')
			->where('name', 'maintenance')
			->first();

		return view('settings', ['config' => $config]);
    }

    public function store(Request $request)
    {
    	if ($request->maintenance)
    	{
    		DB::table('config')
    			->where('name', 'maintenance')
    			->update(['value' => 'on']);
    	}

    	else
    	{
    		DB::table('config')
    			->where('name', 'maintenance')
    			->update(['value' => 'off']);
    	}

    	return redirect('/settings');
    }
}
