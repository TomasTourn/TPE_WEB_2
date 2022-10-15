<?php
require_once "app/models/genreModel.php";
require_once "app/views/genreView.php";
require_once "helpers/userHelper.php";
require_once "app/models/gamesModel.php";
class genreController{

    private $model;
    private $view;
    private $userHelper;
    private $gamesModel;
    function __construct(){
        
        $this->model = new genreModel();
        $this->view = new genreView();
        $this->userHelper= new userHelper();
        $this->gamesModel= new gamesModel();
    }

    function showTable(){
        $genres = $this->model->getAll();
        $this->view->showTable($genres);
       
    }

   
    function showByGenre($id){
          
            $games= $this->gamesModel->getByGenre($id);
            $genre= $this->model->getOne($id);
            if(empty($games)){
                $this->view->showMessage("no se pueden mostrar juegos porque ". $genre->genero. " no contiene ninguno");
            }else{
                $this->view->showBygenre($games,$genre);
            }
           

    }

    function addGenreForm(){
        $this->userHelper->checkLoggedIn();
        $this->view->addGenreForm("finishAddGenre");
    }

    function addGenre(){
        $this->userHelper->checkLoggedIn();
        $genre= $_POST['genre'];
        $description= $_POST['description'];
        $this->model->addGenre($genre,$description);
    }

    function deleteGenre($id){
        $this->userHelper->checkLoggedIn();
        $games=$this->gamesModel->getByGenre($id);
        if(empty($games)){
            $this->model->deleteGenre($id);
            header("location: ". BASE_URL."showGenre");
        }
        else{
            $genre= $this->model->getOne($id);
            $this->view->showMessage("no se puede eliminar ". $genre->genero. " porque contiene juegos");
        }
    }
    
    function updateGenreForm($id){

        $this->userHelper->checkLoggedIn();
        $genre= $this->model->getOne($id);
        $this->view->updateGenreForm("finishUpdateGenre",$genre);
    }


    function updateGenre($id){
        $this->userHelper->checkLoggedIn();
        $genre= $_POST['genre'];
        $description= $_POST['description'];
        
        $this->model->updateGenre($id,$genre,$description);


    }



    
}