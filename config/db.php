<?php
    class db{
        private $host = "makrohard.sytes.net";
        private $dbname = "tpqt2023";
        private $user = "tpqt2023";
        private $password = "pinturillo";

        public function conexion(){
            try{
                $PDO = new PDO("mysql:host".$this->host.";dbname=".$this->dbname,$this->user,$this->password);
                return $PDO;
            }
            catch(PDOException $e){
                return $e->getMessage();
            }
        }
    }
    $obj = new db();
    print_r($obj->conexion());
?>