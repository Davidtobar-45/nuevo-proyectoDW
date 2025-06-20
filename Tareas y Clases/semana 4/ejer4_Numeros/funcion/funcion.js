function calcular() {
  let n1 = parseFloat(document.getElementById('num1').value);
  let n2 = parseFloat(document.getElementById('num2').value);
  let n3 = parseFloat(document.getElementById('num3').value);
  let n4 = parseFloat(document.getElementById('num4').value);

  let suma1 = n1 + n2;
  let suma2 = n3 + n4;
  let resultadoFinal = suma1 - suma2;

  document.getElementById('resultado').value =
    `(${n1} + ${n2}) - (${n3} + ${n4}) = ${resultadoFinal}`;
}
