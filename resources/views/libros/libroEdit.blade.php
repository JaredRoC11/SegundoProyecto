<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Libro</title>

    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    @vite(['resources/css/materialize.css', 'resources/js/materialize.js'])
</head>
<body style="background-color:#bcaaa4;">
    <nav>
        <div class="nav-wrapper">
            <a href="/libro" class="brand-logo"><i class="material-icons">book</i>Lista de libros</a>
            <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li class="active"><a href="libro/create">Agregar nuevo libro</a></li>
            </ul>
        </div>
    </nav>

    <div class="row">
        <div class="col s3 grey ">
            
        </div>

        <div class="col s6 grey lighten-2">
            <form action="/libro/{{ $libro->id  }}" method="post" class="col s12">
                @csrf
                @method("patch")
                <div class="row">
                    <div class="input-field col s6">
                        <label for="ISBN">ISBN</label>
                        <input type="text" name="ISBN" id="ISBN" value=" {{ $libro->ISBN}} " data-length="13">
                    </div>
                    @error('ISBN')
                        <i>{{ $message }}</i>
                    @enderror
                </div>
                <br>
                <div class="row">
                    <div class="input-field col s6">
                        <label for="nombreLibro">Nombre Libro</label>
                        <input type="text" name="nombreLibro" id="nombreLibro" value="{{ $libro->nombreLibro }}">
                    </div>
                    @error('nombreLibro')
                        <i>{{ $message }}</i>
                    @enderror
                </div>
                <br>
                <div class="row">
                    <div class="input-field col s6">
                        <label for="nombreAutor">Autor</label>
                        <input type="text" name="nombreAutor" id="nombreAutor" value="{{ $libro->nombreAutor }}">
                    </div>
                    @error('nombreAutor')
                        <i>{{ $message }}</i>
                    @enderror
                </div>
                <br>
                <div class="row">
                    <div class="input-field col s6">
                        <label for="nombreEditorial">Editorial</label>
                        <input type="text" name="nombreEditorial" id="nombreEditorial" value="{{ $libro->nombreEditorial }}">
                    </div>
                    @error('nombreEditorial')
                        <i>{{ $message }}</i>
                    @enderror
                </div>
                <br>
                <div class="row">
                    <div class="input-field col s6">
                            <label for="existencia">Existencia</label>
                            <input type="number" name="existencia" id="existencia" value="{{ $libro->existencia }}">
                            @error('existencia')
                            <i>{{ $message }}</i>
                            @enderror
                    </div>
                </div>
                <br>
                <div class="input-field col s4"></div>
                <div class="input-field col s4">
                    <input type="submit" value="Agregar" class="waves-effect waves-light btn">
                </div>
                <div class="input-field col s4"></div>
            </form>
        </div>

        <div class="class=col s3 grey">
                
        </div>
    </div>
</body>
</html>