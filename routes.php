<?php
session_start();
	//función que llama al controlador y su respectiva acción, que son pasados como parámetros
	function call($control, $action){
		//importa el controlador desde la carpeta Controllers
		require_once('app/controllers/' . $control . '.Controller.php');
		//crea el controlador
		switch($control){
			case 'Users':$control= new UsersController();break; 
            case 'Login':$control= new LoginController();break;
			case 'DashBoard':$control= new DashBoardController();break;
			case 'Ordenes':$control= new OrdenesController();break;
			case 'MisDatos':$control= new MisDatosController();break;
			case 'NuevaOrden':$control= new NuevaOrdenController();break;
			case 'Recibir':$control= new RecibirController();break;
			case 'Nominar':$control= new NominarController();break;
			case 'AsignarConCodigo':$control= new AsignarConCodigoController();break;
			case 'Asignar':$control= new AsignarController();break;

			case 'Entregar':$control= new EntregarController();break;

		}
		//llama a la acción del controlador
		$control->{$action }();
	}

	//array con los controladores y sus respectivas acciones
	$controllers= array(
						'Users'=>['Portal','Crear','Edit','Editarusuario','Eliminarusuario','Activarusuario','Crearusuario','PasswordReset'],
                        'Login'=>['login','Dash','LoginUser'],
						'DashBoard'=>['Dash'],
						'MisDatos'=>['MisDatos','EditarMisDatos','EditarPass', 'cambioOficina'],
						'Ordenes'=>['NuevaOrden','RevisarOrden','NominarOrden','AsignarOrden','AsignarConCodigo'],
						'Nominar'=>['Nominate','Filtrar_Nominar'],
						'NuevaOrden'=>['calcularFlete', 'datosODT', 'crearodt'],
						'Recibir'=>['Principal','Secundario','Recibir','Devolver','RecibirOrden','EntregarOrden','DevolverOrden','RecibirOdtExterna', 'CrearOrden', 'calcularFlete'],
						'AsignarConCodigo'=>['Carga_Asig'],
						'Ordenes'=>['NuevaOrden','RevisarOrden','NominarOrden','AsignarOrden','AsignarConCodigo',
						'RecibirOrden','EntregarOrden','DevolverOrden','RecibirOdtExterna', 'calcularFlete'],
						'AsignarConCodigo'=>['Carga_Asig','Asignar_Codigo'],
						'Asignar'=>['Carga','Secundario','Asignar','Devolver'],
						'Entregar'=>['CargoD','Entrega'],
						);
	//verifica que el controlador enviado desde index.php esté dentro del arreglo controllers
	if (array_key_exists($control, $controllers)) {
		//verifica que el arreglo controllers con la clave que es la variable controller del index exista la acción
		if (in_array($action, $controllers[$control])) {
			//llama  la función call y le pasa el controlador a llamar y la acción (método) que está dentro del controlador
			call($control, $action);
		}
		else{
			call('Prueba', 'error');
		}
	}else{// le pasa el nombre del controlador y la pagina de error
		call('Prueba', 'error');
	}
?>