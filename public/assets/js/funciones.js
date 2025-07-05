document.addEventListener('DOMContentLoaded', function () {
    // Obtener elementos de la tabla de multiplicar
    const btnMultiplicar = document.getElementById('btnMultiplicar');
    const inputMultiplicar = document.getElementById('numeroMultiplicar');
    const resultadoMultiplicar = document.getElementById('resultadoMultiplicar');

    // Cuando se hace clic en el botón "Generar Tabla"
    btnMultiplicar.addEventListener('click', function () {
        const numero = parseInt(inputMultiplicar.value);  // Leer número ingresado
        resultadoMultiplicar.innerHTML = "";  // Limpiar resultados anteriores

        // Crear la tabla del 1 al 12
        for (let i = 1; i <= 12; i++) {
            resultadoMultiplicar.innerHTML += `${numero} x ${i} = ${numero * i}<br>`;
        }
    });

    // Obtener elementos para calcular potencias
    const btnPotencia = document.getElementById('btnPotencia');
    const inputBase = document.getElementById('base');
    const inputExponente = document.getElementById('exponente');
    const resultadoPotencia = document.getElementById('resultadoPotencia');

    // Cuando se hace clic en el botón "Calcular"
    btnPotencia.addEventListener('click', function () {
        const base = parseInt(inputBase.value);  // Leer base
        const exponente = parseInt(inputExponente.value);  // Leer exponente
        resultadoPotencia.innerHTML = "";  // Limpiar resultados anteriores

        // Calcular potencias desde 1 hasta el exponente
        for (let i = 1; i <= exponente; i++) {
            resultadoPotencia.innerHTML += `${base} ^ ${i} = ${Math.pow(base, i)}<br>`;
        }
    });
});
