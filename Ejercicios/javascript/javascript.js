function habilitar(value) {
  if (value == "1") {
    document.getElementById("input_valor_1").style.display = "block";
    document.getElementById("input_valor_2").style.display = "none";
    document.getElementById("input_valor_3").style.display = "none";
  } else if (value == "2") {
    document.getElementById("input_valor_1").style.display = "block";
    document.getElementById("input_valor_2").style.display = "block";
    document.getElementById("input_valor_3").style.display = "none";
  } else {
    document.getElementById("input_valor_1").style.display = "block";
    document.getElementById("input_valor_2").style.display = "block";
    document.getElementById("input_valor_3").style.display = "block";
  }
}
