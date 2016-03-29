<?php

namespace Model;


class model_user implements \JsonSerializable
{
    var $id         = null;
    var $first_name = null;
    var $last_name  = null;
    var $patronymic = null;
    var $login      = null;
    var $password   = null;

    #region Getter
    public function get_Id()
    {
        return $this->id;
    }

    public function get_First_Name()
    {
        return $this->first_name;
    }

    public function get_Last_Name()
    {
        return $this->last_name;
    }

    public function get_Patronymic()
    {
        return $this->patronymic;
    }

    public function get_Login()
    {
        return $this->login;
    }

    public function get_Password()
    {
        return $this->password;
    }
    #endregionert

    #region Setter
    public function set_Id($id)
    {
        $this->id = $id;
    }

    public function set_First_Name($first_name)
    {
        $this->first_name = $first_name;
    }

    public function set_Last_Name($last_name)
    {
        $this->last_name = $last_name;
    }

    public function set_Patronymic($patronymic)
    {
        $this->patronymic = $patronymic;
    }

    public function set_Login($login)
    {
        $this->login = $login;
    }

    public function set_Password($password)
    {
        $this->password = $password;
    }
    #endregion

    /**
     * Specify data which should be serialized to JSON
     * @link http://php.net/manual/en/jsonserializable.jsonserialize.php
     * @return mixed data which can be serialized by <b>json_encode</b>,
     * which is a value of any type other than a resource.
     * @since 5.4.0
     */
    function jsonSerialize()
    {
        return [
            'id'         => $this->id,
            'first_name' => $this->first_name,
            'last_name'  => $this->last_name,
            'patronymic' => $this->patronymic,
            'login'      => $this->login,
            'password'   => $this->password
        ];
    }
}