<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Currículum</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            color: #333;
        }

        .container {
            width: 700px; /* Ajusta el ancho para garantizar que nada se desborde */
            margin: 20px auto;
            padding: 20px;
            background: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            border: 2px solid #00aaff; /* Borde celeste */
            border-radius: 10px;
        }

        .header {
            border-bottom: 2px solid #00aaff; /* Línea divisoria celeste */
            padding-bottom: 15px;
            margin-bottom: 20px;
            text-align: center; /* Centrar el texto del encabezado */
        }

        .header h1 {
            margin: 0;
            color: #00aaff;
            font-size: 28px;
            text-transform: uppercase;
        }

        .header h2 {
            margin: 5px 0 0 0;
            font-size: 18px;
            color: #555;
        }

        .section {
            margin-bottom: 20px;
        }

        .section h3 {
            margin: 0;
            padding: 10px 0;
            font-size: 18px;
            background: #f2f2f2;
            border-left: 5px solid #00aaff; /* Borde lateral celeste */
            padding-left: 10px;
            color: #333;
        }

        .section p, .section ul {
            margin: 10px 0;
            font-size: 14px;
            line-height: 1.6;
        }

        .contact, .education {
            width: 48%;
            display: inline-block;
            vertical-align: top;
        }

        .contact {
            padding-right: 2%;
        }

        .education {
            padding-left: 2%;
        }

        ul {
            list-style-type: none;
            padding: 0;
        }

        ul li {
            margin-bottom: 10px;
        }

        .highlight-box {
            border: 1px solid #00aaff; /* Borde celeste */
            border-radius: 5px;
            padding: 10px;
            background-color: #e6f7ff; /* Fondo celeste claro */
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            
            <h1>Curriculum</h1>
            <h2>{{ $curriculum->nombre }}</h2>
        </div>

        <div class="section">
            <h3>Perfil Profesional</h3>
            <div class="highlight-box">
                <p>{{ $curriculum->perfil_profesional }}</p>
            </div>
        </div>

        <div class="section">
            <div class="contact">
                <h3>Contacto</h3>
                <div class="highlight-box">
                    <ul>
                        <li><strong>Email:</strong> {{ $curriculum->email }}</li>
                        <li><strong>Teléfono:</strong> {{ $curriculum->telefono }}</li>
                    </ul>
                </div>
            </div>
            <div class="education">
                <h3>Educación</h3>
                <div class="highlight-box">
                    <p>{{ $curriculum->educacion }}</p>
                </div>
            </div>
        </div>

        <div class="section">
            <h3>Experiencia Laboral</h3>
            <div class="highlight-box">
                <p>{{ $curriculum->experiencia_laboral }}</p>
            </div>
        </div>

        <div class="section">
            <h3>Habilidades</h3>
            <div class="highlight-box">
                <ul>
                    @foreach(explode("\n", $curriculum->habilidades) as $habilidad)
                        <li>{{ $habilidad }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</body>
</html>
