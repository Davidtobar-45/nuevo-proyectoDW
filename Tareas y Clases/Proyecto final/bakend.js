// catalogController.js
router.get('/buscar', (req, res) => {
  const { q } = req.query;
  // Simulamos búsqueda
  const resultados = catalogo.filter(item =>
    item.titulo.toLowerCase().includes(q.toLowerCase())
  );
  res.json(resultados);
});
