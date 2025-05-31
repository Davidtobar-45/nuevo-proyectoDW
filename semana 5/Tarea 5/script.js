// Proyecto 1: Notas
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

// Proyecto 2: Secuencia 3n + 1
document.getElementById('calculate').addEventListener('click', function() {
  const input = document.getElementById('number');
  const resultDiv = document.getElementById('result');
  const seriesDiv = document.getElementById('series');
  const stepsP = document.getElementById('steps');

  const number = parseInt(input.value);
  if (isNaN(number) || number < 1) {
    alert('Por favor ingrese un número entero positivo válido.');
    return;
  }

  let current = number;
  let series = [current];
  let steps = 0;

  while (current !== 1) {
    if (current % 2 === 0) {
      current = current / 2;
    } else {
      current = (3 * current) + 1;
    }
    series.push(current);
    steps++;
  }

  seriesDiv.textContent = "Secuencia: " + series.join(' → ');
  stepsP.textContent = `El número es ${number % 2 === 0 ? 'par' : 'impar'}. Pasos: ${steps}`;
  resultDiv.style.display = 'block';
});

// Proyecto 3: Efecto 3D
let container = document.querySelector('.gato');

window.addEventListener('mousemove', (e) => {
  let x = e.pageX;
  let y = e.pageY;

  container.style.animation = "none";
  container.style.transform = `rotateY(${x % 360}deg) rotateX(${y % 360}deg)`;
});

window.addEventListener('mouseout', () => {
  container.style.animation = "animate 45s linear infinite";
});

window.addEventListener("touchmove", (e) => {
  let x = e.touches[0].pageX;
  let y = e.touches[0].pageY;

  container.style.animation = "none";
  container.style.transform = `rotateY(${x % 360}deg) rotateX(${y % 360}deg)`;
});

window.addEventListener('touchend', () => {
  container.style.animation = "animate 45s linear infinite";
});

container.addEventListener('mouseover', () => {
  document.querySelector('.love').style.opacity = "1";
});
