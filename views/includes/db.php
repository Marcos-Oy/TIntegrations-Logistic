<?php

$conn = mysqli_connect(    
    'makrohard.sytes.net',
    'tpqt2023',
    'pinturillo',
    'tpqt2023'
);
$conn->set_charset('utf8');
if ($conn->connect_errno) {
    echo "Fallo en la conexión con DB: ".mysqli_connect_error();
}
function getConn()
{
    $mysqli = mysqli_connect(
        'makrohard.sytes.net',
        'tpqt2023',
        'pinturillo',
        'tpqt2023'
    );
    if ($mysqli->connect_errno) {
        echo "Fallo en la conexión de comunas con DB: ".mysqli_connect_error();
    }
    $mysqli->set_charset('utf8');
    return $mysqli;
}