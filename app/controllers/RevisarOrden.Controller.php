<?php
class revisarordenController{
    public function __construct()
    {
        
    }
    
    public function revisarByID(){
        include ("models/OrdenesModel.php");
        $orden = new OrdenesModel();
        $orden->setODT($_POST['orden']);
        $rowOrden = $orden->datos_Orden();
        $ordenDetail = new OrdenesModel();
        $ordenDetail->setODT($_POST['orden']);
        $detalles = $ordenDetail->historia_Orden();
        if ($rowOrden){
            require_once("resources\views\RevisarOrden\show.php");
        }
    }
}