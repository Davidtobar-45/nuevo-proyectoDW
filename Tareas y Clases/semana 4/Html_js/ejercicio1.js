function saludar() {
  const nombre = document.getElementById("nombre").value;
  document.getElementById("saludo").textContent = "Mi nombre es: " + nombre;
  console.log("Saludo:  " + nombre);
}
