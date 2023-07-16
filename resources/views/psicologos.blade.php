<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <title>Psicologos</title>
</head>
<body class="p-4 m-4">
    @if ($psicologos)
    @foreach($psicologos as $psicologo)
    <div class="m-5">
        <h3 class="text-secondary">{{ $psicologo->nome }}</h3>
        <ul>
            <li>CPF: {{ $psicologo->cpf }}</li>
            <li>Email: {{ $psicologo->email }}</li>
            <li>Instituicao: {{ $psicologo->instituicao }}</li>

            <div class="mt-4">
                <button class="btn btn-secondary"><a href="{{route('edit_psicologo', $psicologo->id)}}" title="Editar" class="text-decoration-none text-white">Editar Psicologo</a></button>
                <button class="btn btn-danger"><a href="{{route('delete_psicologo', $psicologo->id)}}" title="Excluir" class="text-decoration-none text-white">Excluir Psicologo</a></button>
            </div>
            
        </ul>
    </div>
       
        @endforeach
    @else
        <p>Psicologos não encontrados</p>
    @endif
    <div class="">
    
    </div>
</html>