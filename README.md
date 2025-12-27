# 📋 Sistema de Cadastro de Clientes

Este projeto é uma aplicação web funcional desenvolvida para gerenciar o cadastro de clientes. Ele representa a evolução de um sistema legado, agora refatorado com uma interface moderna e código organizado para melhor legibilidade.

## 🎯 Objetivo do Projeto
O sistema foi criado para automatizar o registro de informações de clientes (Nome, Endereço, E-mail, Telefone e Nascimento) em um banco de dados relacional, utilizando o PHP como ponte entre o front-end e o back-end.

## 🚀 Tecnologias Utilizadas
* **PHP 8.x**: Processamento de dados e lógica de servidor.
* **MySQL**: Armazenamento e gerenciamento de dados.
* **Bootstrap 5**: Framework CSS para um design responsivo e moderno.
* **HTML5**: Estruturação das páginas.

## 🛠️ Funcionalidades
- [x] **Dashboard Inicial**: Interface limpa para navegação rápida.
- [x] **Formulário com Validação**: Campos tipados para garantir a integridade dos dados inseridos.
- [x] **Processamento em Tempo Real**: Conexão imediata com o banco de dados após o envio.
- [x] **Feedback Visual**: Alertas coloridos (Success/Danger) indicando o status da operação ao usuário.

## 📂 Estrutura de Arquivos
* `pagina_inicial.php`: Menu principal do sistema.
* `pagina_cadastro.php`: Formulário de entrada de dados.
* `Connect_DB-php.php`: Módulo de configuração e segurança da conexão com o banco.
* `Connect_HTML-php.php`: Lógica de processamento das requisições POST e inserção SQL.

## ⚙️ Instalação e Configuração
1. Clone este repositório.
2. Certifique-se de ter um servidor local (XAMPP, WAMP ou Laragon) ativo.
3. Importe a estrutura do banco de dados:
   ```sql
   CREATE DATABASE `cadastro_de_clientes`;
   USE `cadastro_de_clientes`;

   CREATE TABLE `clientes` (
       `id` INT AUTO_INCREMENT PRIMARY KEY,
       `nome` VARCHAR(255) NOT NULL,
       `endereco` VARCHAR(255),
       `email` VARCHAR(255),
       `telefone` VARCHAR(20),
       `d_nasci` DATE
   );
