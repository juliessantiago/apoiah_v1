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

*Nome de aluno e nome do psicólogo que o atendeu, com dados do prontuário (tabela pivô aluno_psicologo) 
 DB::table('alunos')->select('alunos.nome as ALUNO', 'psicologos.nome as PSICÓLOGO', 'aluno_psicologo.parecer', 'aluno_psicologo.data_entrada')->join('aluno_psicologo', 'aluno_psicologo.aluno_id', '=', 'alunos.id')->join('psicologos', 'aluno_psicologo.psicologo_id', '=', 'psicologos.id')->get()