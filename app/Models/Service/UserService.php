<?php
namespace Oliver\AuthSystem\Models\Service;

// include_once "app/Models/Repository/UserRepository.php";
use Oliver\AuthSystem\Core\Database;
use Oliver\AuthSystem\Models\Repository\UserRepository;

session_start();

class UserService
{
    private $db;

    public function __construct()
    {
        $this->db = Database::getInstance()->getConnection();
    }



    public function signup($user)
    {
        try {

            //  echo "In UserService signup method";
            $userrepo = new UserRepository();

            $stmt = $this->db->prepare($userrepo->signup());


            $stmt->bindParam(':username', $user->username);
            $stmt->bindParam(':password', $user->password);
            $stmt->bindParam(':role_id', $user->role);
            $stmt->execute();
            $_SESSION['username'] = $user->username;

            return $user;
        } catch (\Throwable $th) {
            echo "Error during signup: " . $th->getMessage();
        }
    }




    public function login($user)
    {


        $userrepo = new UserRepository();




        $stmt = $this->db->prepare($userrepo->findByUsername());
        
     

        $stmt->bindParam(':username', $user->username);
        $stmt->execute();
        $res = $stmt->fetch();


         
      
        if ($res) {


            if (password_verify(password: $user->password, hash: $res['password'])) {
               
                $user->setRole($res['role_id']);
                $user->setID($res['id']);
                $_SESSION['username'] = $user->username;


                return $user;
            } else {
                echo "Invalid password.";
            }
        } else {
            echo "User not found.";
        }

    }

}