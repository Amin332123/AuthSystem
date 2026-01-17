<?php
namespace Oliver\AuthSystem\Controllers;

use Oliver\AuthSystem\Models\Service\UserService;

use Oliver\AuthSystem\Models\Entity\User;



class SignupController
{

    public function signup()
    {
        // var_dump($_POST);
        $username = $_POST['username'];
        $password = $_POST['password'];
        $password = password_hash($password, PASSWORD_BCRYPT);
        $role = $_POST['userType'] ?? Null;
        if ($role == 'user'){
            $role = 1;
        } else {
            $role = 3;
        }
        $user = new User($username, $password, $role);
        $userservice = new UserService();
        
        $user = $userservice->signup($user);
        
      
            header("Location: login");
        
    }
}