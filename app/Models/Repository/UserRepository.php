<?php 

namespace Oliver\AuthSystem\Models\Repository;

class UserRepository {

     

     public function signup() {
        return "INSERT INTO users (username, password, role_id) VALUES (:username, :password, :role_id)";
     }


     public function findByUsername() {
        return "SELECT * FROM users WHERE username = :username";
     }
}