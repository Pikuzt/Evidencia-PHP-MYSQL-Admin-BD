<?php

include_once '../Modal/mArtista.php';

$objArtista = new mArtista();



$objArtista->setArea($_REQUEST['area']);
$objArtista->setFechaEntrada($_REQUEST['hora']);
$objArtista->setNombre($_REQUEST['name']);
$objArtista->setApellidoM($_REQUEST['apellidoM']);
$objArtista->setApellidoP($_REQUEST['apellidoP']);
$objArtista->setNacimiento($_REQUEST['nacimiento']);
$objArtista->setRfc($_REQUEST['rfc']);





$ubicacion = $objArtista->addPersona();
$artista = $objArtista->addAsistencia();

if ($ubicacion and $artista ){
    echo 1;
}

