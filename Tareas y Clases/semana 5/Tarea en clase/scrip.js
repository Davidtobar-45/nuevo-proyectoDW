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

    seriesDiv.textContent = series.join(' → ');
    stepsP.textContent = `El número es ${number % 2 === 0 ? 'par' : 'impar'}.`;
    resultDiv.style.display = 'block';
});
