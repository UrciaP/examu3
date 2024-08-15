<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mensaje Recibido</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            color: #333;
            margin: 0;
            padding: 20px;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            padding: 12px 15px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        tr:nth-child(odd) {
            background-color: #fff;
        }
        h2 {
            text-align: center;
            color: #333;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Mensaje Recibido</h2>
        <p>Recibiste un correo del sistema automatizado:</p>
        <table>
            <tr>
                <th>Nombre:</th>
                <td>{{ $mensaje['nombre'] }}</td>
            </tr>
            <tr>
                <th>Correo:</th>
                <td>{{ $mensaje['email'] }}</td>
            </tr>
            <tr>
                <th>Asunto:</th>
                <td>{{ $mensaje['asunto'] }}</td>
            </tr>
            <tr>
                <th>Mensaje:</th>
                <td>{{ $mensaje['mensaje'] }}</td>
            </tr>
        </table>
    </div>
</body>
</html>
