<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">





    <script src="./assets/js/main.js"></script>
    <link rel="stylesheet" href="./assets/css/style.css">

</head>

<body>






    <div class="container">
        <div class="row">





            <div class="col s12 ">
                <br>
                <div class="card large">
                    <br>
                    <br>
                    <br>
                    <h4 style="text-align: center" class="text-center">Registro de entrada</h4>
                    <div class="card-content">
                        <form action="" id="form">
                            <div class="input-field col s6">
                                <select name="area" id="area">
                                    <option value="" disabled selected>Selepccione</option>
                                    <option value="sistemas">Sistemas</option>
                                    <option value="bodega">Bodega</option>
                                    <option value="ventas">Ventas</option>
                                </select>
                                <label>Area del trabajo</label>
                            </div>

                            <div class="input-field col s6">
                                <input type="datetime-local" id="hora" name="hora" class="validate">

                            </div>


                            <div class="input-field col s12 l4">
                                <input type="text" id="first_name" name="name" class="validate">
                                <label for="first_name">Nombre</label>
                            </div>
                            <div class="input-field col s12 l4">
                                <input type="text" id="apellidoP" name="apellidoP" class="validate">
                                <label for="last_name">Apellido Paterno</label>
                            </div>
                            <div class="input-field col s12 l4">
                                <input type="text" id="apellidoM" name="apellidoM" class="validate">
                                <label for="last_name">Apellido Materno</label>
                            </div>
                            <div class="input-field col s12 l6">
                                <input type="date" name="nacimiento" id="nacimiento">

                            </div>
                            <div class="input-field col s12 l6">
                                <input type="text" id="rfc" name="rfc" class="validate">
                                <label for="last_name">RFC</label>
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
        </div>
    </div>


</body>

</html>