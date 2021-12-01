<?php

namespace App;

use App\Models\Login;

class Auth
{
    public static function login($login, $password)
    {
        $loginy = Login::getAll();
        foreach ($loginy as $l) {
            if ($login == $l->getEmail()) {
                if ($password == $l->getPassword()) {
                    $_SESSION["name"] = $login;
                    return true;
                } else {
                    return false;
                }
            }
        }

        return false;
    }

    public static function isLogged(){
        return isset($_SESSION['name']);
    }

    public static function getName(){
        return (Auth::isLogged() ? $_SESSION['name'] : "");
    }

    public static function getRealName()
    {
        $loginy = Login::getAll();
        foreach ($loginy as $l) {
            if ($_SESSION["name"] == $l->getEmail()) {
                return $l->getName();
            }
        }
    }

    public static function isAdmin()
    {
        $loginy = Login::getAll();
        foreach ($loginy as $l) {
            if ($_SESSION["name"] == $l->getEmail()) {
                if ($l->getAdmin() == 1)
                    return true;
                else
                    return false;
            }
        }
    }

    public static function logout()
    {
        unset($_SESSION['name']);
        session_destroy();
    }
}