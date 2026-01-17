<?php

require __DIR__ . '/vendor/autoload.php'; // index.php is at project root

// use Oliver\AuthSystem\app\Models\Entity\Router;j
use Oliver\AuthSystem\Models\Entity\Router;
    $request = $_SERVER['REQUEST_URI'];
    $script_name = dirname($_SERVER['SCRIPT_NAME']);
    $url = str_replace($script_name, '', $request);
    $url = parse_url($url, PHP_URL_PATH);
    $url = trim($url, '/');
$route = new Router();    
if ($url == '') {
    $url = 'home';
}



$route->add('home' , ['pageController' , 'home'] );
$route->add('login' ,  ['pageController', 'login'] );
$route->add('signup', ['pageController','signup'] );
$route->add('UserSignup', ['SignupController','signup'] );
$route->add('User/Dashboard', ['pageController','UserDashboard'] );
$route->add('UserLogin', ['loginController','login'] );
$route->add('Company/CompanyDashboard', ['pageController','companyDashboard'] );
$route->add('Admin/AdminDashboard', ['pageController','AdminDashboard'] );


$route->dispatch($url);
