<?php
//Obteniendo el salario mensual
$salario_mensual = $_POST["salario"];

//Descuentos al contratista
$retencion_fuente = $salario_mensual * 0.1;
$base_cotizacion = $salario_mensual * 0.4;
$salud = $base_cotizacion * 0.125;
$pension = $base_cotizacion * 0.16;
$valor_pagado = $salario_mensual - ($retencion_fuente + $salud + $pension);
//Formato de moneda
setlocale(LC_MONETARY,"es_CO");
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/style_ejercices_php.css">
  <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap"
      rel="stylesheet"
    />
  <title>Ejercicio 1</title>
</head>
<body>
  <header>
    <p>Contrato de prestación de servicios 🤮</p>
  </header>
  <main>
    <section>
      <table>
        <tr">
          <th>Salario Mensual</th>
          <th>Retención en la fuente</th>
          <th>Aportes a salud</th>
          <th>Aportes a pensión</th>
          <th>Total a pagar</th>
        </tr>
        <tr>
          <td><strong>$<?=$salario_mensual?> pesos</td>
          <td><strong class="descuentos">-$<?=$retencion_fuente?> pesos</td>
          <td><strong class="descuentos">-$<?=$salud?> pesos</td>
          <td><strong class="descuentos">-$<?=$pension?> pesos</td>
          <td><strong class="total">$<?=$valor_pagado?> pesos</td>
        </tr>
      </table>
    </section>
  </main>
  <footer>
    <p>Design by Daniels 🚀</p>
  </footer>
</body>
</html>