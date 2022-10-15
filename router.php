<?php
require_once "app/controllers/gamesController.php";
require_once "app/controllers/genreController.php";
require_once "app/controllers/loginController.php";
$action="home";

define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');


if(!empty($_GET['action'])){
    $action=$_GET['action'];
}

$params = explode('/',$action);






switch($params[0]){
    case "home":
        $gamesController = new gamesController();
        $gamesController->showTable();
        break;
    case "showGame":
        $gamesController = new gamesController();
        $gamesController->showGame($params[1]);
        if($params[1]=="table"){
            header("location: ". BASE_URL."table");
        }
        break;
    case "showGenre":
        $genresController= new genreController();
        $genresController->showTable();
        break;
    case "showByGenre":
        $genresController= new genreController();
        $genresController->showByGenre($params[1]);
        break;
    case "addGame":
        $gamesController = new gamesController();
        $gamesController->gameForm();
        break;
    case "finishAddGame":
        $gamesController = new gamesController();
        $gamesController->addGame();
        header("location: ". BASE_URL."home");
        break;
    case "deleteGame":
        $gamesController = new gamesController();
        $gamesController->deleteGame($params[1]);
        header("location: ". BASE_URL."home");
        break;

    case "updateGame":
        $gamesController = new gamesController();
        $gamesController->updateGameForm($params[1]);
        break;
    case "finishUpdateGame":
        $gamesController = new gamesController();
        $gamesController->updateGame($params[1]);
        header("location: ". BASE_URL."home");
        break;

    case "addGenre":
        $genresController= new genreController();
        $genresController->addGenreForm();
        break;
    case "finishAddGenre":
        $genresController= new genreController();
        $genresController->addGenre();
        header("location: ". BASE_URL."showGenre");
        break;
    case "deleteGenre":
        $genresController= new genreController();
        $genresController->deleteGenre($params[1]);
        break;
    case "updateGenre":
        $genresController= new genreController();
        $genresController->updateGenreForm($params[1]);
        break;
    case "finishUpdateGenre":
        $genresController= new genreController();
        $genresController->updateGenre($params[1]);
        header("location: ". BASE_URL."showGenre");
        break;
    case "logIn":
        $loginController= new loginController();
        $loginController->showLogin();
        break;
    case "verifyUser":
        $loginController= new loginController();
        $loginController->verifyUser();
        break;
    case "generarPass":
        $loginController= new loginController();
        $loginController->generarPass();
        break;
    case "logOut":
        $loginController= new loginController();
        $loginController->logOut();
        header("location: ". BASE_URL."home");
        break;
    default:
        header("HTTP/1.0 404 Not Found");
        break;
    }