<?php
include("../includes/db.php");
function getListaCom()
{
    $id = $_POST['id'];
    $mysqli = getConn();
    $query = "CALL listarComunas('$id')";
    $result = $mysqli->query($query);
    $lista = "<option value =''>Seleccionar comuna</option>";
    if (mysqli_num_rows($result) >= 1) {
        while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
            $lista .= "<option value = '$row[id]'>$row[desc_comuna]</option>";
        }
        $mysqli->close();
    } else {
        $lista .= "<option value = '0'>Error en consulta: $query</option>";
    }
    return $lista;
}
echo getListaCom();
