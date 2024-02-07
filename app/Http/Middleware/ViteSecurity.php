<?php
 
namespace App\Http\Middleware;
 
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Vite;
use Symfony\Component\HttpFoundation\Response;
 
class ViteSecurity
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        Vite::useCspNonce();
        $response =  $next($request);
        $response->headers->set('Content-Security-Policy', "script-src 'self' kit.fontawesome.com 'nonce-".Vite::cspNonce()."'");
        return $response;
    }
}