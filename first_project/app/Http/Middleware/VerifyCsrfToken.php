<?php

use Illuminate\Foundation\Configuration\Middleware;

class VerifyCsrfToken extends Middleware
{
    protected $except = [
        '/posts'
    ];
}