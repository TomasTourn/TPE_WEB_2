<?php


class loginView{

    private  $smarty;

    function __construct (){
        $this->smarty= new Smarty();
        
    }



    function showLogin($message = null){

        $this->smarty->assign('titulo','inicio de sesion');
        $this->smarty->assign('encabezado','log in');
        $this->smarty->assign('message',$message);
        $this->smarty->display('templates/login.tpl');

    }


}