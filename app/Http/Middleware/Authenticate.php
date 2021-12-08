<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;

class Authenticate extends Middleware
{
    /**
     * Tempat perginya user kalau belum login
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    protected function _redirectTo($request)
    {
        if (!$request->expectsJson()) {
            return route('login'); //Ke halaman login
        }
    }
}
