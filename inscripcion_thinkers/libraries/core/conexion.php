<?php
    class Conexion{

        /*public function __construct(){
            $conectionString = "mysql:host=".DB_HOST.";dbname=".DB_NAME.";.DB_CHARSET.";
            try {
                $this->conect = new PDO($connectionString,DB_USER,DEB_PASSWORD);
                $this->conect->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                $this->conect = 'Error de conexion';
                echo "ERROR ",$e->getMessage();
            }
        }
        public function conect(){
            return $this->conect;
        }*/
        private $conect;

        public function __construct()
        {
            try {
                $this->conect = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME . '', DB_USER, DB_PASSWORD);
                $this->conect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $this->conect->exec("SET NAMES 'utf8'");
                echo "todo bien, YA SE CONECTO C:";
                return $this->conect;
            } catch (PDOException $e) {
                die('Error:' . $e->getMessage());
            } 
        }
        public function conect()
        {
            return $this->conect;
        }
    }
?>