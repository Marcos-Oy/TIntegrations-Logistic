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
$mysqli = getConn();
/*
$query = "select idcomuna, nombre from comunas";
$mysqli = getConn();
$result = $mysqli->query($query);
if (mysqli_num_rows($result) >= 1) {
    foreach ($result as $row) {
        $update = "update comunas set nombre = '" . ucwords(strtolower($row['nombre'])) . "' where idcomuna = " . $row['idcomuna'];
        echo $update ."<br>";
        $resultado = $mysqli->query($update);
        $actual = "select idcomuna, nombre from comunas where idcomuna = " . $row['idcomuna'] ;
        $res = $mysqli->query($actual);
        if (mysqli_num_rows($res) >= 1) {
            foreach ($res as $r){
                echo $r['idcomuna']." - " . $r['nombre']. "<br>";
            }
        } else {
            echo "Error al actualizar comuna " . $row['nombre'] . " - " . $row['idcomuna']. "<br>";
        }
    }
}*/

$prueba = "insert into pruebaid values (null,'PruebaPHP')";
$contador = 0;
while ($contador <= 4294967295) {
    $insert = $mysqli->query($prueba);
    if ($insert == true) {
        echo "OK ";
    }
   // echo $prueba;
    echo $contador . "<br>";
    $contador = $contador + 1;
}


// ucwords(strtolower())
