<?php
require_once "clases/cEmpleado.php";

$objempleados = new cEmpleado();
$lista = $objempleados->consultar();
?>

<table style="border:1px solid #FF0000; color:#000099; width:100%; max-width:500px; border-collapse: collapse;">
  <tr style="background:#99CCCC;">
    <th style="padding:4px; border:1px solid #ccc;">Nombres</th>
    <th style="padding:4px; border:1px solid #ccc;">Departamento</th>
    <th style="padding:4px; border:1px solid #ccc;">Sueldo</th>
  </tr>
  <?php
  if ($lista) {
      while ($ad = $lista->fetch(PDO::FETCH_OBJ)) {
          echo "<tr>";
          echo "<td style='padding:4px; border:1px solid #ccc;'>" . htmlspecialchars($ad->nombre) . "</td>";
          echo "<td style='padding:4px; border:1px solid #ccc;'>" . htmlspecialchars($ad->departamento) . "</td>";
          echo "<td style='padding:4px; border:1px solid #ccc;'>" . htmlspecialchars($ad->sueldo) . "</td>";
          echo "</tr>";
      }
  } else {
      echo "<tr><td colspan='3' style='padding:4px; border:1px solid #ccc;'>No hay empleados registrados.</td></tr>";
  }
  ?>
</table>
