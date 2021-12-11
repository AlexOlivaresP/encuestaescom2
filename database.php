<?php
// PHP Data Objects(PDO) Sample Code:
try {
    $conexion = new PDO("sqlsrv:server = tcp:escom.database.windows.net,1433; Database = escom", "escom", "Empanada123?");
    $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e) {
    print("Error connecting to SQL Server.");
    die(print_r($e));
}

// SQL Server Extension Sample Code:
$connectionInfo = array("UID" => "escom", "pwd" => "Empanada123?", "Database" => "escom", "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
$serverName = "tcp:escom.database.windows.net,1433";
$conexion = sqlsrv_connect($serverName, $connectionInfo);
?>
