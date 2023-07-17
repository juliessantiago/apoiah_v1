-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3400
-- Tempo de geração: 17-Jul-2023 às 20:25
-- Versão do servidor: 10.4.27-MariaDB
-- versão do PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `apoiah`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `alunos`
--

CREATE TABLE `alunos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `num_protoc` text NOT NULL,
  `nome` text NOT NULL,
  `cpf` text NOT NULL,
  `matricula` text NOT NULL,
  `idade` int(11) NOT NULL,
  `turma` text NOT NULL,
  `vulner_social` tinyint(1) NOT NULL DEFAULT 0,
  `data_nasc` text NOT NULL,
  `turno` enum('manha','tarde','noite') NOT NULL,
  `motivo_enc` text NOT NULL,
  `responsavel` text NOT NULL,
  `orientador_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `alunos`
--

INSERT INTO `alunos` (`id`, `created_at`, `updated_at`, `num_protoc`, `nome`, `cpf`, `matricula`, `idade`, `turma`, `vulner_social`, `data_nasc`, `turno`, `motivo_enc`, `responsavel`, `orientador_id`) VALUES
(1, '2023-07-17 16:55:27', '2023-07-17 16:55:27', '611', 'Sra. Marília Soares Sobrinho', '405.874.262-33', '031', 8, '7A', 1, '2019_07_08', 'tarde', 'Non ut cum ad possimus sit aspernatur ut blanditiis. Qui officia iste consectetur inventore quia. Ratione quia repellat autem tenetur odio voluptas ea. Voluptate voluptate voluptates repellendus voluptatibus eos sit ullam. Perferendis ipsam esse voluptatem asperiores maiores.', 'Nayara Rosa', 4),
(2, '2023-07-17 16:55:27', '2023-07-17 16:55:27', '387', 'Regina Vasques Fidalgo', '003.435.225-27', '262', 20, '7A', 1, '1990_09_24', 'tarde', 'Omnis similique libero sapiente a. Voluptas fugit et maxime omnis. Vel et sapiente alias hic nemo. Aspernatur non rerum aut architecto quibusdam.', 'Sr. Artur Serrano Neto', 1),
(3, '2023-07-17 16:55:27', '2023-07-17 16:55:27', '027', 'Dante Wagner de Aguiar', '852.715.149-94', '710', 18, '7A', 1, '1994_01_14', 'tarde', 'Consequatur aut consequatur corporis officiis. Assumenda harum vero voluptates ex dignissimos iste est. In doloremque molestias vel minima deserunt dolor.', 'Augusto Danilo Reis', 5),
(4, '2023-07-17 16:55:27', '2023-07-17 16:55:27', '017', 'Talita Assunção', '577.996.397-50', '202', 14, '7A', 1, '1977_12_26', 'tarde', 'Id dolor id debitis. Nobis quasi fuga suscipit voluptatum eum consequatur ex.', 'Paulo Zaragoça Benites Sobrinho', 1),
(5, '2023-07-17 16:55:27', '2023-07-17 16:55:27', '841', 'Dr. Mariah Azevedo Matos', '342.454.681-06', '874', 11, '7A', 1, '1981_08_26', 'tarde', 'Architecto eos voluptatem et tempora ea vero iusto. Vel omnis sunt labore in autem rerum. Voluptas et dolores aut suscipit qui. Accusantium est blanditiis ea quo harum. Id dolorem quo possimus labore.', 'Joana Tessália Salas', 5);

-- --------------------------------------------------------

--
-- Estrutura da tabela `aluno_psicologo`
--

CREATE TABLE `aluno_psicologo` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `aluno_id` bigint(20) UNSIGNED NOT NULL,
  `psicologo_id` bigint(20) UNSIGNED NOT NULL,
  `parecer` varchar(255) NOT NULL,
  `data_entrada` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `aluno_psicologo`
--

INSERT INTO `aluno_psicologo` (`id`, `created_at`, `updated_at`, `aluno_id`, `psicologo_id`, `parecer`, `data_entrada`) VALUES
(1, NULL, NULL, 1, 1, 'Primeira consulta. Aluno acompanhado da mãe. ', '2023-07-03 13:55:40'),
(2, NULL, NULL, 1, 2, 'Segunda consulta. Aluno compareceu sozinho. Respondeu perguntas do questionário. ', '2023-07-04 13:56:25'),
(3, NULL, NULL, 2, 1, 'Primeira consulta. Aluno não se sentiu a vontade para responder questionário. ', '2023-07-13 13:57:47');

-- --------------------------------------------------------

--
-- Estrutura da tabela `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_03_16_173919_create_orientadors_table', 1),
(6, '2023_04_28_202039_create_alunos_table', 1),
(7, '2023_07_16_202206_create_psicologos_table', 1),
(8, '2023_07_17_125117_create_aluno_psicologo_table', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `orientadors`
--

CREATE TABLE `orientadors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `nome` text NOT NULL,
  `email` text NOT NULL,
  `cpf` text NOT NULL,
  `escola` text NOT NULL,
  `senha` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `orientadors`
--

INSERT INTO `orientadors` (`id`, `created_at`, `updated_at`, `nome`, `email`, `cpf`, `escola`, `senha`) VALUES
(1, '2023-07-17 16:55:26', '2023-07-17 16:55:26', 'Antonella Marin Cervantes', 'pvelasques@terra.com.br', '60317297881', 'Srta. Talita Lira Valência Jr.', 'fkya'),
(2, '2023-07-17 16:55:26', '2023-07-17 16:55:26', 'Eduardo Rivera', 'jdesouza@pereira.net.br', '10165225286', 'Daiane Bárbara Ortega', 'qoai'),
(3, '2023-07-17 16:55:27', '2023-07-17 16:55:27', 'Dr. Afonso Galindo', 'sophia.romero@yahoo.com', '42323252451', 'Sr. Christian Murilo Arruda Filho', 'accw'),
(4, '2023-07-17 16:55:27', '2023-07-17 16:55:27', 'Sr. Ivan Galhardo Ortega', 'raquel.brito@carvalho.net', '39659346290', 'Sra. Luísa Cruz', 'oigj'),
(5, '2023-07-17 16:55:27', '2023-07-17 16:55:27', 'Valéria Benez Zambrano Sobrinho', 'cgodoi@terra.com.br', '19165894083', 'Sr. Ian Azevedo', 'zxvw');

-- --------------------------------------------------------

--
-- Estrutura da tabela `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `psicologos`
--

CREATE TABLE `psicologos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `nome` text NOT NULL,
  `instituicao` text NOT NULL,
  `email` text NOT NULL,
  `senha` text NOT NULL,
  `cpf` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `psicologos`
--

INSERT INTO `psicologos` (`id`, `created_at`, `updated_at`, `nome`, `instituicao`, `email`, `senha`, `cpf`) VALUES
(1, '2023-07-17 16:55:27', '2023-07-17 16:55:27', 'Josué Salazar Oliveira', 'Guerra e Filhos', 'bella07@yahoo.com', 'segl', '64980722839'),
(2, '2023-07-17 16:55:28', '2023-07-17 16:55:28', 'Sra. Nádia Padrão Leon Neto', 'Vieira e Salazar', 'icaro.ferreira@r7.com', 'uhrr', '91939294135'),
(3, '2023-07-17 16:55:28', '2023-07-17 16:55:28', 'Srta. Elisa Analu Amaral Sobrinho', 'Ramires e Dias e Filhos', 'carla39@rangel.com', 'eqei', '86019038802'),
(4, '2023-07-17 16:55:28', '2023-07-17 16:55:28', 'Gabrielle Montenegro', 'Salas e Associados', 'joyce52@dasdores.net.br', 'tzhi', '42204950777'),
(5, '2023-07-17 16:55:28', '2023-07-17 16:55:28', 'Dr. Daniele Stella Barros', 'Cortês-Batista', 'hfidalgo@r7.com', 'jaio', '47139059407'),
(7, '2023-07-17 20:48:20', '2023-07-17 20:48:20', 'Sr. Kevin Maldonado', 'Saraiva Comercial Ltda.', 'burgos.alessandra@gmail.com', 'hgnt', '18349950350'),
(8, '2023-07-17 20:48:20', '2023-07-17 20:48:20', 'Leandro Paz Neto', 'Teles Comercial Ltda.', 'simone.marinho@ig.com.br', 'recq', '61575748413'),
(9, '2023-07-17 20:48:20', '2023-07-17 20:48:20', 'Dr. Thiago Godói Sobrinho', 'Aragão Comercial Ltda.', 'rosana.salazar@defreitas.net.br', 'yebi', '72219521521'),
(10, '2023-07-17 20:48:21', '2023-07-17 20:48:21', 'Juan Jefferson Cordeiro', 'Pedrosa S.A.', 'darosa.eva@deaguiar.com.br', 'ddem', '22722735500'),
(11, '2023-07-17 20:48:21', '2023-07-17 20:48:21', 'Dr. Raphael Barreto Filho', 'Zamana e Valentin e Filhos', 'juan85@uol.com.br', 'rvwl', '68083142332'),
(12, '2023-07-17 21:02:49', '2023-07-17 21:02:49', 'Dr. Luan Cristóvão Ortiz', 'Amaral e Soto', 'rdarosa@uol.com.br', 'yysm', '92782891554'),
(13, '2023-07-17 21:02:49', '2023-07-17 21:02:49', 'Dr. Laiane Pontes Salas Jr.', 'Ortiz e Flores', 'alonso.leal@ferraz.com.br', 'adca', '77153779371'),
(14, '2023-07-17 21:02:49', '2023-07-17 21:02:49', 'Srta. Diana Rosa', 'Ortega e Leal', 'fgusmao@ig.com.br', 'nufu', '53841154544'),
(15, '2023-07-17 21:02:49', '2023-07-17 21:02:49', 'Sr. Rafael Cordeiro Filho', 'Solano e Azevedo', 'qcordeiro@gmail.com', 'fzhc', '47734707154'),
(16, '2023-07-17 21:02:50', '2023-07-17 21:02:50', 'Dr. Máximo Wagner Assunção Neto', 'Valentin e Queirós e Filhos', 'fabricio.pena@terra.com.br', 'pwob', '54428584570'),
(17, '2023-07-17 21:03:20', '2023-07-17 21:03:20', 'Bernardo Chaves Paes Jr.', 'Rezende e Sales e Associados', 'paula85@salas.com.br', 'crup', '71639883510'),
(18, '2023-07-17 21:03:20', '2023-07-17 21:03:20', 'Anderson Bezerra Galvão Jr.', 'de Freitas e Corona', 'mascarenhas.constancia@yahoo.com', 'kjnd', '27798102522'),
(19, '2023-07-17 21:03:20', '2023-07-17 21:03:20', 'Dr. Márcio Santana Filho', 'Torres Ltda.', 'ulira@escobar.net', 'jyfy', '29609236741'),
(20, '2023-07-17 21:03:20', '2023-07-17 21:03:20', 'Sra. Emilly Yohanna Fonseca Neto', 'das Dores-Pacheco', 'priscila00@yahoo.com', 'zxnp', '92930842071'),
(21, '2023-07-17 21:03:20', '2023-07-17 21:03:20', 'Enzo Márcio Batista', 'Chaves e Maldonado Ltda.', 'moises.medina@hotmail.com', 'lgcy', '19046907329');

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `alunos`
--
ALTER TABLE `alunos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `alunos_orientador_id_foreign` (`orientador_id`);

--
-- Índices para tabela `aluno_psicologo`
--
ALTER TABLE `aluno_psicologo`
  ADD PRIMARY KEY (`id`),
  ADD KEY `aluno_psicologo_aluno_id_foreign` (`aluno_id`),
  ADD KEY `aluno_psicologo_psicologo_id_foreign` (`psicologo_id`);

--
-- Índices para tabela `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Índices para tabela `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `orientadors`
--
ALTER TABLE `orientadors`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Índices para tabela `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Índices para tabela `psicologos`
--
ALTER TABLE `psicologos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `alunos`
--
ALTER TABLE `alunos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `aluno_psicologo`
--
ALTER TABLE `aluno_psicologo`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `orientadors`
--
ALTER TABLE `orientadors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `psicologos`
--
ALTER TABLE `psicologos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `alunos`
--
ALTER TABLE `alunos`
  ADD CONSTRAINT `alunos_orientador_id_foreign` FOREIGN KEY (`orientador_id`) REFERENCES `orientadors` (`id`) ON DELETE CASCADE;

--
-- Limitadores para a tabela `aluno_psicologo`
--
ALTER TABLE `aluno_psicologo`
  ADD CONSTRAINT `aluno_psicologo_aluno_id_foreign` FOREIGN KEY (`aluno_id`) REFERENCES `alunos` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `aluno_psicologo_psicologo_id_foreign` FOREIGN KEY (`psicologo_id`) REFERENCES `psicologos` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
