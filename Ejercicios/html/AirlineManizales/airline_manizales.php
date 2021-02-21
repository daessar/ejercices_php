<?php
//Obteniendo datos
$origen = $_POST["origen"];
$destino = $_POST["destino"];
$clase = $_POST["clase"];
$edad = $_POST["edad"];

//Trayectos
$tarifa = 0;
if ($origen == "manizales" && $destino == "neiva" || $origen == "neiva" && $destino == "manizales" ) {
  $tarifa = 347000;
 }
if ($origen == "manizales" && $destino == "pereira" || $origen == "pereira" && $destino == "manizales" ) {
  $tarifa = 360000;
 }
if ($origen == "manizales" && $destino == "pasto" || $origen == "pasto" && $destino == "manizales" ) {
  $tarifa = 380000;
 }
if ($origen == "neiva" && $destino == "pereira" || $origen == "pereira" && $destino == "neiva" ) {
  $tarifa = 375000;
 }
if ($origen == "neiva" && $destino == "pasto" || $origen == "pasto" && $destino == "neiva" ) {
  $tarifa = 392000;
 }
if ($origen == "pereira" && $destino == "pasto" || $origen == "pasto" && $destino == "pereira" ) {
  $tarifa = 408000;
 }

 //Incremento
 
 if ($clase == "turista") {
  $incremento = 0;
  $tipo_clase = "Turista";
}
if ($clase == "primera_clase") {
  $incremento = $tarifa * 0.2;
  $tipo_clase = "Primera Clase";
}
if ($clase == "ejecutivo") {
  $incremento = $tarifa * 0.5;
  $tipo_clase = "Ejecutiva";
}

//Servicios
$servicios = 0;
$tipo_servicio = "";
if (isset($_POST["alimentacion"])) {
  $servicios += 25000;
  $tipo_servicio .= "Alimentación";
}
if (isset($_POST["internet"])) {
  $servicios += 5000;
  $tipo_servicio .= " Internet";
}
if (isset($_POST["maletero"])) {
  $servicios += 4000;
  $tipo_servicio .= " Maletero";
}
if ($tipo_servicio == "") {
  $tipo_servicio = "Ninguno";
}

//Descuento por la edad 
if ($edad >= 30) {
  $descuento = $tarifa * 0.1;
}else{
  $descuento = $tarifa * 0.15;
}

//Total a pagar
$pago_total = $tarifa + $incremento + $servicios - $descuento;
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styleAirline_php.css">
  <title>Ticket boleto</title>
</head>
<body>
  
  <header>
      <div class="header_title">
        <p>Airline Manizales 🛩</p>
      </div>
      <div class="nav_bar">
        <nav>
          <ul>
            <li>Home</li>
            <li>Trip</li>
            <li>About</li>
          </ul>
        </nav>
      </div>
    </header>
    <main>
      <section>
        <?php
          if ($origen == $destino) {
        ?>
        <div class="alert_destino">
          <p>El origen y el destino deben de ser diferentes</p>
        </div>
        <?php }?>
        <div class="container_factura">
          <table>
            <caption>Factura</caption>
            <tr scope="row">
              <th>Cobro</th>
              <th>Detalle</th>
              <th>Valor</th>
            </tr>
            <tr >
              <th>Trayecto</th>
              <td><?=$origen?> - <?=$destino?></td>
              <td class="adiciones">$<?=number_format($tarifa,2)?> COP</td>
            </tr>
            <tr>
              <th>Clase</th>
              <td><?=$tipo_clase?></th>
              <td class="adiciones">$<?=number_format($incremento,2)?> COP</td>
            </tr>
            <tr>
              <th>Servicios</th>
              <td><?=$tipo_servicio?></th>
              <td class="adiciones">$<?=number_format($servicios,2)?> COP</td>
            </tr>
            <tr>
              <th>Descuentos</th>
              <td><?=$edad?> años</th>
              <td class="descuentos">-$<?=number_format($descuento,2)?> COP</td>
            </tr>
            <tr>
              <th colspan="2">Total a pagar</th>
              <td class="adiciones">$<?=number_format($pago_total,2)?> COP</td>
            </tr>
          </table>
        </div>
      </section>
    </main>
    <footer>
      <h3>Design by Daniels🎸</h3>
    </footer>
</body>
</html>