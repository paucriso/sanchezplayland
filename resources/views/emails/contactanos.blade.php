<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Contacto</title>
</head>
<body>
  <h2>Formulario de contacto</h2>
  <p>Un visitante a llenado el formulario de contacto con la siguiente información:</p>
  <p><strong>Nombre: </strong>{{$contacto['nombre']}}</p>
  <p><strong>Teléfono: </strong>{{$contacto['telefono']}}</p>
  <p><strong>Email: </strong>{{$contacto['email']}}</p>
  <p><strong>Brincolín para niños: </strong>{{$contacto['nino'] ?? 'no requiero'}}</p>
  <p><strong>Brincolín para niñas: </strong>{{$contacto['nina'] ?? 'no requiero'}}</p>
  <p><strong>Toro mecánico: </strong>{{$contacto['toro'] ?? 'no requiero'}}</p>
  <p><strong>Variedades: </strong>{{$contacto['variedades'] ?? 'no requiero'}}</p>
  <p><strong>Mensaje: </strong>{{$contacto['mensaje']}}</p>
</body>
</html>