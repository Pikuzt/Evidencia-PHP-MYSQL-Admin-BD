<?php
include_once 'SERVER.PHP';


class DB extends PDO
{

    private $host = '192.168.200.24';
    private $database = 'es172002022';
    private $user = 'root_remote';
    private $password = '123456';
    private $pdo;
    private $query;
    private $bConnected = false;
    private $parameters;

    /**
     * DB constructor.
     */

    public function __construct()
    {
        $dns = 'mysql:dbname=' . $this->database . ';host=' . $this->host;
        parent::__construct($dns, $this->user, $this->password, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
    }

    public  function connection()
    {
        $dns = 'mysql:dbname=' . $this->database . ';host=' . $this->host;
        try {

            $this->pdo = new PDO($dns, $this->user, $this->password, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, true);


            return $this->pdo;
        } catch (PDOException $e) {
            echo $e->getMessage();
            die();
        }
    }

    public function closeConnecion()
    {
        $this->pdo = null;
    }
}