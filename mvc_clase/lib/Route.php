<?php

namespace lib;

class Route
{
    private static $routes = [];
    private static $URL_BASE = "public/";


    private static function get($url, $calback)
    {
        self::$routes["GET"][self::$URL_BASE . $url] = $calback;
    }

    private static function post($url, $calback)
    {
        self::$routes["POST"][self::$URL_BASE . $url] = $calback;
    }
}
