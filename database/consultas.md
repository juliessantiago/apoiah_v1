## Consultas

*Exibir dados de aluno e orientador responsável por seu registro

(testei as consultas no Tinker usando a classe Query/Builder)

*Todos os alunos
DB::Table('alunos')->get()

*Todos alunos que estudam a noite
DB::Table('alunos')->where('turno', 'noite')->get()

*Todos os nomes dos responsáveis dos alunos 
DB::Table('alunos')->pluck('responsavel')


*Nome de aluno com seu respectivo orientador, agrupados pelo nome do orientador 

DB::Table('alunos')->join('orientadors', 'orientadors.id', '=', 'alunos.orientador_id')->select('alunos.nome as nome_aluno', 'orientadors.nome as nome_orientador')->get()->groupBy('orientadors.nome')