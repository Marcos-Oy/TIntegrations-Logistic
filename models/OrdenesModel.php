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
		public function get_Solicitud()
		{
			$consulta="SELECT DISTINCT o.id, DATE_FORMAT(o.fecha, '%d-%m-%Y') fecha, r.capital región, c.desc_comuna comuna, o.qsobres,
            o.alto * o.largo * o.ancho M3,o.peso, o.valorflete, d.id documento,d.valordeclarado,
            t.desctipopago, a.observaciones FROM actividades a, comuna c,provincia p,region r,bodega b,oficina ofi,tipopago t,
            orden o LEFT JOIN documento d ON o.id = d.orden_id WHERE a.orden_id = o.id AND a.bodega_id = b.id
            AND a.id = (SELECT a1.id FROM actividades a1 WHERE a1.orden_id = o.id and a1.estado_id = 1
            ORDER BY 1 DESC LIMIT 1)  AND o.tipopago_id = t.id AND o.comuna_id = c.id AND c.provincia_id = p.id
            AND p.region_id = r.id AND ofi.bodega_id = b.id AND a.observaciones like '%tránsito%' AND a.bodega_id = 5
            AND (upper(r.capital) like upper('%".$search."%') OR upper(desc_comuna) like upper('%".$search."%')
            OR upper(desc_provincia) like upper('%".$search."%')) ORDER BY 1";
			$resultado=$this->basededatos->query($consulta);
			while($fila=$resultado->fetch_assoc()){
				$this->Solicitud[]=$fila;
			}
			return $this->Solicitud;
		}
        
    }

?>