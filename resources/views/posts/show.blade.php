<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ver post</title>
</head>

<body>
    <h1>Página de post Invividual: {{$post}}</h1>

    @if($post == "andres")
    <h2>Hay contenido</h2>
    @else
    <h2>No hay contenido</h2>
    @endif


</body>

</html>