<?php
<<<<<<< HEAD
/**
 * Created by PhpStorm.
 * User: marceaupheulpin
 * Date: 15/05/2018
 * Time: 13:43
 */

class Request
{
    public static function uri(){
        return trim($_SERVER['REQUEST_URI'], '/');
    }
}
=======

class Request
{
    public static function uri()
    {
        return trim(
            parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH),
            '/'
        );
    }

    public static function method()
    {
        return $_SERVER['REQUEST_METHOD'];
    }
}
>>>>>>> 0ef52ef9865da93707ccd109e00a59e41f663b59
