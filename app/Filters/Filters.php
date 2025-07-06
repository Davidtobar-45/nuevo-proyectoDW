public $aliases = [
    'auth' => \App\Filters\Auth::class,
    // otros filtros
];

public $globals = [
    'before' => [
        // protege rutas específicas con filtro 'auth' si quieres globalmente
    ],
];
