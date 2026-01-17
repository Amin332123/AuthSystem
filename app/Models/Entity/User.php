<?php 


namespace Oliver\AuthSystem\Models\Entity;

class User {
    private $username;
    private $password;

    private $role;

   const ROLE_USER = 1;
   const ROLE_ADMIN = 2;

   const ROLE_COMPANY= 3;

    public function __construct($username, $password, $role = self::ROLE_USER) {
        $this->username = $username;
        $this->password = $password;
        $this->role = $role;
    }
    public function __get($name) {
        return $this->$name;
    }


    public function setRole ($role) {
        $this->role = $role;
    }
    public function setID($id) {
        $this->id = $id;
    }
}