<?php

    require_once "libs/Smarty.class.php";
    
    class gamesView{

        private  $smarty;

        function __construct (){
            $this->smarty= new Smarty();
            
        }

        function showTable($games){

            session_start();
            $this->smarty->assign('titulo','Videojuegos a la venta');
            $this->smarty->assign('encabezado','Tabla');
            $this->smarty->assign('games',$games);

         
            $this->smarty->display('templates/gamesTable.tpl');
       


        }
         function showGame($game){
            session_start();
            $this->smarty->assign('titulo','Detalle de Juego');
            $this->smarty->assign('encabezado',$game->nombre);
            $this->smarty->assign('game',$game);
            
           
            $this->smarty->display('templates/showGame.tpl');
          
         }

         function gameForm($action,$genres){
            $this->smarty->assign('genres',$genres);
            $this->smarty->assign('titulo','Agregar Juego');
            $this->smarty->assign('encabezado','Agregar Juego');
            $this->smarty->assign('action',$action);
            $this->smarty->display('templates/gameForm.tpl');
         }
    

         function updateGameForm($action,$genres,$game){

            $this->smarty->assign('genres',$genres);
            $this->smarty->assign('game',$game);
            $this->smarty->assign('titulo','Editar' );
            $this->smarty->assign('encabezado','Editar Juego');
            $this->smarty->assign('action',$action);
            $this->smarty->display('templates/gameForm.tpl');

        }

    }