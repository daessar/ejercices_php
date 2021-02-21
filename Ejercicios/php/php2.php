<?php
//Obteniendo los datos del vendedor
$nombre_vendedor = $_POST["name_vendedor"];
$celulares_vendidos = $_POST["cel_vendidos"];
$total_ventas = $_POST["total_ventas"];

//Aplicando comisiones
$salario_basico = 300000;
$comision_cel_vendido = $celulares_vendidos * 10000;
$comision_venta_total = $total_ventas * 0.05;

//Pago total
$pago_total = $salario_basico + $comision_cel_vendido + $comision_venta_total;
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
    <p>Total pagar vendedor 🤮</p>
  </header>
  <main>
    <section>
      <table>
        <caption>Facturación</caption>
        <tr">
          <th>Vendedor</th>
          <th>Salario Basico</th>
          <th>Comisión celulares vendidos</th>
          <th>Comisión ventas totales</th>
          <th>Total a pagar</th>
        </tr>
        <tr>
          <td><strong><?=$nombre_vendedor?></td>
          <td><strong>$<?=$salario_basico?> COP</td>
          <td><strong class="adicionales">+$<?=$comision_cel_vendido?> COP</td>
          <td><strong class="adicionales">+$<?=$comision_venta_total?> COP</td>
          <td><strong class="total">$<?=$pago_total?> COP</td>
        </tr>
      </table>
    </section>
  </main>
  <footer>
    <p>Design by Daniels 🚀</p>
  </footer>
</body>
</html>