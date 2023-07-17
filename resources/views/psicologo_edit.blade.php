<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <title>Editando Psicológo</title>
    </head>
    <body class="antialiased">
        <h3 class="text-center text-secondary p-3">Editar dados</h3>
    <form action="{{route('update_psicologo', $psicologo->id)}}" method="POST" class="col-md-6 offset-md-3">
        <input type="hidden" name="_token" value="{{csrf_token()}}"/>

        <div class="form-group">
            <label for="nome">Nome do Psicólogo</label>
            <input type="text" class="form-control text-muted" placeholder="Nome"  name="nome" value="{{$psicologo->nome}}">
        </div>


        <div class="form-group">
            <label for="num_protoc">Email</label>
            <input type="text" class="form-control text-muted" name="email" value="{{$psicologo->email}}">
        </div>

        <div class="form-group">
            <label for="cpf">CPF</label>
            <input type="text" class="form-control text-muted" id="cpf" name="cpf" value="{{$psicologo->cpf}}">
        </div>

        <div class="form-group">
            <label for="matricula">Instituição</label>
            <input type="text" class="form-control text-muted" id="instituicao" name="instiruicao" value="{{$psicologo->instituicao}}">
        </div>

        <button type="submit" class="btn btn-secondary m-4 px-4" value="editar">Editar</button>
    </form>

    </body>
</html>
