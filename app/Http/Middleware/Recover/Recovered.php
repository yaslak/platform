<?php

namespace App\Http\Middleware\Recover;

use Closure;
use Illuminate\Support\Facades\Auth;
use App\Traits\Recovers\Recover as R;

class Recovered
{
    use R;

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        /*
        $user = Auth::user();
        if(!$this->recover($user)){
            return redirect(route('recover.recover'));
        }
        */
        return $next($request);
    }
}
