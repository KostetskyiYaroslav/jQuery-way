<?php

namespace Controller {

    use BLL\Business_Logic;
    use Model\model_user;

    require_once  "../BLL/business_logic.php";
    require_once "../Model/model_user.php";

    $service = new Business_Logic();
    $method = $_SERVER['REQUEST_METHOD'];

    switch ($method) {
        case 'GET':

            break;
        default:
            E_ERROR;
            break;
    }
}