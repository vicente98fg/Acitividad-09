<?php
require "./../src/Jugador.php";

$j=new Jugador();

$j->conectar();
$j->listarJugadores($codigo,$nombre,$procedencia,$altura,$peso,$posicion,$nombre_equipo);



?>


<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" media="screen" href="./css/nba.css">
  <script src="main.js"></script>
</head>
<body>
  
<?php include "./assets/navSup.php"; ?>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

<table>
  <tr>
    <td><b>Codigo</b></td>
    <td><b>Nombre</b></td>
    <td><b>Procedencia</b></td>
    <td><b>Altura</b></td>
    <td><b>Peso</b></td>
    <td><b>Posicion</b></td>
    <td><b>Nombre Equipo</b></td>
  </tr>

  <?php
    foreach ($resultado as $jugadores) {
      echo "<tr>";
      echo "<td>".$jugadores['codigo']."</td>";
      echo "<td>".$jugadores['Nombre']."</td>";
      echo "<td>".$jugadores['Procedencia']."</td>";
      echo "<td>".$jugadores['Altura']."</td>";
      echo "<td>".$jugadores['Peso']."</td>";
      echo "<td>".$jugadores['Posicion']."</td>";
      echo "<td>".$jugadores['Nombre_equipo']."</td>";
      echo "</tr>";
    }

  ?>

</table>


</body>
</html>