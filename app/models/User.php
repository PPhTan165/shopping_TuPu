<?php

class User extends Db
{
    public Db $db;
    private $id;
    public $name;
    public $email;
    protected $password;
    public $phonenumbers;
    public $adress;


    public function getAllUser(){
        $sql = "SELECT * FROM users WHERE 1";
        $stmt = $this->db->select($sql);
        return $stmt;
    }
}
?>