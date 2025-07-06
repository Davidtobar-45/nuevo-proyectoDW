document.addEventListener('DOMContentLoaded', () => {
    let contador = 0;

    const contadorSpan = document.getElementById('contador');
    const btnClick = document.getElementById('btnClick');
    const btnReset = document.getElementById('btnReset');

    btnClick.addEventListener('click', () => {
        contador++;
        contadorSpan.textContent = contador;
    });

    btnReset.addEventListener('click', () => {
        contador = 0;
        contadorSpan.textContent = contador;
    });
});
