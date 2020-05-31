<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>


    <script src="./assets/js/main.js"></script>
    <link rel="stylesheet" href="./assets/css/style.css">

</head>

<body>



    <div class="container">
        <div class="row">

            <div class="col s12 m4 l3">
            </div>
            <div class="col s12 m4 l6">
                <div class="card large">
                    <div class="card-image">
                        <img src="https://w.wallhaven.cc/full/73/wallhaven-73vge9.jpg" class="img" alt="" />
                        <span class="card-title"></span>
                    </div>
                    <div class="card-content">
                        <form action="" id="form">
                            <div class="input-field col s12 l6">
                                <input type="text" id="first_name" name="name" class="validate">
                                <label for="first_name">Nombre</label>
                            </div>
                            <div class="input-field col s12 l6">
                                <input type="text" id="last_name" name="direccion" class="validate">
                                <label for="last_name">Dirección</label>
                            </div>
                            <div class="input-field col s12 l6">
                                <input type="text" id="estado" name="estado" class="validate">
                                <label for="last_name">nombre estado</label>
                            </div>
                            <div class="input-field col s12 l6">
                                <input type="text" id="ubicacion" name="ubicacion" class="validate">
                                <label for="last_name">ubicacion</label>
                            </div>
                        </form>
                    </div>
                    <div class="card-action">
                        <button class="btn waves-effect waves-light" id="ingresar-artista" type="submit"
                            name="action">Registrar
                            <i class="material-icons right">send</i>
                        </button>
                    </div>
                </div>
            </div>

            <div class="col s12 m4 l3">
            </div>
        </div>
    </div>
</body>

</html>