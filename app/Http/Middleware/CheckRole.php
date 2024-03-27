<?php
namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckRole
{
   
    public function handle(Request $request, Closure $next, $roleId)
    {

        if (!Auth::check()) {

            return redirect('/login');
        }

        if ($request->user()->role_id != $roleId) {
            return redirect('/')->with('error', 'You do not have permission to access this page.');
        }

        return $next($request);
    }
}
