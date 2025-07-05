// Esperar a que el DOM cargue completamente
document.addEventListener('DOMContentLoaded', function () {

    // Evento para generar tabla de multiplicar
    document.getElementById('btnMult').addEventListener('click', function () {
        const numero = parseInt(document.getElementById('numMult').value);
        let salida = '';
        for (let i = 1; i <= 12; i++) {
            salida += `${numero} x ${i} = ${numero * i}\n`;
        }
        document.getElementById('resultadoMult').textContent = salida;
    });

    // Evento para calcular potencias
    document.getElementById('btnPot').addEventListener('click', function () {
        const base = parseInt(document.getElementById('base').value);
        const exponente = parseInt(document.getElementById('exponente').value);
        let salida = '';
        for (let i = 1; i <= exponente; i++) {
            salida += `${base} ^ ${i} = ${Math.pow(base, i)}\n`;
        }
        document.getElementById('resultadoPot').textContent = salida;
    });

});
