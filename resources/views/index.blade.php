<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="icon" href="{{asset('img/icon-60x60.png')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="style.css">
<style>
    body{
        background: url("https://cdn.pixabay.com/photo/2017/07/13/23/11/cinema-2502213_1280.jpg");
        backdrop-filter: blur(10px);
        background-position:center;
        background-attachment: fixed;
        background-size:cover;
    }
    @font-face {
        font-family:'Lato-Black' ;
        src: url('/font/Lato-Black.ttf');
    }
    .titulo1{
        color:#fffff;
        font-size:100px;
    }
    .parent {
    display: flex;
    grid-template-columns: repeat(5, 1fr);
    grid-template-rows: repeat(5, 1fr);
    grid-column-gap: 0px;
    grid-row-gap: 0px;
}
   
</style>


</head>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<body><!--NavBar -->
<nav class="navbar navbar-expand-lg navbar-dark">
  <div class="container">
    <img src="{{asset('img/icon-60x60.png')}}" alt="" width="40px">
    <a class="navbar-brand" href="#">MovieSite</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Inicio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="#">Favoritos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="#">Más vistos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="#">Estrenos</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Categorías
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Acción</a></li>
            <li><a class="dropdown-item" href="#">Animadas</a></li>
            <li><a class="dropdown-item" href="#">Anime</a></li>
            <li><a class="dropdown-item" href="#">Aventuras</a></li>
            <li><a class="dropdown-item" href="#">Ciencia Ficción</a></li>
            <li><a class="dropdown-item" href="#">Comedia</a></li>
            <li><a class="dropdown-item" href="#">Crimen</a></li>
            <li><a class="dropdown-item" href="#">Deportes</a></li>
            <li><a class="dropdown-item" href="#">Documentales</a></li>
            <li><a class="dropdown-item" href="#">Doramas</a></li>
            <li><a class="dropdown-item" href="#">Drama</a></li>
            <li><a class="dropdown-item" href="#">Educativas</a></li>
            <li><a class="dropdown-item" href="#">Familiar</a></li>
            <li><a class="dropdown-item" href="#">Fantasía</a></li>
            <li><a class="dropdown-item" href="#">Historia</a></li>
            <li><a class="dropdown-item" href="#">Misterio</a></li>
            <li><a class="dropdown-item" href="#">Novelas</a></li>
            <li><a class="dropdown-item" href="#">Románticas</a></li>
            <li><a class="dropdown-item" href="#">Suspenso</a></li>
            <li><a class="dropdown-item" href="#">Terror</a></li>
            <li><a class="dropdown-item" href="#">Otros</a></li>

            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        
      </ul>
      <div class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Buscar películas" aria-label="Search">
        <button class="btn btn-outline-info" type="submit">Iniciar Sesión</button>
</div>
    </div>
  </div>
</nav>
<!--Container peliculas home -->

<div class='parent'>
    <br>
    <div id="parent">
      <button class="btn btn-outline-info" action="/create" type="submit">+ Añadir Película</button>
        <div class="popular-movies parent">
            <h2 class="uppercase tracking-wider text-warning">Películas Recientes</h2>
            
            <div class="grid grid-cols-4 gap-16">
                @foreach ($popularMovies as $movie)
                   
                      <a href="{{ route('movies.show', $movie['id'] )}}">
                        <img src="{{ 'https://image.tmdb.org/t/p/w500/'.$movie['poster_path']}}" alt="poster" 
                        class="hover:opacity-75 transition ease-ni-out duration-150">
                      </a>
                    <div class="mt-2">
                      <a href="#" class="text-lg mt-2 hover:text-gray:300">{{ $movie['title']}}</a>
                      <div class="flex items-center text-white">
                        
                          <span class="ml-1">Fecha  de estreno</span>
                          <span class="mx-2">|</span>
                          <span> {{ $movie['release_date']}}</span>
                    </div>      
                @endforeach

            </div>
          </div> 
        </div> <!-- end pouplar-movies -->
    </div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>