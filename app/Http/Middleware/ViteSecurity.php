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
       // Ensure Vite generates a CSP nonce
        Vite::useCspNonce();
        
        // Get the generated nonce value
        $nonce = Vite::cspNonce();

        // Define your CSP directives
        $cspDirectives = [
            'base-uri' => "'self'",
            'script-src' => "'self' kit.fontawesome.com 'nonce-$nonce' cdn.jsdelivr.net",
            'style-src' => "'self' 'nonce-$nonce' fonts.googleapis.com cdn.jsdelivr.net kit.fontawesome.com",
            'connect-src' => "'self' ka-f.fontawesome.com",
            // 'default-src' => "default-src 'self' fonts.gstatic.com cdn.jsdelivr.net",
            'form-action' => "'self'",
            'img-src' => "'self'",
            'media-src' => "'self'",
            'object-src' => "'none'",
            // Add other directives as needed
        ];

        // Compile CSP header string
        $cspHeader = collect($cspDirectives)->map(function ($directives, $directiveName) {
            return "$directiveName $directives";
        })->implode('; ');

        // Add the CSP header to the response
        $response = $next($request);
        $response->headers->set('Content-Security-Policy', $cspHeader);

        return $response;
    }
}