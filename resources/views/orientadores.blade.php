<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <title>Orientadores</title>
    <h4>TESTANDO</h4>
</head>
<body class="p-4 m-4">
    <h2 class="text-secondary">Orientadores</h2>
    @if ($orientadores)
    @foreach($orientadores as $orientador)
    <div class="m-5">
        <h3 class="text-secondary">{{ $orientador->nome }}</h3>
        <ul>
            <li>Escola: {{ $orientador->escola}} </li>
            <li>CPF: {{ $orientador->cpf }}</li>
            <li>Email: {{ $orientador->email }}</li>

            <!-- <h4>Esse orientador é responsável por:</h4> -->
            <button class="btn btn-secondary"><a href="{{route('edit', $orientador->id)}}" title="Editar" class="text-decoration-none text-white">Editar Orientador</a></button>
            <button class="btn btn-danger"><a href="{{route('delete', $orientador->id)}}" title="Excluir" class="text-decoration-none text-white">Excluir Orientador</a></button>
        </ul>
    </div>
       
        @endforeach
    @else
        <p>Orientadores não encontrados</p>
    @endif
    <div class="">
    
    </div>
</html>