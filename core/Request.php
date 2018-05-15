<?php
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