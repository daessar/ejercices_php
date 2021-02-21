<?php
//Obteniendo los datos del candidato
$nombre_candidato = $_POST["name_candidato"];
$num_preguntas_test = $_POST["num_preguntas"];
$num_preguntas_buenas = $_POST["preguntas_buenas"];

//Calculando el porcentaje de preguntas buenas
$porcentaje_correctas = ($num_preguntas_buenas / $num_preguntas_test) * 100;

//Calculando el rango de calificación;
if ($porcentaje_correctas >= 90){
  $resultado = "Nivel Máximo";
}else if($porcentaje_correctas >= 75 & $porcentaje_correctas <= 90){
  $resultado = "Nivel Medio";
}else if($porcentaje_correctas >= 50 & $porcentaje_correctas <= 75){
  $resultado = "Nivel Regular";
}else{
  $resultado = "Fuera de nivel ❌";
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
  <title>Ejercicio 3</title>
</head>
<body>
  <header>
    <p>Resultado test entrevista trabajo 👷🏾‍♂️</p>
  </header>
  <main>
    <section>
      <table>
        <caption>Candidato</caption>
        <tr">
          <th>Nombre</th>
          <th>Total de preguntas</th>
          <th>Preguntas correctas</th>
          <th>Porcentaje acertado</th>
          <th>calificación</th>
        </tr>
        <tr>
          <td><strong><?=$nombre_candidato?></td>
          <td><strong><?=$num_preguntas_test?></td>
          <td><strong class="adicionales"><?=$num_preguntas_buenas?></td>
          <td><strong class="adicionales"><?=number_format($porcentaje_correctas,1) ?> %</td>
          <td><strong class="total"><?=$resultado?></td>
        </tr>
      </table>
    </section>
  </main>
  <footer>
    <p>Design by Daniels 🚀</p>
  </footer>
</body>
</html>