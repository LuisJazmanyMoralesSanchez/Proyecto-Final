
<?php
//conexion a la base de datos
$servidor='localhost';
$usuario='root';
$password='';
$base_datos='medicdb';
$conection= new mysqli($servidor,$usuario,$password,$base_datos);

//validadmos los datos obtenidos
$NombreB=$_POST['NombreB'];
$NombreE=$_POST['NombreE'];
$NombreAN=$_POST['NombreAN'];
$NombreAA=$_POST['NombreAA'];

$Opcion=$_POST['Opc'];

//imprimir datos de la opcion selecionada
echo 'Buscar: '.$NombreB.'<br>';
echo 'Eliminar: '.$NombreE.'<br>';
echo 'Actualizar Nombre: '.$NombreAN.'<br>';
echo 'Nombre anterior: '.$NombreAA.'<br>';
echo 'Opcion: '.$Opcion.'<br>';

//preparamos las opciones
if($Opcion=="Buscar"){//buscar por nombre

  $consulta="SELECT * FROM paciente WHERE Nombre='$NombreB'";
  $result=mysqli_query($conection,$consulta);
  while ($mostrar=mysqli_fetch_array($result)) {
  //Aqui ejecutaremos esa orden

?>
<!-- Creamos una tabla para mostrar los datos-->
<table style="background:lightskyblue; width:40%; border-collapse:collapse;" >
  <caption style="text-align:center; background:blue; color: #fff;">Resultados</caption>
  <tr style="border: 1px solid indigo;">
    <th style="border: 1px solid indigo;">Numero</th>
    <th style="border: 1px solid indigo;">Nombre</th>
    <th style="border: 1px solid indigo;">Direccion</th>
    <th style="border: 1px solid indigo;">Fecha Naciemiento</th>
    <th style="border: 1px solid indigo;">Sexo</th>
    <th style="border: 1px solid indigo;">Telefono</th>
  </tr>
  <tr style="border: 1px solid indigo;">
    <td style="border: 1px solid indigo;"><?php echo $mostrar['Id_Pac'] ?></td>
    <td style="border: 1px solid indigo;"><?php echo $mostrar['Nombre'] ?></td>
    <td style="border: 1px solid indigo;"><?php echo $mostrar['Direccion'] ?></td>
    <td style="border: 1px solid indigo;"><?php echo $mostrar['Fecha_Nmto'] ?></td>
    <td style="border: 1px solid indigo;"><?php echo $mostrar['Sexo'] ?></td>
    <td style="border: 1px solid indigo;"><?php echo $mostrar['Telefono'] ?></td>
  </tr>
  <?php
}

}//termina el primer if de la busqueda

if($Opcion=="Actualizar"){//Actualiza el nombre de un paciente

  $consulta="UPDATE paciente SET Nombre='$NombreAN' WHERE Nombre='$NombreAA'";

  if (mysqli_query($conection,$consulta)) {
  echo "<p>Registro actualizado correctamente.</p>";
  } else {
  echo "<p>No se agregó...</p>";
  }

  $sql="SELECT * FROM paciente";
  $result=mysqli_query($conection,$sql);
  while ($mostrar=mysqli_fetch_array($result)) {
  //Aqui ejecutaremos esa orden

?>
<!-- Creamos una tabla para mostrar los datos-->
<table style="background:lightskyblue; width:40%; border-collapse:collapse;" >
  <caption style="text-align:center; background:blue; color: #fff;">Resultados</caption>
  <tr style="border: 1px solid indigo;">
    <th style="border: 1px solid indigo;">Numero</th>
    <th style="border: 1px solid indigo;">Nombre</th>
    <th style="border: 1px solid indigo;">Direccion</th>
    <th style="border: 1px solid indigo;">Fecha Naciemiento</th>
    <th style="border: 1px solid indigo;">Sexo</th>
    <th style="border: 1px solid indigo;">Telefono</th>
  </tr>
  <tr style="border: 1px solid indigo;">
    <td style="border: 1px solid indigo;"><?php echo $mostrar['Id_Pac'] ?></td>
    <td style="border: 1px solid indigo;"><?php echo $mostrar['Nombre'] ?></td>
    <td style="border: 1px solid indigo;"><?php echo $mostrar['Direccion'] ?></td>
    <td style="border: 1px solid indigo;"><?php echo $mostrar['Fecha_Nmto'] ?></td>
    <td style="border: 1px solid indigo;"><?php echo $mostrar['Sexo'] ?></td>
    <td style="border: 1px solid indigo;"><?php echo $mostrar['Telefono'] ?></td>
  </tr>
  <?php
}

}//termina el segundo if de la actualizacion

if($Opcion=="Eliminar"){//Elimina el nombre de un paciente

  $consulta="DELETE FROM paciente WHERE Nombre='$NombreE'";

  if (mysqli_query($conection,$consulta)) {
  echo "<p>Registro borrado correctamente.</p>";
  } else {
  echo "<p>No se borro..</p>";
  }

  $sql="SELECT * FROM paciente";
  $result=mysqli_query($conection,$sql);
  while ($mostrar=mysqli_fetch_array($result)) {
  //Aqui ejecutaremos esa orden

?>
<!-- Creamos una tabla para mostrar los datos-->
<table style="background:lightskyblue; width:40%; border-collapse:collapse;" >
  <caption style="text-align:center; background:blue; color: #fff;">Resultados</caption>
  <tr style="border: 1px solid indigo;">
    <th style="border: 1px solid indigo;">Numero</th>
    <th style="border: 1px solid indigo;">Nombre</th>
    <th style="border: 1px solid indigo;">Direccion</th>
    <th style="border: 1px solid indigo;">Fecha Naciemiento</th>
    <th style="border: 1px solid indigo;">Sexo</th>
    <th style="border: 1px solid indigo;">Telefono</th>
  </tr>
  <tr style="border: 1px solid indigo;">
    <td style="border: 1px solid indigo;"><?php echo $mostrar['Id_Pac'] ?></td>
    <td style="border: 1px solid indigo;"><?php echo $mostrar['Nombre'] ?></td>
    <td style="border: 1px solid indigo;"><?php echo $mostrar['Direccion'] ?></td>
    <td style="border: 1px solid indigo;"><?php echo $mostrar['Fecha_Nmto'] ?></td>
    <td style="border: 1px solid indigo;"><?php echo $mostrar['Sexo'] ?></td>
    <td style="border: 1px solid indigo;"><?php echo $mostrar['Telefono'] ?></td>
  </tr>
  <?php
}

}//termina el tercer if de la Eliminacion

?>
