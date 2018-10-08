<?php

namespace Wiwatsrt\NovaEditProfile\Http\Middleware;

use Wiwatsrt\NovaEditProfile\NovaEditProfile;

class Authorize
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return \Illuminate\Http\Response
     */
    public function handle($request, $next)
    {
        return resolve(NovaEditProfile::class)->authorize($request) ? $next($request) : abort(403);
    }
}
