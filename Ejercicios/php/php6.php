<?php
//Obteniendo el valor de los pares
$valor_par1 = $_POST["valor_par1"];
$valor_par2 = $_POST["valor_par2"];
$valor_par3 = $_POST["valor_par3"];

//Verificando la opción

//Si solo lleva un par
if ($_POST["select_pares"] == "1") {
  $valor_total_pagar = $valor_par1;
  $cantidad = 1;
  $descuento = "No";
  //Si lleva dos pares
}else if ($_POST["select_pares"] == "2") {
  $cantidad = 2;
  $descuento = "Si";
  if ($valor_par1 > $valor_par2) {
    $valor_total_pagar = $valor_par1 + ($valor_par2 / 2);
  }else{
    $valor_total_pagar = $valor_par2 + ($valor_par1 / 2);
  }
  //Si lleva tres pares
}else{
  $cantidad = 3;
  $descuento = "Si";
  if ($valor_par1 > $valor_par3 & $valor_par2 > $valor_par3) {
    $valor_total_pagar = $valor_par1 + $valor_par2;
  }else if($valor_par1 > $valor_par2 & $valor_par3 > $valor_par2){
    $valor_total_pagar = $valor_par2 + $valor_par1;
  }else{
  $valor_total_pagar = $valor_par3 + $valor_par2;
  }
}
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
  <title>Ejercicio 6</title>
</head>
<body>
  <header>
    <h2>Nike store 👟</h2>
  </header>
  <main>
    <section>
      <table>
        <caption>Facturación</caption>
        <tr">
          <th>Cantidad de pares</th>
          <th>Descuento</th>
          <th>Valor a pagar</th>
        </tr>
        <tr>
          <td><strong><?=$cantidad?> pares</strong></td>
          <td><strong><?=$descuento?></strong></td>
          <td><strong class="adicionales">$<?=number_format($valor_total_pagar,1)?> pesos</strong></td>
        </tr>
      </table>
    </section>
  </main>
  <footer>
    <p>Design by Daniels 🚀</p>
  </footer>
</body>
</html>