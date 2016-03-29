<?php
namespace DAO;

require_once "../Model/model_user.php";

use Model\model_user;

class Data_Access
{
    private $host  = 'localhost';
    private $db    = 'lesson_13';
    private $login = 'root';
    private $pass  = '1111';

    private $connection = null;

    public function __construct()
    {

        $this->connection = new \mysqli($this->host, $this->login, $this->pass)
            or
        die( "ERROR: Can't create connection:" . mysqli_connect_error() );

        $this->connection->select_db($this->db)
            or
        die ( "ERROR: Can't connect to `$this->db`!" . $this->connection->error );

        $this->connection->query ( 'SET names "utf8"' );
    }

    public function get_User_By_Login($login)
    {

        $sql = "SELECT *
                FROM `lesson_13`.`users`
                WHERE `login` = '$login'";

        $response = $this->connection->query($sql);

        $response = mysqli_fetch_array($response);

        $user = new model_user();

        $user->set_Id         ( $response['id']         );
        $user->set_First_Name ( $response['first_name'] );
        $user->set_Last_Name  ( $response['last_name']  );
        $user->set_Patronymic ( $response['patronymic'] );
        $user->set_Login      ( $response['login']      );
        $user->set_Password   ( $response['password']   );

        return $user;
    }

};