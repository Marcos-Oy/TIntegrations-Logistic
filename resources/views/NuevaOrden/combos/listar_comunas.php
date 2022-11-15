<?php

function getListaCom()
{
    $id = $_POST['id'];
    include '../';
        $regionesM = new regionesModel();
        $listaRegiones = $regionesM->show();
    $lista = "<option value =''>Seleccionar comuna</option>";
    if (mysqli_num_rows($desccomuna) >= 1) {
        while ($row = $desccomuna->fetch_array(MYSQLI_ASSOC)) {
            $lista .= "<option value = '$row[id]'>$row[desc_comuna]</option>";
        }
        $mysqli->close();
    } else {
        $lista .= "<option value = '0'>Error en consulta: $query</option>";
    }
    return $lista;
}
echo getListaCom();
