<?php 
	include("config/db.php");
	// la variable controller guarda el nombre del controlador y action guarda la acción por ejemplo registrar 
	//si la variable controller y action son pasadas por la url desde layout.php entran en el if
	if (isset($_GET['control'])&&isset($_GET['action'])) {
		$control=$_GET['control'];
		$action=$_GET['action'];
				
	} 
	else 
	{
		$control='Login';
		$action='login';
	}	
	//carga la vista layout.php
	session_start();
	require_once('Ejecutor.php');
?>

