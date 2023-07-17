-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3400
-- Tempo de geração: 17-Jul-2023 às 03:04
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
  `responsavel` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `alunos`
--

INSERT INTO `alunos` (`id`, `created_at`, `updated_at`, `num_protoc`, `nome`, `cpf`, `matricula`, `idade`, `turma`, `vulner_social`, `data_nasc`, `turno`, `motivo_enc`, `responsavel`) VALUES
(1, '2023-07-17 04:03:48', '2023-07-17 04:03:48', '429', 'Ubaldo Smith', '966', '934', 12, '7A', 1, '1987_01_30', 'tarde', 'Aut impedit iusto dolores ut tenetur omnis. Placeat voluptatem mollitia beatae possimus occaecati veritatis laboriosam vitae. Est quas autem sint odio officia.', 'Orin Lockman'),
(2, '2023-07-17 04:03:49', '2023-07-17 04:03:49', '292', 'Mrs. Vernie Turcotte IV', '649', '325', 19, '7A', 1, '2022_10_04', 'tarde', 'Voluptas sunt dicta esse voluptas ea officia rerum. Consequatur dolorem exercitationem necessitatibus modi ut sint. Numquam quaerat aspernatur aliquid dolorem omnis fuga.', 'Milo Jaskolski'),
(3, '2023-07-17 04:03:49', '2023-07-17 04:03:49', '284', 'Alfred Ortiz', '679', '103', 8, '7A', 1, '2004_04_29', 'tarde', 'Dolor incidunt accusamus commodi doloremque consequatur nihil placeat. Inventore perferendis iusto ex ut vitae voluptatem similique. Nam consequatur quo ullam aspernatur. Alias omnis impedit laboriosam cupiditate molestiae.', 'Leta Bergnaum'),
(4, '2023-07-17 04:03:49', '2023-07-17 04:03:49', '342', 'Mr. Garret Hills V', '726', '359', 20, '7A', 1, '1987_04_04', 'tarde', 'Consequatur fugiat blanditiis nam eaque non. Nihil nihil saepe mollitia voluptas reiciendis laborum suscipit. Non recusandae odio sit asperiores voluptatem nam nam.', 'Frederic Langosh'),
(5, '2023-07-17 04:03:49', '2023-07-17 04:03:49', '144', 'Ms. Julianne Konopelski', '253', '603', 9, '7A', 1, '2006_04_10', 'tarde', 'Sed saepe molestias excepturi voluptatum odio. Laudantium fugiat consequatur accusantium in velit ut et. Velit sit quam magnam ut velit aut. Dolore minus molestiae modi sit totam quis voluptatum.', 'Dr. Malika Ernser DVM');

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
(7, '2023_07_16_202206_create_psicologos_table', 1);

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
(1, '2023-07-17 04:03:48', '2023-07-17 04:03:48', 'Dino Rippin', 'arnold22@christiansen.com', '81501047387', 'Reanna Gulgowski', 'vujt'),
(2, '2023-07-17 04:03:48', '2023-07-17 04:03:48', 'Amalia Green DVM', 'keeling.ola@yahoo.com', '92201333442', 'Mrs. Ashley Terry', 'mppb'),
(3, '2023-07-17 04:03:48', '2023-07-17 04:03:48', 'Edwina Fisher PhD', 'botsford.conrad@lueilwitz.info', '01695555680', 'Loren Veum', 'kvrc'),
(4, '2023-07-17 04:03:48', '2023-07-17 04:03:48', 'Dewitt Schmidt', 'flo98@stanton.com', '38816478580', 'Vida Sauer', 'yyta'),
(5, '2023-07-17 04:03:48', '2023-07-17 04:03:48', 'Prof. Stanford Lemke', 'antoinette44@yahoo.com', '52187681421', 'Kenyon O\'Conner V', 'vqeb');

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
(1, '2023-07-17 04:03:49', '2023-07-17 04:03:49', 'Prof. Brice Huel', 'Parisian, Barrows and Friesen', 'flavio08@gmail.com', 'tctu', '49168671771'),
(2, '2023-07-17 04:03:49', '2023-07-17 04:03:49', 'Jerel Little', 'Hyatt Inc', 'shanel.ebert@rosenbaum.com', 'pylj', '10917250557'),
(3, '2023-07-17 04:03:49', '2023-07-17 04:03:49', 'Ressie Thiel', 'Jacobson Ltd', 'hailie15@brakus.com', 'esag', '65855660138'),
(4, '2023-07-17 04:03:49', '2023-07-17 04:03:49', 'Camron Rippin', 'Nienow PLC', 'aabshire@yahoo.com', 'wjgn', '79424942271'),
(5, '2023-07-17 04:03:49', '2023-07-17 04:03:49', 'Mr. Damian Marquardt PhD', 'Smith, Pfeffer and Wuckert', 'rosalinda77@hotmail.com', 'bwad', '80734031288');

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
  ADD PRIMARY KEY (`id`);

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `orientadors`
--
ALTER TABLE `orientadors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `psicologos`
--
ALTER TABLE `psicologos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
