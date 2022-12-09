<?php
    class EntregarController{
        public function __construct(){}
        //***************************** */ LLAMADA A LAS VISTAS*********************************/
        public function CargoD()
		{
            include("models/odt_activModel.php");
            $obj = new Odt_Actividad();
            $rows = $obj->Datos_Entregar();
            require_once("resources/views/entregar/show.php");
		}
        //***************************** */ LLAMADA A LAS VISTAS*********************************/
        public function Entrega()
		{
            include("models/odt_activModel.php");
            $obj = new Odt_Actividad();
            date_default_timezone_set("America/Santiago");
            $fecha = date("Y-m-d H:i:s");
            if (isset($_POST['entrega'])) 
            {
                $obj->setODT($_POST['ODT']);
                $cuenta = $obj->Conteo();
                while ($q = mysqli_fetch_array($cuenta)) {
                    $contador = $q['q'];
                }
                $image = $_POST['ODT'].$contador;
                $obj->setUsername($_SESSION['username']);
                $ba=$_SESSION['username'];
                $obj->setODT($_POST['ODT']);
                $obj->setRut($_POST['rut']);
                $obj->setNombre($_POST['nombre']);
                $obj->setImagen($image);
                $obj->setObservaciones($_POST['obse']);
                $obj->setFecha($fecha);
                $obj->setBodega( $_SESSION['idbodega']);
                $resultado = $obj->Entrego();
                if($resultado==true)
                {
                    if (isset($_FILES['archivo']) && $_FILES['archivo']['error'] === UPLOAD_ERR_OK) {
                        // get details of the uploaded file
                        $fileTmpPath = $_FILES['archivo']['tmp_name'];
                        $fileName = $_FILES['archivo']['name'];
                        $fileSize = $_FILES['archivo']['size'];
                        $fileType = $_FILES['archivo']['type'];
                        $fileNameCmps = explode(".", $fileName);
                        $fileExtension = strtolower(end($fileNameCmps));
                
                        // sanitize file-name
                        $newFileName = md5($image) . '.jpeg';
                
                        // check if file has one of the following extensions
                        $allowedfileExtensions = array('jpg', 'gif', 'png', 'jpeg', 'heic');
                
                        if (in_array($fileExtension, $allowedfileExtensions)) 
                        {
                            // directory in which the uploaded file will be moved
                            $uploadFileDir ='resources/views/uploaded_files/';
                            $dest_path = $uploadFileDir . $newFileName;
                
                            if (move_uploaded_file($fileTmpPath, $dest_path)) {
                                $message ='File is successfully uploaded.';
                                echo "<script>alert('Entrega Exitosa $ba');
                                window.location= '?control=Entregar&action=CargoD'</script>";
                            } else {
                                $message = 'There was some error moving the file to upload directory. Please make sure the upload directory is writable by web server.';
                                $_SESSION['message_type']="warning";
                            }
                        } 
                        else 
                        {
                            $message = 'Upload failed. Allowed file types: ' . implode(',', $allowedfileExtensions);
                            $_SESSION['message_type']="warning";
                        }
                    } 
                    else 
                    {
                        $message = 'There is some error in the file upload. Please check the following error.<br>';
                        $message .= 'Error:' . $_FILES['archivo']['error'];
                        $_SESSION['message_type']="warning";
                    }
                    
                }
                else
                {
                    echo "<script>alert('La Recepción no ha podido ser procesada');
                    window.location= '?control=Entregar&action=CargoD</script>";
                }
            }
           
            
			
              
        }





    }

?>