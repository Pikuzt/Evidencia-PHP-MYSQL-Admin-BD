<?php

include_once '../Modal/mArtista.php';

$objArtista = new mArtista();



$objArtista->setName($_REQUEST['name']);
$objArtista->setDireccion($_REQUEST['direccion']);
$objArtista->setNombreUbicacion($_REQUEST['estado']);
$objArtista->setUbicacion($_REQUEST['ubicacion']);



$ubicacion = $objArtista->addUbicacion();
$artista = $objArtista->addArtista();

if ($ubicacion and $artista ){
    echo 'Registro realizado con exito.';
}

