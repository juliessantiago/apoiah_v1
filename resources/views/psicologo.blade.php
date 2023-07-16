<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Psicólogo Selecionado</title>
</head>
<body class="p-4 m-4">
    @if ($psicologo)

    <h2 class="text-secondary text-center">Psicólogo selecionado: </h2>
        <h3 class="text-secondary">{{ $psicologo->nome }}</h3>
        <ul>
            <li>CPF: {{ $psicologo->cpf }}</li>
            <li>Email: {{ $psicologo->email }}</li>
            <li>Instituicao: {{ $psicologo->instituicao }}</li>
        </ul>

    @else
        <p>Psicólogo não foi encontrado</p>
    @endif
</html>