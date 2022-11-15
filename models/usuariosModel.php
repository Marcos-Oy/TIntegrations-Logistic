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
		public function setpaterno($paterno)
		{
			$this->paterno=$paterno;
		}
		public function getpaterno()
		{
			return $this->paterno;
		}
		public function setmaterno($materno)
		{
			$this->materno=$materno;
		}
		public function getmaterno()
		{
			return $this->materno;
		}
		public function setemail($email)
		{
			$this->email=$email;
		}
		public function getemail()
		{
			return $this->email;
		}
		public function settel1($tel1)
		{
			$this->tel1=$tel1;
		}
		public function gettel1()
		{
			return $this->tel1;
		}
		public function settel2($tel2)
		{
			$this->tel2=$tel2;
		}
		public function gettel2()
		{
			return $this->tel2;
		}
		public function setofi($ofi)
		{
			$this->ofi=$ofi;
		}
		public function getofi()
		{
			return $this->ofi;
		}
		public function setcargo($cargo)
		{
			$this->cargo=$cargo;
		}
		public function getcargo()
		{
			return $this->cargo;
		}
		public function setfechanac($fechanac)
		{
			$this->fechanac=$fechanac;
		}
		public function getfechanac()
		{
			return $this->fechanac;
		}

        public function show()
        {
            $stament = $this->PDO->prepare("call usuarios_obtener(null,1,null)");
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
			$consulta="call usuarios_obtener(null,1,null)";
			$resultado=$this->basededatos->query($consulta);
			while($fila=$resultado->fetch_assoc()){
				$this->Solicitud[]=$fila;
			}
			return $this->Solicitud;
		}

        public function EliminarUsuario()
		{
			$consulta="UPDATE usuarios SET estduser_id = 0 WHERE username = '".$this->username. "'";
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
		public function InsertarUsuario()
		{
			$consulta="call usuarios_crear('".$this->nombre."', '".$this->paterno."', '".$this->materno."', '".$this->email."',
										   '".$this->tel1."','".$this->tel2."', ".$this->ofi.", ".$this->cargo.", 
										   '".$this->fechanac."', @_user_name)";
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