<?php

require_once "app/models/loginModel.php";
require_once "app/views/loginView.php";


class loginController{

    private $model;
    private $view;

    function __construct(){
        
        $this->model = new loginModel();
        $this->view = new loginView();
    }

    function showLogin(){
        $this->view->showLogin();
    }

   function generarPass(){
        $hash = password_hash('tpeweb2', PASSWORD_DEFAULT);
        echo $hash;
    }

    function verifyUser(){


            $user= $_POST['name'];
            $password =$_POST['password'];
            $dbUser= $this->model->getUser($user);
           
            if(!empty($dbUser)){
                if (password_verify($password, $dbUser->password)){
                    session_start();
                    $_SESSION['user'] = $user;
                    header("location: ". BASE_URL."home");
                }
                else{
                    $this->view->showLogin("contraseña incorrecta, vuelva a intentarlo");
                }
            }
            else{
                $this->view->showLogin("el usuario no existe");
            }
 
    }

    function logOut(){
        session_start();
        session_destroy();
    }





   

}