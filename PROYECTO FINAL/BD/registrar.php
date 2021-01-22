<?php

$servidor='localhost';
$usuario='root';
$password='';
$base_datos='medicdb';
$conection= new mysqli($servidor,$usuario,$password,$base_datos);

$Nombre = $_POST["Nombres"];
$Direccion = $_POST["Direccion"];
$Fecha = $_POST["Fecha-Nmto"];
$Telefono = $_POST["Telefono"];
$answer = $_POST['Sexo'];
//$Null='null';


echo 'El siguiente registro esta en proceso <br>';
 echo 'Nombre: '.$Nombre.'<br>';
 echo 'Direccion: '.$Direccion.'<br>';
 echo 'Fecha naciemiento: '.$Fecha.'<br>';
 echo 'Telefono: '.$Telefono.'<br>';

 if ($answer == "M") {
        echo "Sexo: M";
 }
 else {
        echo "Sexo: F";
 }

 //Preparamos la orden SQL
 $consulta = "INSERT INTO paciente
 (Nombre,Direccion,Fecha_Nmto,Sexo,Telefono) VALUES ('$Nombre','$Direccion','$Fecha','$answer','$Telefono')";

 //Aqui ejecutaremos esa orden
 if (mysqli_query($conection,$consulta)) {
 echo "<p>Registro agregado correctamente.</p>";
 } else {
 echo "<p>No se agregó...</p>";
 }

?>
<meta http-equiv="refresh" content="2;url=http://localhost/PROYECTO/home.html">
