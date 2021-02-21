<?php
//Obteniendo los datos del triangulo
$base = $_POST["base"];
$altura = $_POST["altura"];

//Calculando las propiedades
$area = $base * $altura;
$hipotenusa = sqrt(pow($base,2) + pow($altura,2));
$perimetro = $base + $altura + $hipotenusa;

//Verificando la opción
$resultado;
$mostrar;

$opcion = $_POST["operacion"];
switch ($opcion) {
  case 'area':
    $resultado = $area;
    $mostrar = "Area";
    break;
  case 'perimetro':
    $resultado = $perimetro;
    $mostrar = "Perimetro";
    break;
  case 'hipotenusa':
    $resultado = $hipotenusa;
    $mostrar = "Hipotenusa";
    break;
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
  <title>Ejercicio 5</title>
</head>
<body>
  <header>
    <h2>Operaciones con el triangulo rectangulo 📐</h2>
  </header>
  <main>
    <section>
      <table>
        <caption>Resultados</caption>
        <tr">
          <th>Base</th>
          <th>Altura</th>
          <th>Operación</th>
          <th>Resultado</th>
        </tr>
        <tr>
          <td><strong><?=$base?> mm</td>
          <td><strong><?=$altura?> mm</td>
          <td><strong class="adicionales"><?=$mostrar?></td>
          <td><strong class="adicionales"><?=number_format($resultado,1) ?></td>
        </tr>
      </table>
    </section>
  </main>
  <footer>
    <p>Design by Daniels 🚀</p>
  </footer>
</body>
</html>