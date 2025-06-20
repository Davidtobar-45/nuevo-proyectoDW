let notas = [];

function agregarNota() {
  const input = document.getElementById('notaInput');
  const nota = parseFloat(input.value);

  if (isNaN(nota) || nota < 0 || nota > 10) {
    alert('Ingrese una nota válida entre 0 y 10');
    return;
  }

  notas.push(nota);
  input.value = '';
  input.focus();
  mostrarNotas();
}

function mostrarNotas() {
  const lista = document.getElementById('listaNotas');
  lista.innerHTML = '';

  notas.forEach((nota, index) => {
    const div = document.createElement('div');
    div.className = 'nota';
    div.textContent = `Nota ${index + 1}: ${nota}`;
    lista.appendChild(div);
  });
}

function calcularPromedio() {
  if (notas.length === 0) {
    alert('Agregue al menos una nota');
    return;
  }

  const suma = notas.reduce((acc, val) => acc + val, 0);
  const promedio = suma / notas.length;
  const resultado = document.getElementById('resultado');
  resultado.innerHTML = `Promedio: ${promedio.toFixed(2)} - `;

  if (promedio >= 7) {
    resultado.innerHTML += '<span style="color: green;">Aprobado</span>';
  } else {
    resultado.innerHTML += '<span style="color: red;">Reprobado</span>';
  }
}

function resetear() {
  notas = [];
  document.getElementById('listaNotas').innerHTML = '';
  document.getElementById('resultado').innerHTML = '';
  document.getElementById('notaInput').value = '';
  document.getElementById('notaInput').focus();
}
