<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <style media="screen">
    * {
      box-sizing: border-box;
    }
    .body-registro{
      margin: 0;
      font-family: sans-serif;
      background: #204862;
      background-image: url(../IMAGENES/online.png);
    }


    h1{
      color: #fff;
      text-align: center;
    }

    .form-registro{
      width: 95%;
      max-width: 500px;
      margin: auto;
      background: Aquamarine;
      border-radius: 7px;
    }

    .form-titulo{
      background: deepskyblue;
      color: #fff;
      padding: 10px;
      text-align: center;
      font-weight: 100;
      font-size: 30px;
      border-top-left-radius: 7px;
      border-top-right-radius: 7px;
      border-bottom: 5px solid crimson;
    }
    .conenedor-inputs{
      padding: 10px 30px;
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
    }
    input{
      margin-bottom: 15px;
      padding: 8px;
      font-size: 16px;
      border-radius: 3px;
      border: 2px solid lightskyblue;
    }
    .cuadr-chico{
      width: 38%;
    }
    .cuadr-gran{
      width: 100%;
    }
    .btn-enviar{
      background: cornflowerBlue;
      color: #fff;
    }
    .rec-sexo{
      background: #blue;
      color: blue;
      border: 2px solid lightskyblue;
      width: 100%;
      justify-content:space-between;
      margin-bottom: 15px;
      padding: 5px;
      font-size: 16px;
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
    <!-- link rel="stylesheet" href="../CSS/EstiloForm.css"--->
    <title>Formulario de registro</title>
  </head>
  <body class="body-registro">
    <h1>Formulario de registro para una consulta médica</h1>
          <!-- Formulario para e registro de los pacientes -->
      <form name="formulario" action="BD/registrar.php" method="post" class="form-registro" onsubmit="return comprobar()">

        <h2 class="form-titulo">Rellena los campos con sus datos personales</h2>
        <!-- Contendra los campos solicitados -->
        <div class="conenedor-inputs">
          <p>Nombre y apellidos</p>
          <input type="text" name="Nombres" placeholder="Escriba su nombre y apellidos" class="cuadr-gran" required>
          <p>Dirección</p>
          <input type="text" name="Direccion" placeholder="Escriba su dirección" class="cuadr-gran" required>
          <p>Fecha de nacimiento</p>
          <input type="date" name="Fecha-Nmto" placeholder="Escriba su fecha de nacimiento" class="cuadr-chico" required>
          <div class="rec-sexo">
            <!-- cuadro del genero de la persona a registrarse -->
            <p>Sexo
            <input type="radio" name="Sexo" value="M"/>Masculino
            <input type="radio" name="Sexo" value="F"/>Femenino </p>
          </div>
          <p>Teléfono</p>
          <input type="text" name="Telefono" placeholder="Escriba su número de teléfono" class="cuadr-gran" required>
          <!-- Boton de envio -->
          <input type="submit" name="Registrar" value="Registrar" class="btn-enviar">

        </div>
      </form><!--Cierre del formulario -->

        <!-- Validacion de un radio botones tomar el valor seleccionado -->
      <script type="text/javascript">
      function comprobar() {
       var pulsado = false;//variable de comprobación
       var opciones = document.formulario.Sexo; //array de elementos
       var elegido = -1; //número del elemento elegido en el array
       for (i=0;i<opciones.length;i++) { //bucle de comprobación
             if (opciones[i].checked == true) {
             pulsado = true
             elegido = i //número del elemento elegido en el array
             }
           }
       if (pulsado == true) { //mensaje de formulario válido
          miOpcion = opciones[elegido].value
          //alert("Has elegido la opción: " + miOpcion + "\n El formulario ha sido enviado.")
          }
       else { //mensaje de formulario no válido.
          alert("no has elegido ninguna opción. \n Elige una opción para que el formulario pueda ser enviado")
          return false //el formulario no se envía.
          }
       }
      </script>
  </body>
</html>
