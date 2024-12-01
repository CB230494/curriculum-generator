<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalle del Currículum</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #000; /* Fondo negro */
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center; /* Centrar horizontalmente */
            align-items: center; /* Centrar verticalmente */
            height: 100vh; /* Altura completa */
        }

        .detail-container {
            background-color: #1c1c1c; /* Fondo gris oscuro */
            padding: 30px;
            border-radius: 15px; /* Bordes redondeados */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3); /* Sombra */
            max-width: 600px;
            width: 100%;
            text-align: center; /* Centrar el texto dentro del contenedor */
        }

        .detail-container h1 {
            color: #00aaff; /* Azul brillante */
            margin-bottom: 20px;
        }

        .detail-container p {
            margin: 10px 0;
            font-size: 16px;
            line-height: 1.5;
            text-align: left; /* Alinear el texto a la izquierda */
            color: #fff; /* Texto blanco */
        }

        .detail-container p strong {
            color: #00aaff; /* Azul brillante para los títulos */
        }

        .detail-container a {
            display: inline-block;
            margin-top: 20px;
            background-color: #00aaff;
            color: #fff;
            text-decoration: none;
            padding: 10px 20px;
            border-radius: 8px;
            font-size: 14px;
            font-weight: bold;
            transition: background-color 0.3s ease;
        }

        .detail-container a:hover {
            background-color: #0088cc; /* Azul más oscuro al pasar el cursor */
        }
    </style>
</head>
<body>
    <div class="detail-container">
        <h1>{{ $curriculum->nombre }}</h1>
        <p><strong>Email:</strong> {{ $curriculum->email }}</p>
        <p><strong>Teléfono:</strong> {{ $curriculum->telefono }}</p>
        <p><strong>Perfil Profesional:</strong> {{ $curriculum->perfil_profesional }}</p>
        <p><strong>Habilidades:</strong> {{ $curriculum->habilidades }}</p>
        <p><strong>Experiencia Laboral:</strong> {{ $curriculum->experiencia_laboral }}</p>
        <p><strong>Educación:</strong> {{ $curriculum->educacion }}</p>
        <a href="{{ route('curricula.index') }}">Volver al listado</a>
    </div>
</body>
</html>
