<?php

namespace App\Http\Middleware;

use Closure;

class ExceptionCatcher
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
        /* @var $response \Illuminate\Http\Response */
        $response = $next($request);

        //if Redis is not available
        if($response->exception instanceof \Predis\Connection\ConnectionException){
            return response()->redirectToRoute('home')->withInput(['message' => 'Redis is not available.']);
        }
        
        return $next($request);
    }
}
