<?php
class MisDatosController
{
	public function MisDatos()
	{
		include("models/usuariosModel.php");
		$apt = new usuariosModel();

		include("models/oficinasModel.php");
		$ofi = new oficinasModel();
		$rowsOficinas = $ofi->show();

		$apt->setusername($_SESSION['username']);
		$resultado = $apt->ShowById();

		require_once("resources/views/MisDatos/show.php");
	}

	public function EditarMisDatos()
	{

		include("models/usuariosModel.php");
		$apt = new usuariosModel();
		$apt->setnombre(ucwords(strtolower($_POST['nombre'])));
		$apt->setpaterno(ucwords(strtolower($_POST['paterno'])));
		$apt->setmaterno(ucwords(strtolower($_POST['materno'])));
		$apt->setemail($_POST['email']);
		$apt->settel1($_POST['tel1']);
		$apt->settel2($_POST['tel2']);
		$apt->setofi($_POST['ofi']);
		$apt->setfechanac($_POST['fechanac']);
		$apt->setusername($_POST['username']);
		$id = $apt->EditarMisDatos();
		if ($id == true) {
			echo "<script>alert('Ingreso Exitoso');
				window.location= '?control=MisDatos&action=MisDatos'</script>";
		} else {
			echo "<script>alert('Ingreso no Exitoso');
				window.location= '?control=MisDatos&action=MisDatos'</script>";
		}
	}

	public function cambioOficina()
	{
		include("models/oficinasModel.php");
		$ofi = new oficinasModel();
		$ofi->setIdoffice($_POST['ofi']);
		$ofit = $ofi->showById();
		if (isset($ofit) && !empty($ofit)) {
			foreach ($ofit as $row) {
				$_SESSION['idoficina'] = $row['id'];
				$_SESSION['oficina'] = $row['desc_office'];
				$_SESSION['idbodega'] = $row['idbodega'];
				$_SESSION['bodega'] = $row['desc_bodega'];
			}
			echo "<script>alert('Modificación de oficina temporal Exitosa');
				window.location= '?control=MisDatos&action=MisDatos'</script>";
		} else {
			echo "<script>alert('Modificación de oficina temporal No realizado');
				window.location= '?control=MisDatos&action=MisDatos'</script>";
		}
	}

	public function EditarPass()
	{
		include("models/usuariosModel.php");
		$apt = new usuariosModel();

		if ($_SESSION['password'] == $_POST['actual']) {
			if ($_POST['nueva'] == $_POST['confirmar']) {

				$apt->setusername($_SESSION['username']);
				$apt->setpass($_POST['confirmar']);
				$id = $apt->EditarPassword();

				if ($id == true) {
					session_unset();
					session_destroy();
					echo "<script>alert('Contraseña cambiada. Para continuar debe volver a iniciar sesión'); 
						window.location= '?control=Login&action=login' </script>";
				} else {
					echo "<script>alert('Ingreso no Exitoso');
						window.location= '?control=MisDatos&action=MisDatos'</script>";
				}
			} else {
				echo "<script>alert('La contraseñas ingresadas no coinciden');
					window.location= '?control=MisDatos&action=MisDatos'</script>";
			}
		} else {
			echo "<script>alert('La contraseña actual no concuerda');
				window.location= '?control=MisDatos&action=MisDatos'</script>";
		}
	}
}
