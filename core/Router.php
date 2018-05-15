<?php
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
        }

        throw new exception('No route defined for that uri');
    }



}