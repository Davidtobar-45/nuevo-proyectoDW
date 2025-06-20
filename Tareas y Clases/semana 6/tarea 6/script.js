// JavaScript obligatorio para la interacción del párrafo con ID "especial"
document.addEventListener('DOMContentLoaded', () => {
  const especial = document.getElementById('especial');
  especial.addEventListener('click', () => {
    alert('¡Has hecho clic en el párrafo con ID "especial"!');
  });
});
