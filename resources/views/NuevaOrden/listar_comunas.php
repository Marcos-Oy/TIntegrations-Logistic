<?php
function getConn()
{
    $mysqli = mysqli_connect(
        'makrohard.sytes.net',
        'tpqt2023',
        'pinturillo',
        'tpqtpint'
    );
    if ($mysqli->connect_errno) {
        echo "Fallo en la conexión de comunas con DB: " . mysqli_connect_error();
    }
    $mysqli->set_charset('utf8');
    return $mysqli;
}
function getListaCom()
{
    $id = $_POST['id'];
    $mysqli = getConn();
    $query = "CALL comunas_obtener(null,'$id')";
    $result = $mysqli->query($query);
    $lista = "<option value =''>Seleccionar comuna</option>";
    if (mysqli_num_rows($result) >= 1) {
        while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
            $lista .= "<option value = '$row[idcomuna]'>" . ucwords(strtolower($row['nombrecomuna'])) . "</option>";
        }
        $mysqli->close();
    } else {
        $lista .= "<option value = '0'>Error en consulta: $query</option>";
    }
    return $lista;
}
echo getListaCom();
