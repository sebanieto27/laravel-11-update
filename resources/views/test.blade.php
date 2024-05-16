<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>

    <h1>Contacto</h1>
    <h3>{{ $name . ' ' . $lastname . ' ' . $age }}</h3>

    @if ($name != 'Seba')
        <p>Tu nombre no es Seba</p>
    @else
        <h2>Bienvenido {{ $name }}</h2>
    @endif

    @foreach ($family as $fname)
        <p>{{ $fname }}</p>
    @endforeach
</body>

</html>
