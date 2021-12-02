<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
    <h1>Correo electronico</h1>
    <p>Este es el primer correo que mandare por Laravel</p>

    <p>Nombre: {{$contacto['nombre']}}</p>
    <p>Telefono - Celular: {{$contacto['telefono_celular']}}</p>
    <p>Correo: {{$contacto['correo']}}</p>
    <p>Mensaje: {{$contacto['mensaje']}}</p>
</body>
</html>