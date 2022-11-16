<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show</title>

    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    @vite(['resources/css/materialize.css', 'resources/js/materialize.js'])
</head>
<body style="background-color:#bcaaa4">
    <nav>
        <div class="nav-wrapper">
            <a href="/libro" class="brand-logo"><i class="material-icons">book</i>Lista de libros</a>
            <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li><a href="libro/create">Agregar nuevo libro</a></li>
            </ul>
        </div>
    </nav>

    <div class="container">
        <ul>
            <li class="card-panel red darken-2">
                <h4 class=" center-align grey-text text-lighten-1">ISBN</h4>
            </li>
            <li class="card-panel">
                <h6 class="center-align ">{{ $libro->ISBN }}</h6>
            </li>
            <li class="card-panel red darken-2">
                <h4 class="center-align grey-text text-lighten-1">Titulo</h4>
            </li>
            <li class="card-panel">
                <h6 class="center-align">{{ $libro->nombreLibro }}</h6>
            </li>
            <li class="card-panel red darken-2">
                <h4 class="center-align grey-text text-lighten-1">Autor</h4>
            </li>
            <li class="card-panel">
                <h6 class="center-align">{{ $libro->nombreAutor }}</h6>
            </li>
            <li class="card-panel red darken-2">
                <h4 class="center-align grey-text text-lighten-1">Editorial</h4>
            </li>
            <li class="card-panel">
                <h6 class="center-align">{{ $libro->nombreEditorial }}</h6>
            </li>
            <li class="card-panel red darken-2">
                <h4 class="center-align grey-text text-lighten-1">Existencia</h4>
            </li>
            <li class="card-panel">
                <h6 class="center-align">{{ $libro->existencia }}</h6>
            </li>

            <li class="card-panel grey darken-3">
                <div class="row">
                    <div class="col s6">
                        <a  class="waves-effect waves-light btn-large red black-text" href="/libro/{{ $libro->id }}/edit">Editar</a>
                    </div>
                    <div>
                        <form action="/libro/{{ $libro->id }}" method="post">
                            @csrf
                            @method('DELETE')
                            <input  class="waves-effect waves-light btn-large red " type="submit" value="Borrar">
                        </form> 
                    </div>
            </li>
           
        </ul>
    </div>
</body>
</html>