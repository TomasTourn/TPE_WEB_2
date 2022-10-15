<?php

class loginModel{

    private $db;

    function __construct(){
        $this->db = $this->connectDB();
    }
    
    private function connectDB(){
        $db = new PDO('mysql:host=localhost;'.'dbname=videojuegos;charset=utf8','root',''); 
        return $db;
    }

    function getUser($name){
        $query = $this->db->prepare('SELECT * FROM user WHERE nombreUsuario = ?');
        $query-> execute([$name]);
    
        $user = $query->fetch(PDO::FETCH_OBJ);
        return $user;
    }




}