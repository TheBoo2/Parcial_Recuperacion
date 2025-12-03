<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registro con AJAX</title>
    <script src="js/ajax.js"></script>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f3f4f6;
            margin: 0;
            padding: 20px;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            background: #ffffff;
            padding: 20px 30px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,.1);
        }
        h2 {
            margin-top: 0;
            color: #333333;
        }
        form label {
            display: block;
            margin-bottom: 10px;
            color: #444444;
        }
        form input[type="text"] {
            width: 100%;
            padding: 6px 8px;
            margin-top: 4px;
            border: 1px solid #cccccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        button[type="submit"] {
            margin-top: 10px;
            padding: 8px 16px;
            border: none;
            background: #2563eb;
            color: #ffffff;
            border-radius: 4px;
            cursor: pointer;
        }
        button[type="submit"]:hover {
            background: #1d4ed8;
        }
        #resultado {
            margin-top: 20px;
        }
    </style>
</head>
<body>

<div class="container">
    <form name="nuevo_empleado" onsubmit="enviarDatosEmpleado(); return false;">
        <h2>Nuevo empleado</h2>

        <label>
            Nombres
            <input name="nombres" type="text">
        </label>

        <label>
            Departamento
            <input name="departamento" type="text">
            <!-- Podrías cambiar esto a <select> si quieres usar la lista de Cargo -->
        </label>

        <label>
            Sueldo
            <input name="sueldo" type="text">
        </label>

        <button type="submit">Grabar</button>
    </form>

    <div id="resultado">
        <?php include('consulta.php'); ?>
    </div>
</div>

</body>
</html>
        