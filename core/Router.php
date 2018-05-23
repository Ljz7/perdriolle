<?php
<<<<<<< HEAD
/**
 * Created by PhpStorm.
 * User: marceaupheulpin
 * Date: 15/05/2018
 * Time: 09:51
 */

class Router

{
    protected $routes = array();

    /**
     * @return array
     */
    public function getRoutes()
    {
        return $this->routes;
    }

    /**
     * @param array $routes
     */
    public function setRoutes($routes)
    {
        $this->routes = $routes;
    }

    public function define($routes)
    {
        $this->routes = $routes;
    }

    public function direct($uri)
    {
        if (array_key_exists($uri, $this->routes)) {
            return $this->routes[$uri];
=======

class Router
{
    protected $routes = [
        'GET' => [],
        'POST' => []
    ];

    public static function load($file)
    {
        $router = new static;

        require $file;

        return $router;
    }

    public function get($uri, $controller)
    {
        $this->routes['GET'][$uri] = $controller;
    }

    public function post($uri, $controller)
    {
        $this->routes['POST'][$uri] = $controller;
    }

    public function direct($uri, $requestType)
    {
        if (array_key_exists($uri, $this->routes[$requestType])) {
            return $this->routes[$requestType][$uri];
>>>>>>> 0ef52ef9865da93707ccd109e00a59e41f663b59
        }

        throw new exception('No route defined for that uri');
    }

<<<<<<< HEAD
    public static function load($file)
    {
        $router = new static;

        require $file;

        return $router;
    }


}
=======
    public function getRoutes()
    {
        return $this->routes;
    }
}
>>>>>>> 0ef52ef9865da93707ccd109e00a59e41f663b59
