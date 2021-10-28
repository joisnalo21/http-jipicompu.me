<?php
include("dll/config.php");
include("dll/class_mysqli_7.php");

$miconexion = new clase_mysqli7;
$miconexion->conectar(DBHOST, DBUSER, DBPASS, DBNAME);

$miconexion->consulta("update inscritos set nombres='Juan Jaramillo Perez' where id=15");
echo "<script>location.href='inscritos.php'</script>";
?>
