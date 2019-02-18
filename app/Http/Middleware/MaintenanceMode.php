<?php

namespace App\Http\Middleware;

use Closure;
use DB;

class MaintenanceMode
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $config = DB::table('config')->where('name', 'maintenance')->first();

        if ($config->value == 'off')
        {
            return $next($request);
        }

        else
        {
            return redirect('/maintenance');
        }
    }
}
