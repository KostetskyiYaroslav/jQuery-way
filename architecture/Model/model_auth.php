<?php

namespace Model;


class Model_Auth
{

    #region Declaration

    private $login = null;
    private $password = null;
    private $expire = null;

    public function __construct ($login, $password, $expire = 0)
    {
        $this->login = $login;
        $this->password = $password;
        $this->expire = time() + 604805;
    }

    #endregion


    #region Get & Set

    public  function set_Login($login){
        $this->login = $login;
    }

    public  function set_Password($password){
        $this->password = $password;
    }

    public  function set_Expire($expire){
        $this->expire = $expire;
    }

    public function get_Login(){
        return $this->login;
    }

    public function get_Password(){
        return $this->password;
    }

    public function get_Expire(){
        return $this->expire;
    }

    #endregion


    #region Destruct

    public function __destruct ()
    {
        unset($this->login);
        unset($this->password);
        unset($this->expire);
    }

    #endregion
}