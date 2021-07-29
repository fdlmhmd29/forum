<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class IsAdmin
{
  /**
   * Handle an incoming request.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \Closure  $next
   * @return mixed
   */
  public function handle(Request $request, Closure $next, $guard = null)
  {
    if (
      Auth::guard($guard)
        ->user()
        ->can(UserPolicy::ADMIN, User::class)
    ) {
      return $next($request);
    }

    throw new HttpException(403, 'Forbidden')
  }
}
