<?php

namespace Controller;

use BLL\Business_Logic;
use Model\Model_Auth;

require_once "../Model/model_auth.php";
require_once "../BLL/business_logic.php";

$method = $_SERVER['REQUEST_METHOD'];
$service = new Business_Logic();

switch ($method) {
    case 'GET':

        if(!isset($_COOKIE['login']))
        {
            if(isset($_GET['login']) && isset($_GET['password']))
            {
                $login    = $_GET['login'];
                $password = $_GET['password'];

                $auth = new Model_Auth($login, $password);

                $response = $service->get_User_By_Login($login);

                if ($auth->get_Login() === $response->get_Login() &&
                    $auth->get_Password() === $response->get_Password() )
                {
                    setcookie('login', $auth->get_Login(), $auth->get_Expire(), "/");

                    echo 'TRUE';
                    return 'TRUE';
                }

                echo 'FALSE';
                return 'FALSE';

            }

            echo 'FALSE' ;
            return 'FALSE';

        } else if(isset($_GET['logout'])){
            if($_GET['logout'] === 'TRUE')
            {
                setcookie('login', null, 0, "/");
                echo 'TRUE';
                return 'TRUE';
            }
            echo 'FALSE';
            return 'FALSE';
        }

        break;

    default:
        E_ERROR;
        break;
}
