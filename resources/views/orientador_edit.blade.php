<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <title>Editando Orientador</title>
    </head>
    <body class="antialiased">
        <h3 class="text-center text-secondary p-3">Editar dados</h3>
    <form action="{{route('update_orientador', $orientador->id)}}" method="POST" class="col-md-6 offset-md-3">
        <input type="hidden" name="_token" value="{{csrf_token()}}"/>

        <div class="form-group">
            <label for="nome">Nome do orientador</label>
            <input type="text" class="form-control" id="nome" placeholder="Nome" name="nome" name="nome" value="{{$orientador->nome}}">
        </div>
        
        <div class="form-group">
            <label for="num_protoc">Nome da Escola</label>
            <input type="text" class="form-control" id="escola" name="escola" value="{{$orientador->escola}}">
        </div>

        <div class="form-group">
            <label for="cpf">CPF</label>
            <input type="text" class="form-control" id="cpf" name="cpf" value="{{$orientador->cpf}}">
        </div>

        <div class="form-group">
            <label for="matricula">Email</label>
            <input type="text" class="form-control" id="email" name="email" value="{{$orientador->email}}">
        </div>

        <button type="submit" class="btn btn-primary m-4 px-4" value="Editar/">Editar</button>
    </form>

    </body>
</html>
