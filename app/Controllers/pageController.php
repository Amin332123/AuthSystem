<?php


namespace Oliver\AuthSystem\Controllers;

session_start();
class pageController
{

    public function home()
    {

        require 'app/Views/home.php';
    }

    public function login()
    {
        require 'app/Views/public/Auth/login.php';
    }

    public function signup()
    {
        require 'app/Views/public/Auth/signup.php';
    }

    public function UserDashboard()
    {
        require 'app/Views/public/Condidate/UserDashboard.php';
    }

    public function companyDashboard()
    {
        require 'app/Views/public/Company/CompanyDashboard.php';
    }

    public function AdminDashboard()
    {
        require 'app/Views/public/Admin/AdminDashboard.php';

    }

}
