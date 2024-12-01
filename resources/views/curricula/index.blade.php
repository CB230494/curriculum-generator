<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Currículums</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #000; /* Fondo negro */
            margin: 0;
            padding: 20px;
            color: #fff; /* Texto blanco */
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            text-align: center;
        }

        .container h1 {
            color: #00aaff;
            margin-bottom: 20px;
        }

        .btn {
            background-color: #00aaff;
            color: #fff;
            text-decoration: none;
            padding: 10px 20px;
            border-radius: 8px;
            display: inline-block;
            margin-bottom: 20px;
            font-size: 16px;
            font-weight: bold;
            text-align: center; /* Asegura que el texto esté centrado */
            transition: background-color 0.3s ease;
        }

        .btn:hover {
            background-color: #0088cc;
        }

        .grid {
            display: flex;
            flex-wrap: wrap;
            gap: 20px; /* Espaciado entre tarjetas */
            justify-content: center;
        }

        .card {
            background-color: #1c1c1c;
            padding: 15px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
            width: 300px; /* Tamaño fijo */
            text-align: left;
            color: #fff;
        }

        .card h1 {
            font-size: 18px;
            color: #00aaff;
            margin-bottom: 10px;
        }

        .card p {
            font-size: 14px;
            margin: 5px 0;
        }

        .card .btn {
            margin: 10px 0 0 0;
            width: 100%; /* Asegurar que los botones estén dentro de los márgenes */
            padding: 8px 0;
            text-align: center; /* Centra el texto del botón */
        }

        .card form {
            margin: 0;
        }

        .card form .btn {
            background-color: #ff4444; /* Rojo para el botón de eliminar */
            text-align: center; /* Centra el texto del botón de eliminar */
        }

        .card form .btn:hover {
            background-color: #cc0000; /* Rojo más oscuro al pasar el cursor */
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Listado de Currículums</h1>
        <a href="{{ route('curricula.create') }}" class="btn">Crear nuevo currículum</a>
        <div class="grid">
            @foreach ($curricula as $curriculum)
                <div class="card">
                    <h1>{{ $curriculum->nombre }}</h1>
                    <p><strong>Email:</strong> {{ $curriculum->email }}</p>
                    <p><strong>Teléfono:</strong> {{ $curriculum->telefono }}</p>
                    <p><strong>Perfil Profesional:</strong> {{ $curriculum->perfil_profesional }}</p>
                    <a href="{{ route('curricula.show', $curriculum->id) }}" class="btn">Ver detalles</a>
                    <form action="{{ route('curricula.destroy', $curriculum->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn">Eliminar</button>
                    </form>
                </div>
            @endforeach
        </div>
    </div>
</body>
</html>
