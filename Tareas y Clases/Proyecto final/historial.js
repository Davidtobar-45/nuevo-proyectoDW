function generarRecomendaciones(historial, catalogo) {
  const vistos = new Set(historial);
  return catalogo.filter(p => !vistos.has(p.id) && p.genero === historial[0].genero);
}
