<!DOCTYPE html>
    <html lang="en">
    <head>
    <!-- CSS only -->
    <base href="{BASE_URL}">
   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="css/game.css">
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>{$encabezado}</title>
    </head>
    <body>
      <div class="container">
        <div class="titulo">
        <h1>{$titulo}</h1>
    </div>
    <nav class="navbar navbar-expand-lg bg-dark">
        <div class="container-fluid">

          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="home">Juegos</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="showGenre">Generos</a>
              </li>

              {if isset($smarty.session.user)}
              <li class="nav-item">
                <a class="nav-link" href="logOut">Log out</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="addGame">Agregar Juego</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="addGenre">Agregar Genero</a>
              </li>
              {else}
              <li class="nav-item">
                <a class="nav-link" href="logIn">Log in</a>
              </li>
              {/if}
            </ul>
          </div>
        </div>
      </nav>
      
        