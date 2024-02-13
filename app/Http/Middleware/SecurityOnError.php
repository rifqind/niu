<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Vite;
use Symfony\Component\HttpFoundation\Response;

class SecurityOnError
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        Vite::useCspNonce();
        $nonce = Vite::cspNonce();

        // Compile CSP header string

        $response = $next($request);
        if ($response->isClientError() || $response->isServerError()) {
            $content = $response->getContent();
            // $contentWithNonce = $this->addNonceToInlineScripts($content, $nonce);

            // $response->setContent($contentWithNonce);
        }
        return $response;
    }
}
