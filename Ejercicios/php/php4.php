<?php
//Obteniendo los datos de la persona
$peso = $_POST["peso"];
$estatura = $_POST["estatura"];

//Calculando el IMC
$imc = $peso / ($estatura ^ 2);

//Calculando la categoria
if ($imc < 18.5){
  $resultado = "Por debajo del peso";
}else if($imc <= 25 & $imc >= 18.5){
  $resultado = "Saludable";
}else if($imc <= 30 & $imc >= 25){
  $resultado = "Con sobrepeso";
}else if($imc <= 40 & $imc >= 30){
  $resultado = "Obeso";
}else{
  $resultado = "Obesidad Mórbida";
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
  <title>Ejercicio 4</title>
</head>
<body>
  <header>
    <h2>Índice de Masa Corporal 💪🏾🦵🏾</h2>
  </header>
  <main>
    <section>
      <table>
        <caption>Resultados</caption>
        <tr">
          <th>Peso</th>
          <th>Estatura</th>
          <th>IMC</th>
          <th>Estado</th>
        </tr>
        <tr>
          <td><strong><?=$peso?> kg</td>
          <td><strong><?=$estatura?> m</td>
          <td><strong class="adicionales"><?=number_format($imc,1) ?></td>
          <td><strong class="adicionales"><?=$resultado?></td>
        </tr>
      </table>
    </section>
  </main>
  <footer>
    <p>Design by Daniels 🚀</p>
  </footer>
</body>
</html>