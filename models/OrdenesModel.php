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
			$consulta="SELECT 
            o.numero ODT, date_format(oa.fecha, '%d-%m-%Y') fecha,  r.nombre regi,
            c.nombre comun, o.bultos, o.dimensiones, o.peso, o.sobres,
            tp.nombre,  d.valor_declarado, o.valor_flete
        FROM ordenes o  
        LEFT JOIN  orden_documentos od ON o.idorden = od.idorden
        LEFT JOIN  documentos d ON od.idorden_documentos = d.iddocumento,
        comunas c,  provincias p,   regiones r,   orden_actividades oa
        LEFT JOIN actividades a ON a.idactividad = oa.idactividad
        AND a.idactividad IN (2 , 9, 10), tipo_pago tp
        WHERE o.idtipo_pago = tp.idtipo_pago
        AND o.idcomuna = c.idcomuna
        AND p.idprovincia = c.idprovincia
        AND p.idregion = r.idregion
        AND oa.idorden = o.numero
        AND oa.idorden_actividad = (SELECT z.idorden_actividad
            FROM orden_actividades z WHERE z.idorden = o.numero
            ORDER BY z.idorden_actividad DESC LIMIT 1)
        AND oa.idestado_actividad = 1";
			$resultado=$this->basededatos->query($consulta);
			return $resultado;
		}
		/********************************* */
        
    }

?>