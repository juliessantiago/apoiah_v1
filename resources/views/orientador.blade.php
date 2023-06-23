<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Aluno Selecionado</title>
</head>
<body class="p-4 m-4">
    @if ($orientador)

    <h2 class="text-secondary text-center">Orientador selecionado: </h2>
        <h3 class="text-secondary">{{ $orientador->nome }}</h3>
        <ul>
            <li>Escola: {{ $orientador->escola}} </li>
            <li>CPF: {{ $orientador->cpf }}</li>
            <li>Email: {{ $orientador->email }}</li>
        </ul>

    @else
        <p>Orientador não foi encontrado</p>
    @endif
</html>