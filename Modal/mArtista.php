<?php

include_once '../config/DB.php';

class mArtista extends DB
{
    public $name;
    public $direccion;
    public $nombreUbicacion;
    public $idfk;
    public $area;
    public $fechaEntrada;
    public $nombre;
    public $apellidoP;
    public $apellidoM;
    public $rfc;
    public $nacimiento;


    public function getNacimiento()
    {
        return $this->nacimiento;
    }


    public function setNacimiento($nacimiento)
    {
        $this->nacimiento = $nacimiento;
    }


    public function getArea()
    {
        return $this->area;
    }


    public function setArea($area)
    {
        $this->area = $area;
    }


    public function getFechaEntrada()
    {
        return $this->fechaEntrada;
    }


    public function setFechaEntrada($fechaEntrada)
    {
        $this->fechaEntrada = $fechaEntrada;
    }


    public function getNombre()
    {
        return $this->nombre;
    }


    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }


    public function getApellidoP()
    {
        return $this->apellidoP;
    }


    public function setApellidoP($apellidoP)
    {
        $this->apellidoP = $apellidoP;
    }


    public function getApellidoM()
    {
        return $this->apellidoM;
    }


    public function setApellidoM($apellidoM)
    {
        $this->apellidoM = $apellidoM;
    }


    public function getRfc()
    {
        return $this->rfc;
    }


    public function setRfc($rfc)
    {
        $this->rfc = $rfc;
    }



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

    public function addAsistencia()
    {
        $conexion = new DB();
        $conn = $conexion->connection();
        $fechaentrada = $this->getFechaEntrada();
        $area = $this->getArea();
        $id = $this->getIdfk();

        //var_dump($nameCategory);

        try {
            $sql = "INSERT INTO asistencia (hora_entrada,area_trabajo,id_persona_fk) VALUES (?,?,?)";
            $query = $conn->prepare($sql);
            $query->bindParam(1, $fechaentrada);
            $query->bindParam(2, $area);
            $query->bindParam(3, $id);
            $result = $query->execute();

            return $result;
        } catch (PDOException $e) {
            echo $e->getMessage();
            die();
        }
    }

    public function addPersona()
    {
        $conexion = new DB();
        $conn = $conexion->connection();

        $nombre = $this->getNombre();
        $apellidoM = $this->getApellidoM();
        $apellidoP = $this->getApellidoP();
        $nacimiento = $this->getNacimiento();
        $rfc = $this->getRfc();






        //var_dump($nameCategory);

        try {
            $sql = "INSERT INTO personal (nombre,apellidoP,apellidoM,fechaNacimiento,rfc) VALUES (?,?,?,?,?)";
            $query = $conn->prepare($sql);
            $query->bindParam(1, $nombre);
            $query->bindParam(2, $apellidoM);
            $query->bindParam(3, $apellidoP);
            $query->bindParam(4, $nacimiento);
            $query->bindParam(5, $rfc);

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