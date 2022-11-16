<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio | Libros</title>

    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    @vite(['resources/css/materialize.css', 'resources/js/materialize.js'])
</head>
<body style="background-color:#bcaaa4">
    <nav>
        <div class="nav-wrapper">
            <a href="/libro" class="brand-logo"><i class="material-icons">book</i>Lista de libros</a>
            <ul id="nav-mobile" class="right hide-on-med-and-down">
                <a href="libro/create">Agregar nuevo libro</a>
            </ul>
        </div>
    </nav>

    <div class = "container">
        <table border ="0" class="centered">
            <tr class="red darken-2">
                <th>Nombre del Libro</th>
                <th>Nombre del Autor</th>
            </tr>
    
            @foreach($libros as $libro)
            <tr class="grey lighten-4">
                <th>
                    <font face="nunito,arial,verdana"><a href="/libro/{{ $libro->id }}" style="color:blue"> {{  $libro->nombreLibro  }} </a></font>
                </th>
                <th>  <h6>{{ $libro->nombreAutor }}</h6> </th>
            </tr>
            @endforeach 
        </table>
    </div>
</body>
</html>