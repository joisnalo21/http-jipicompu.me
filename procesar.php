<?php
$nombres=$_POST["nombres"];
$correo=$_POST["correo"];
$dni=$_POST["dni"];
$pais=$_POST["pais"];
$ciudad=$_POST["ciudad"];
$profesion=$_POST["profesion"];

include("dll/config.php");
include("dll/class_mysqli_7.php");

$miconexion = new clase_mysqli7;
$miconexion->conectar(DBHOST, DBUSER, DBPASS, DBNAME);

$miconexion->consulta("insert into inscritos values('','$nombres','$correo','$dni','$pais','$ciudad','$profesion')");
echo "<script>location.href='inscritos.php'</script>";
?>
