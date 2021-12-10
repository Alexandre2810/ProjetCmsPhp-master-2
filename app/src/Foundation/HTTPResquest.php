<?php

namespace App\Foundation;

class HTTPResquest
{
    public function cookieData($key)
    {
        return isset($_COOKIE[$key]);
    }

    public function cookieExist($key)
    {
        return isset($_COOKIE[$key]);
    }

    public function method()
    {
        return $_SERVER['REQUEST_METHOD'];
    }

    public function requestURI()
    {
        return $_SERVER['REQUEST_URI'];
    }
}