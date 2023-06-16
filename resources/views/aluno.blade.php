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
    @if ($aluno)

    <h2 class="text-secondary text-center">Aluno selecionado: </h2>
        <h3 class="text-secondary">{{ $aluno->nome }}</h3>
        <ul>
            <li>Nº de protocolo: {{ $aluno->num_protoc}} </li>
            <li>CPF: {{ $aluno->cpf }}</li>
            <li>Nº Matrícula: {{ $aluno->matricula }}</li>
            <li>Data de nascimento: {{ $aluno->data_nasc }}</li>
            <li>Idade: {{ $aluno->idade }}</li>
            <li>Turma: {{ $aluno->turma }}</li>
            <li>Nome do responsável: {{ $aluno->responsavel }}</li>
            <li>Vulnerabilidade Social/Econômica: {{ $aluno->vulner_social? 'Sim' : 'Não' }}</li>
            <li><p class="w-50 text-justify">Motivo de encaminhamento: {{ $aluno->motivo_enc}}</p></li>
        </ul>

    @else
        <p>Aluno não foi encontrado</p>
    @endif
</html>