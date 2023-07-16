<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <title>Inserindo novo aluno</title>
    </head>
    <body class="antialiased">
        <h3 class="text-center text-secondary p-3">Novo Aluno</h3>
    <form action="/aluno" method="POST" class="col-md-6 offset-md-3">
        <input type="hidden" name="_token" value="{{csrf_token()}}"/>

        <div class="form-group">
            <label for="nome">Nome do aluno</label>
            <input type="text" class="form-control" id="nome" placeholder="Nome" name="nome">
        </div>
        
        <div class="form-group">
            <label for="num_protoc">Nº protocolo</label>
            <input type="text" class="form-control" id="num_protoc" name="num_protoc">
        </div>

        <div class="form-group">
            <label for="cpf">CPF</label>
            <input type="text" class="form-control" id="cpf" name="cpf">
        </div>

        <div class="form-group">
            <label for="matricula">Nº Matrícula</label>
            <input type="text" class="form-control" id="matricula" name="matricula">
        </div>

        <div class="form-group">
            <label for="idade">Idade</label>
            <input type="number" class="form-control" id="idade" name="idade">
        </div>

        <div class="form-group">
            <label for="idade">Turma</label>
            <input type="text" class="form-control" id="turma" name="turma">
        </div>

        <label for="idade">Turno</label>
        <select class="form-select" aria-label="Default select example" name="turno">
            <option selected value="manha">Manhã</option>
            <option value="tarde">Tarde</option>
            <option value="noite">Noite</option>
          </select>

        <div class="form-group">
            <label for="idade">Data de nascimento</label>
            <input type="date" class="form-control" id="data_nasc" name="data_nasc">
        </div>

        <div class="form-group">
            <label for="idade">Nome do Responsável</label>
            <input type="text" class="form-control" id="responsavel" name="responsavel">
        </div>

        <label for="motivo_enc">Motivo do encaminhamento</label>
        <div class="form-group">
            <textarea class="p-4 col-12" type="text" name="motivo_enc"></textarea>
        </div>

        <label>Vulnerabilidade Social</label>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="vulner_social" id="vulner_social" value="0" checked>
            <label class="form-check-label" for="vulner_social">
              Não
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="vulner_social" id="vulner_social" value="1">
            <label class="form-check-label" for="vulner_social">
              Sim
            </label>
          </div>

          
        <button type="submit" class="btn btn-primary m-4 px-4" value="Criar/">Criar</button>
    </form>

    </body>
</html>
