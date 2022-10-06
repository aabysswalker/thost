<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array<int, string>
     */

     // Ill fix it by adding some form and checking csrf
    protected $except = [
        '/api/auth/register',
        '/api/auth/login',
        '/api/auth/logout'
    ];
}
