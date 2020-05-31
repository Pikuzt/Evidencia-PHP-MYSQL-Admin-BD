<?php

include_once '../config/DB.php';

class mArtista extends DB
{
    public $name;
    public $direccion;
    public $nombreUbicacion;
    public $idfk;


    public function getIdfk()
    {
        return $this->idfk;
    }


    public function setIdfk($idfk)
    {
        $this->idfk = $idfk;
    }


    public function getNombreUbicacion()
    {
        return $this->nombreUbicacion;
    }


    public function setNombreUbicacion($nombreUbicacion)
    {
        $this->nombreUbicacion = $nombreUbicacion;
    }

    public function getUbicacion()
    {
        return $this->ubicacion;
    }


    public function setUbicacion($ubicacion)
    {
        $this->ubicacion = $ubicacion;
    }
    public $ubicacion;




    public function getName()
    {
        return $this->name;
    }


    public function setName($name)
    {
        $this->name = $name;
    }


    public function getDireccion()
    {
        return $this->direccion;
    }


    public function setDireccion($direccion)
    {
        $this->direccion = $direccion;
    }

    public function addArtista()
    {
        $conexion = new DB();
        $conn = $conexion->connection();
        $name = $this->getName();
        $direccion = $this->getDireccion();
        $id = $this->getIdfk();

        //var_dump($nameCategory);

        try {
            $sql = "INSERT INTO artista (nombre,direccion,claveciudadfk) VALUES (?,?,?)";
            $query = $conn->prepare($sql);
            $query->bindParam(1, $name);
            $query->bindParam(2, $direccion);
            $query->bindParam(3, $id);
            $result = $query->execute();

            return $result;
        } catch (PDOException $e) {
            echo $e->getMessage();
            die();
        }
    }

    public function addUbicacion()
    {
        $conexion = new DB();
        $conn = $conexion->connection();
        $name = $this->getNombreUbicacion();
        $direccion = $this->getUbicacion();

        //var_dump($nameCategory);

        try {
            $sql = "INSERT INTO ubicacion (nombre,ubicacion) VALUES (?,?)";
            $query = $conn->prepare($sql);
            $query->bindParam(1, $name);
            $query->bindParam(2, $direccion);

            $result = $query->execute();

            $id = $conn->lastInsertId();
            $this->setIdfk($id);



            //var_dump($result);

            return $result;
        } catch (PDOException $e) {
            echo $e->getMessage();
            die();
        }
    }
}