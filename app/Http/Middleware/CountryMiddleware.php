<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Return_;
use Symfony\Component\HttpFoundation\Response;

class CountryMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {

        // curiculam role rules
        $array=[
            'Bangladesh',
            'Africa',
            'India',
            'America',

        ];
        if (in_array($request->country, $array)){
            return $next($request);
        }

       Return redirect()->to('/');
    }
}
