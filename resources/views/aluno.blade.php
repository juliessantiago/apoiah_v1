<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aluno Selecionado</title>
</head>
<body>
    @if ($aluno)

    <h1>Aluno selecionado: </h1>
        <h3>{{ $aluno->nome }} {{ $aluno->sobrenome }}</h3>
        <ul>
            <li>Nº de protocolo: {{ $aluno->num_protoc}} </li>
            <li>CPF: {{ $aluno->cpf }}</li>
            <li>Nº Matrícula: {{ $aluno->matricula }}</li>
            <li>Data de nascimento: {{ $aluno->data_nasc }}</li>
            <li>Idade: {{ $aluno->idade }}</li>
            <li>Turma: {{ $aluno->turma }}</li>
            <li>Nome do responsável: {{ $aluno->responsavel }}</li>
            <li>Vulnerabilidade Social/Econômica: {{ $aluno->vulner_social? 'Sim' : 'Não' }}</li>
            <li><p>Motivo de encaminhamento: {{ $aluno->motivo_enc}}</p></li>
        </ul>

    @else
        <p>Aluno não foi encontrado</p>
    @endif
</html>