<?php

namespace App\Controllers;

class Route
{
    public $routes = [];

    public function get($url, $action)
    {
        $this->routes[$url]['GET'] = $action;
    }

    public function post($url, $action)
    {
        $this->routes[$url]['POST'] = $action;
    }

    public function handleRoute($url, $method)
    {

        if (isset($this->routes[$url][$method])) {
            $action = $this->routes[$url][$method];
            if (is_callable($action))
                $action();
            else {
                // require "./app/Views/pages_404.php";
            }
        } else {
            // require "./app/Views/pages_404.php";
        }
    }
}