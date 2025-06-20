// BuscarContenido.jsx
function BuscarContenido() {
  const [query, setQuery] = useState('');
  const [resultados, setResultados] = useState([]);

  const buscar = async () => {
    const res = await fetch(`/buscar?q=${query}`);
    const datos = await res.json();
    setResultados(datos);
  };

  return (
    <div>
      <input onChange={e => setQuery(e.target.value)} />
      <button onClick={buscar}>Buscar</button>
      <ul>
        {resultados.map((item, idx) => (
          <li key={idx}>{item.titulo}</li>
        ))}
      </ul>
    </div>
  );
}
