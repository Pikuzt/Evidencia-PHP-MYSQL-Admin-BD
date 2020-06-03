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
            <div class="col s12 m12 l12 card large">
                <table class="responsive-table">
                    <thead>
                        <tr>
                            <th data-field="id">Nombre</th>
                            <th data-field="name">Apellido Materno</th>
                            <th data-field="price">Apellido Paterno</th>
                            <th data-field="price">Area</th>
                            <th data-field="price">Hora entrada</th>
                        </tr>
                    </thead>
                    <tbody>

                    <?php

                    include 'config/DB.php';

                    $sql = '
                    select 
                    p.nombre,
                    p.apellidoM,
                    p.apellidoP,
                    a.area_trabajo,
                    a.hora_entrada 
                    from personal p 
                    left join asistencia a on p.idPersonal = a.id_persona_fk
                    where a.area_trabajo = \'sistemas\'
                    order by  a.hora_entrada asc limit 5

                    ';
                    $conexion = new DB();
                    $conn = $conexion->connection();
                    $query = $conn->prepare($sql);
                    $query->execute();
                    $result = $query->fetchAll(PDO::FETCH_ASSOC)

                    ?>

                    <?php foreach ($result as $item) : ?>
                        <tr>
                            <td><?php echo $item['nombre']?></td>
                            <td><?php echo $item['apellidoM']?></td>
                            <td><?php echo $item['apellidoP']?></td>
                            <td><?php echo $item['area_trabajo']?></td>
                            <td><?php echo $item['hora_entrada']?></td>
                        </tr>
                    <?php endforeach; ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>








</body>

</html>