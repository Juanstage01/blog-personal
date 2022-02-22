<?php
include "./createdb.php";

// $oMySql = new MySQL();
// $oMySql->execStrQueryOB($oMySql->$sqlCDB); 
// $oMySql->conBDOB(); 
// $oMySql->$sqlCDB1;
// $oMySql->frenar();


// AQUI PODRAS CREAR LA BASE DE DATOS JUNTO CON SU TABLA,primero para crear db,ahi que eliminar el nombre de la conexion, y luego insertarla para la tabla

$oConBD = new mysqli("localhost", "root", "","pruebas");
if ($oConBD->connect_error) {
    echo "Error al conectar a la base de datos: " . $oConBD->connect_error . "\n";
    return false;
}
echo "Conexión exitosa..." . "\n";


// $query ="CREATE DATABASE pruebas";

$query = "
CREATE TABLE bbddblog (
    Id                              INT(11)      UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    Titulo                          VARCHAR(45)  NOT NULL,
    Fecha                           DATETIME     NOT NULL,
    Comentario                      TEXT         NOT NULL,
    Imagen                          VARCHAR(25)  NOT NULL
)
";

if ($oConBD && $query != '') {
    echo "query contiene algo \n";
    if ($oConBD->query($query) === true) {
        echo "Consulta ejecutada \n";
    } else {
        echo "Error al ejecutar consulta " . $oConBD->error . "\n";
    }
    $oConBD->close();
}
