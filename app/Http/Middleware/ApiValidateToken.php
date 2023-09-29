<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class ApiValidateToken
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

        $header = $request->header('api-token-authorization');

        if(!$header || $header != env('API_TOKEN_VALIDATE')){

            $response = [
                'status' => 300,
                'message' => 'Unauthorized'
            ];

            return response()->json($response, 413);

        } else {
            
            return $next($request);
        
        }
    }
}
