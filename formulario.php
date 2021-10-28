<?php
echo md5("edufin#687");
include("dll/config.php");
include("dll/class_mysqli_7.php");

$miconexion = new clase_mysqli7;
$miconexion->conectar(DBHOST, DBUSER, DBPASS, DBNAME);

$miconexion->consulta("insert into usuarios values('','$name','$correo','$user','$password','$rol')");

$miconexion->consulta("delete from usuarios where id=11");

$miconexion->consulta("update usuarios set nombres='Dario Coronel' where id=4");
$miconexion->consulta("select * from usuarios");
$miconexion->verconsulta();
/*
<?php
include("dll/config.php");
include("dll/class_mysqli_7.php");

$miconexion = new clase_mysqli7;
$miconexion->conectar(DBHOST, DBUSER, DBPASS, DBNAME);

$miconexion->consulta("select * from usuarios");
$miconexion->verconsultacrud();

$miconexion->consulta("select * from usuarios where id=2");
$listaUser=$miconexion->consulta_lista();
echo $listaUser[1]." - ";
echo $listaUser[5];
?>

*/
?>
