<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuevo Libro</title>

    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    @vite(['resources/css/materialize.css', 'resources/js/materialize.js'])
</head>
<body style="background-color:#bcaaa4">
    <nav>
        <div class="nav-wrapper">
            <a href="/libro" class="brand-logo"><i class="material-icons">book</i>Lista de libros</a>
            <ul id="nav-mobile" class="right hide-on-med-and-down">
                
            </ul>
        </div>
    </nav>
    
    <div class="row">
        <div class="col s3"></div>
        <div class="col s6 grey lighten-2">
            <form action="/libro" method="post" class="col s12">
                @csrf
                <div class="row">
                    <div class="input-field col s6">
                        <label for="ISBN">ISBN</label>
                        <input type="text" name="ISBN" id="ISBN" data-length="13" value="{{ old('ISBN') }}">
                        @error('ISBN')
                            <i>{{ $message }}</i>
                        @enderror
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="input-field col s6">
                        <label for="nombreLibro">Nombre Libro</label>
                        <input type="text" name="nombreLibro" id="nombreLibro" value="{{ old('nombreLibro') }}">
                        @error('nombreLibro')
                            <i>{{ $message }}</i>
                        @enderror
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="input-field col s6">
                        <label for="nombreAutor">Autor</label>
                        <input type="text" name="nombreAutor" id="nombreAutor" value="{{ old('nombreAutor') }}">
                        @error('nombreAutor')
                            <i>{{ $message }}</i>
                        @enderror
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="input-field col s6">
                        <label for="nombreEditorial">Editorial</label>
                        <input type="text" name="nombreEditorial" id="nombreEditorial" value="{{ old('nombreEditorial') }}">
                        @error('nombreEditorial')
                            <i>{{ $message }}</i>
                        @enderror
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="input-field col s6">
                        <label for="existencia">Existencia</label>
                        <input type="number" name="existencia" id="existencia" value="{{ old('existencia') }}">
                        @error('existencia')
                            <i>{{ $message }}</i>
                        @enderror
                    </div>
                </div>
                <br>
                <input type="submit" value="Agregar" class="waves-effect waves-light btn">
            </form>
        </div>
        <div class="col s3"></div>
    </div>
    
</body>
</html>