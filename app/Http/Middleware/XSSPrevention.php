<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class XSSPrevention
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $userInputs = $request->all();

        array_walk_recursive($userInputs, function (&$userInputs) {
            $userInputs = strip_tags($userInputs);
        });

        $request->merge($userInputs);

        return $next($request);
    }
}
