function agregar(valor) {
  document.getElementById('pantalla').value += valor;
}

function limpiar() {
  document.getElementById('pantalla').value = '';
}

function borrar() {
  let pantalla = document.getElementById('pantalla');
  pantalla.value = pantalla.value.slice(0, -1);
}

function calcular() {
  try {
    let resultado = eval(document.getElementById('pantalla').value);
    document.getElementById('pantalla').value = resultado;
  } catch (e) {
    alert("Expresión inválida");
  }
}
