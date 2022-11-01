<?php

require_once "app/models/gamesModel.php";
require_once "app/views/gamesView.php";
require_once "app/models/genreModel.php";
require_once "helpers/userHelper.php";
require_once "app/views/genreView.php";

class gamesController{

    private $model;
    private $view;
    private $userHelper;
    private $genreView;
    

    function __construct(){
        
        $this->model = new gamesModel();
        $this->genreModel = new genreModel();
        $this->view = new gamesView();
        $this->userHelper= new userHelper();
        $this->genreView = new genreView();
    }

    function showTable(){
               
               $games = $this->model->getAll();
               $this->view->showTable($games);
       
    }

    function showGame($id){

        $game = $this->model->getOne($id);
        $this->view->showGame($game);
    }

   function gameForm(){
        $this->userHelper->checkLoggedIn();
        $genres= $this->genreModel->getAll();
        $this->view->GameForm("finishAddGame",$genres);

   }

   function addGame(){
     $this->userHelper->checkLoggedIn();

     if(!empty($_POST['name'])&& !empty($_POST['price'])&& !empty($_POST['description'])&& !empty($_POST['genre'])){
          $name= $_POST['name'];
          $price= $_POST['price'];
          $description= $_POST['description'];
          $genre= $_POST['genre'];
          
               if($_FILES['image']['type'] == "image/jpg" || $_FILES['image']['type'] == "image/jpeg" || $_FILES['image']['type'] == "image/png"){
                    echo"la imagen existe";
                    $this->model->addGame($name,$price,$description,$genre,$_FILES['image']['tmp_name']);
                    header("location: ". BASE_URL."home");
               }
               else{
                    $this->model->addGame($name,$price,$description,$genre);
                    header("location: ". BASE_URL."home");
               }
     }
     
     else{
          $this->genreView->showMessage("complete bien los campos");
     }
    


   }

   function deleteGame($id){
        $this->userHelper->checkLoggedIn();
        $this->model->deleteGame($id);

   }
   function updateGameForm($id){
        $this->userHelper->checkLoggedIn();
        $game= $this->model->getOne($id);
        $genres= $this->genreModel->getAll();
        $this->view->updateGameForm("finishUpdateGame",$genres,$game);
   }
   function updateGame($id){
        $this->userHelper->checkLoggedIn();

        if(!empty($_POST['name'])&& !empty($_POST['price'])&& !empty($_POST['description'])&& !empty($genre= $_POST['genre'])){
          $name= $_POST['name'];
          $price= $_POST['price'];
          $description= $_POST['description'];
          $genre= $_POST['genre'];
  
          
                    if($_FILES['image']['type'] == "image/jpg" || $_FILES['image']['type'] == "image/jpeg" || $_FILES['image']['type'] == "image/png"){
                    $this->model->updateGame($id,$name,$price,$description,$genre,$_FILES['image']['tmp_name']);
                    header("location: ". BASE_URL."home");
          
               }else{
                    $this->model->updateGame($id,$name,$price,$description,$genre);
                    header("location: ". BASE_URL."home");
               }
        }else{
          $this->genreView->showMessage("completar los datos");
        }
     

        

   }


}