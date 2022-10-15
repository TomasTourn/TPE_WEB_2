<?php
 require_once "libs/Smarty.class.php";
    
 class genreView{

     private  $smarty;

     function __construct (){
         $this->smarty= new Smarty();
         
     }

     function showTable($genres,$message = null){

        session_start();
        $this->smarty->assign('titulo','Tabla de Generos');
        $this->smarty->assign('encabezado','Generos');
        $this->smarty->assign('genres',$genres);

     
        $this->smarty->display('templates/genreTable.tpl');
   

    }

    function showBygenre($games,$genre){
        session_start();
        $this->smarty->assign('titulo','Tabla de Generos');
        $this->smarty->assign('genero',$genre);
        $this->smarty->assign('encabezado',$genre->genero);
        $this->smarty->assign('games',$games);

 
            $this->smarty->display('templates/genreGames.tpl');
     

    }

    function addGenreForm($action){
        $this->smarty->assign('action',$action);
        $this->smarty->assign('titulo','Agregar Genero');
        $this->smarty->assign('encabezado','Agregar Genero');
        $this->smarty->display('templates/genreForm.tpl');
    }



    function updateGenreForm($action,$genre){


        $this->smarty->assign('action',$action);
        $this->smarty->assign('genre',$genre);
        $this->smarty->assign('titulo','Editar genero');
        $this->smarty->assign('encabezado','Editar Genero');
        $this->smarty->display('templates/genreForm.tpl');

    }

    function showMessage($message){
        $this->smarty->assign('titulo','Editar genero');
        $this->smarty->assign('encabezado','Editar Genero');
        $this->smarty->assign('message',$message);
        $this->smarty->display('templates/showMessage.tpl');
    }
    
}