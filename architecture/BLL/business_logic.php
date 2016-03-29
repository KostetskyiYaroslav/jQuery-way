<?php

namespace BLL;

require_once "../DAO/data_access.php";

use DAO\Data_Access;

class Business_Logic
{
    var $DAO = null;

    public function __construct()
    {
        $this->DAO = new Data_Access();
    }

    public function get_User_By_Login($login)
    {
        if($login != "" && $login != null)
        {
            return $this->DAO->get_User_By_Login($login);
        }

        return null;
    }
}