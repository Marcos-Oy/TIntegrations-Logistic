<?php
    class usuariosModel{
        private $PDO;
        private $estduser_id;
        private $username;
        private $nombre;
        private $paterno; 
		private $materno;


		private $email, $tel1, $tel2, $ofi, $cargo, $fechanac;

	


        public function __construct()
        {
            require_once "config/db.php";
           // $con = new Conexion();
            //$this->PDO = $con->conexion();
            $this->basededatos=Conexion::conectar();
        }
        // metodos get y set
		public function setestduser_id($estduser_id)
		{
			$this->estduser_id=$estduser_id;
		}
		public function getestduser_id()
		{
			return $this->estduser_id;
		}
        public function setusername($username)
		{
			$this->username=$username;
		}
		public function getusername()
		{
			return $this->username;
		}
		public function setnombre($nombre)
		{
			$this->nombre=$nombre;
		}
		public function getnombre()
		{
			return $this->nombre;
		}

        public function show()
        {
            $stament = $this->PDO->prepare("call mostrarUsuariosActivos()");
            return ($stament->execute()) ? $stament->fetchAll() : false;
        }

        public function insertar($nombre, $paterno, $materno, $email, $tel1, $tel2, $ofi, $cargo, $fechanac){
            $stament = $this->PDO->prepare("select create_user('$nombre', '$paterno', '$materno', '$email', 
            '$tel1', '$tel2', '$ofi', '$cargo', '$fechanac');");
            return ($stament->execute()) ? $stament->fetchAll() : false ;
        }
        //metodo que devuelve todo la tabla usuario
		public function get_Solicitud()
		{
			$consulta="call mostrarUsuariosActivos()";
			$resultado=$this->basededatos->query($consulta);
			while($fila=$resultado->fetch_assoc()){
				$this->Solicitud[]=$fila;
			}
			return $this->Solicitud;
		}

        public function EliminarUsuario()
		{
			$consulta="UPDATE usuarios SET estduser_id = 2 WHERE username = '".$this->username. "'";
            $resultado=$this->basededatos->query($consulta);
			if($resultado==true)
			{
			return true;
			}
			else
			{
				return false;
			}
		}





    }

?>