<?php

class userHelper{

function checkLoggedIn(){
    session_start();
    if((!isset($_SESSION['user']))){
        header("location: ". BASE_URL."logIn");
        die();
    }
}

   

}