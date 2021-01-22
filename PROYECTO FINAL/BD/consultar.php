<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <style media="screen">
    * {
      box-sizing: border-box;
    }

form{
  margin: 10px;
}
    .body-consulta{
      margin: 0;
      font-family: sans-serif;
      background: #204862;
      /*background-image:*/
      background-image: linear-gradient(to left, 120deg, #84fab0 0%, #8fd3f4 100%);
    background-image: linear-gradient(to right, #43e97b 0%, #38f9d7 100%);
    }
 h1{
     color: #FFF;
     text-align: center;
 }
    .conenedor-inputs{
      /*padding: 10px 30px;*/
      width: 96%;
      float: left;
      margin: 16px;
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
      border: 1px solid gray;
      background: #9999CC;
      padding: 5px;
      border-radius: 5px;
      font-family: arial black;
    }
    input{
      margin-bottom: 15px;
      padding: 8px;
      font-size: 16px;
      border-radius: 3px;
      border: 2px solid lightskyblue;
    }

    .btn-enviar{
      background: cornflowerBlue;
      color: #fff;
    }

    table {
        width: 100%;
        border-collapse: collapse;
      }

      th {
        background: #333;
        color: white;
        font-weight: bold;
        padding: 6px;
        border: 1px solid indigo;
        text-align: center;
      }
      td, tr {
        background: rgba(221,160,221);
        padding: 6px;
        border: 1px solid indigo;
        text-align: center;
      }

    </style>
    <!-- link rel="stylesheet" href="../CSS/EstiloForm.css"-->
    <meta charset="utf-8">
    <title>Consulta de pacientes</title>
  </head>
  <body class="body-consulta">
    <h1>Tabla de consultas de pacientes del consultorio médico</h1>

      <?php
      $servidor='localhost';
      $usuario='root';
      $password='';
      $base_datos='medicdb';
      $conection= new mysqli($servidor,$usuario,$password,$base_datos);
      ?>
      <div class="">
        <form class="" action="operaciones.php" method="post">

        <div class="conenedor-inputs">
          <h3 style="font-family:verdana;">Realizar una búsqueda especifica</h3>
          Nombre<input type="text" name="NombreB" >
          <input type="submit" name="Opc" value="Buscar" class="btn-enviar">
        </div><br>
        <div class="conenedor-inputs">
          <h3 style="font-family:verdana;">Eliminar registro de paciente</h3>
          Nombre<input type="text" name="NombreE" >
          <input type="submit" name="Opc" value="Eliminar" class="btn-enviar">
        </div><br>
        <div class="conenedor-inputs">
          <h3 style="font-family:verdana;">Actualizar registro de paciente</h3>
          Nombre Nuevo<input type="text" name="NombreAN" > Nombre Actual<input type="text" name="NombreAA" >
          <input type="submit" name="Opc" value="Actualizar" class="btn-enviar">
        </div><br>
        </form>
      <table >
        <caption style="text-align:center; background:blue; color: #fff;">Resultados</caption>
        <tr>
          <th>Número</th>
          <th>Nombre</th>
          <th>Dirección</th>
          <th>Fecha Nacimiento</th>
          <th>Sexo</th>
          <th>Teléfono</th>
        </tr>

        <?php
        $sql="SELECT * FROM paciente";
        $result=mysqli_query($conection,$sql);
        while ($mostrar=mysqli_fetch_array($result)) {
          // code...
          ?>
          <tr>
            <td><?php echo $mostrar['Id_Pac'] ?></td>
            <td><?php echo $mostrar['Nombre'] ?></td>
            <td><?php echo $mostrar['Direccion'] ?></td>
            <td><?php echo $mostrar['Fecha_Nmto'] ?></td>
            <td><?php echo $mostrar['Sexo'] ?></td>
            <td><?php echo $mostrar['Telefono'] ?></td>
          </tr>
          <?php
        }
        ?>

      </table>
      </div>
  </body>
</html>
