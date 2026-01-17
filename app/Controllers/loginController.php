<?php
namespace Oliver\AuthSystem\Controllers;

// use Oliver\AuthSystem\Models\Repository\UserRepository;
use Oliver\AuthSystem\Models\Service\UserService;

use Oliver\AuthSystem\Models\Entity\User;



class loginController
{

    public function login()
    {

        $username = $_POST['username'];
        $password = $_POST['password'];

     
        
        $setuser = new User($username, $password);
    ;
        $userservice = new UserService();
       
        
        $user = $userservice->login($setuser);

        
        if ($user) {
            if ($user->role == 1) {
                header("Location: User/Dashboard");
            } elseif ($user->role == 3) {
                header("Location: Company/CompanyDashboard");
            } elseif( $user->role == 2) {
                header("location: Admin/AdminDashboard");
            }
        }


    }
}