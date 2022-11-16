<?php
    class OrdenesModel
    {
        private $search ="";

        public function __construct()
        {
            require_once "config/db.php";
            $this->basededatos=Conexion::conectar();
        }
        // 

        /****METODO CRGA INICIAL PAGINA RECIBIRORDEN*****/
        public function Datos_Solicitud()
		{
			$consulta="call Cargar_Recibir()";
			$resultado=$this->basededatos->query($consulta);
			return $resultado;
		}
		/********************************* */
        
    }

?>