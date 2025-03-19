<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckAge
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function handle(Request $request, Closure $next): Response
    {
        print_r($request->age);
        if ($request->query('age') < 18) {
            die("Access Denied. You must be at least 18 years old.");
        }
        else {
            echo "Access Granted. You are at least 18 years old.";
        }
        return $next($request);
    }
}b