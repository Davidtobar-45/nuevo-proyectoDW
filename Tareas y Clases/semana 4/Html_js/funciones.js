function saludar() {
  const nombre = document.getElementById("nombre").value;
  document.getElementById("saludo").textContent = "Mi nombre es: " + nombre;
  console.log("Saludo:  " + nombre);
}

function verificarParImpar() {
  const valor = document.getElementById("numero").value.trim();

  // Validar que solo contenga números (y opcionalmente un signo negativo)
  if (!/^-?\d+$/.test(valor)) {
    document.getElementById("resultado").textContent = "Error: No es un número válido.";
    console.log("Par o Impar: Entrada no válida");
    return;
  }

  const numero = parseInt(valor);
  const resultado = (numero % 2 === 0) ? "par" : "impar";
  document.getElementById("resultado").textContent = "El número " + numero + " es " + resultado + ".";
  console.log("Par o Impar: El número " + numero + " es " + resultado);
}
