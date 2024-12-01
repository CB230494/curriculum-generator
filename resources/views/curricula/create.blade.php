<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Currículum</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #000; /* Fondo negro */
            margin: 0;
            padding: 0;
        }

        .form-container {
            background-color: #1c1c1c; /* Fondo gris oscuro del formulario */
            color: #fff; /* Texto blanco */
            padding: 30px;
            border-radius: 15px; /* Bordes redondeados */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3); /* Sombra del recuadro */
            max-width: 400px;
            width: 100%;
            margin: 200px auto; /* Bajarlo considerablemente */
        }

        .form-container h1 {
            color: #00aaff; /* Azul brillante */
            margin-bottom: 10px;
            text-align: center;
        }

        .form-container p {
            margin-bottom: 20px;
            text-align: center;
        }

        .form-container input,
        .form-container textarea,
        .form-container button {
            width: 100%;
            margin-bottom: 15px;
            padding: 10px;
            border: 1px solid #333; /* Bordes gris oscuro */
            border-radius: 8px; /* Bordes redondeados */
            font-size: 14px;
            background-color: #292929; /* Fondo oscuro para campos */
            color: #fff; /* Texto blanco */
        }

        .form-container input::placeholder,
        .form-container textarea::placeholder {
            color: #888; /* Texto del placeholder gris claro */
        }

        .form-container input:focus,
        .form-container textarea:focus {
            border-color: #00aaff; /* Azul brillante al enfocar */
            outline: none;
            box-shadow: 0 0 5px rgba(0, 170, 255, 0.5); /* Sombra azul */
        }

        .form-container button {
            background-color: #00aaff; /* Azul brillante */
            color: #fff; /* Texto blanco */
            border: none;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .form-container button:hover {
            background-color: #0088cc; /* Azul más oscuro al pasar el cursor */
        }

        .form-container textarea {
            resize: none;
            height: 60px;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h1>Crear Currículum</h1>
        <p>Ingresa tus datos para continuar</p>
        <form action="{{ route('curricula.store') }}" method="POST">
            @csrf
            <input type="text" name="nombre" placeholder="Nombre completo" required>
            <input type="email" name="email" placeholder="Correo electrónico" required>
            <input type="text" name="telefono" placeholder="Teléfono" required>
            <textarea name="perfil_profesional" placeholder="Perfil profesional" required></textarea>
            <textarea name="habilidades" placeholder="Habilidades" required></textarea>
            <textarea name="experiencia_laboral" placeholder="Experiencia laboral" required></textarea>
            <textarea name="educacion" placeholder="Educación" required></textarea>
            <button type="submit">Guardar</button>
        </form>
        <button class="btn-back" onclick="window.history.back()">Regresar</button>
    </div>
</body>
</html>
