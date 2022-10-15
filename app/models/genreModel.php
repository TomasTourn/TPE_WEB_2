<?php

class genreModel{

    private $db;

    function __construct(){
        $this->db = $this->connectDB();
    }
    
    private function connectDB(){
        $db = new PDO('mysql:host=localhost;'.'dbname=videojuegos;charset=utf8','root',''); 
        return $db;
    }

    function getAll(){
       
    
        $query = $this->db->prepare('SELECT * FROM genero ');
        $query-> execute();
    
        
        $genres  = $query->fetchAll(PDO::FETCH_OBJ);
    
    
        return $genres;
    }
    function getOne($id){
        $query = $this->db->prepare('SELECT * FROM genero WHERE id_genero = ?');
        $query-> execute([$id]);
    
        $genre = $query->fetch(PDO::FETCH_OBJ);
        return $genre;
    }

    

    function addGenre($genre,$description){

        $query = $this->db->prepare('INSERT INTO genero  (genero,descripcion_genero) VALUES (?,?)');
        $query-> execute([$genre,$description]);
        
    }

    function deleteGenre($id){
        
        $query = $this->db->prepare('DELETE FROM genero WHERE id_genero=?');
        $query-> execute([$id]);


    }


    function updateGenre($id,$genre,$description){
        $query = $this->db->prepare('UPDATE genero SET genero =?, descripcion_genero = ? WHERE id_genero =?');
        $query-> execute([$genre,$description,$id]);

    }

    






}