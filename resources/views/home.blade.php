<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Laravel 11</title>
</head>

<body>
    <div class="max-w-4xl mx-auto px-4 py-4">
        <h1>Página de Bienvenida</h1>

        <x-alert type="info">
            <x-slot name="title">
                Andrés
            </x-slot>
            Contenido de la alerta
        </x-alert>
    </div>


</body>

</html>