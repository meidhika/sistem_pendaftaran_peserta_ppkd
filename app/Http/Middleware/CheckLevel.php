<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class CheckLevel
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next,  ...$levels): Response
    {
        // Convert levels to an array if it's a single level

        $user = Auth::user();
        if(!$user){
            return redirect('/login');
        }  
        if(!in_array($user->id_level, $levels)){
        // if ($user->id_level != $levels) {
            Alert::warning('Sorry', 'You Dont have access to this menu');
            return redirect('dashboard');

        }
        return $next($request);
    }
}
