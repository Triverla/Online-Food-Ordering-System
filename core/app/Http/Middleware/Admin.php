<?php
namespace App\Http\Middleware;
use Closure;
use RealRashid\SweetAlert\Facades\Alert;
class Admin
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
        {
            if(auth()->user()->is_admin == 1){
                return $next($request);
            }
            Alert::error('Sorry!', 'You are not authorized to view this page');
            return redirect()->back()->with('error','You have not admin access');
}
    }
}