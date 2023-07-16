<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Orientador Selecionado</title>
</head>
<body class="p-4 m-4">
    @if ($orientador)
    
    <form action="{{route('destroy', $orientador->id)}}" method="POST" class="col-md-6 offset-md-3">
    <p>Você tem certeza de que deseja excluir: </p>
    <h3 class="text-secondary">Orientador nº {{$orientador->id}} - {{ $orientador->nome }}?</h3>
    <p class="text-muted">Ação não poderá ser desfeita</p>
    <input type="hidden" name="_token" value="{{csrf_token()}}"/>
    <div class="mt-5">
        <button class="btn btn-secondary"><a href="{{route('index')}}" class="text-decoration-none text-white">Cancelar</a></button>
        <button class="btn btn-danger" type="submit">Excluir</button>
    </div>
    </form>
   
    @else
        <p>Orientador não foi encontrado</p>
    @endif
</html>