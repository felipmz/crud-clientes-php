# Sistema de Cadastro de Clientes (PHP)

Este repositório contém um sistema básico de cadastro desenvolvido para praticar a integração entre formulários Web e bancos de dados relacionais.

## 🚀 Sobre o Projeto
O projeto permite que um usuário cadastre informações de clientes em uma interface simples e organizada. Foi desenvolvido utilizando PHP "puro" (procedural), demonstrando o fluxo de envio de dados via método `POST` e o processamento no servidor.

## 🛠️ Funcionalidades
* **Página Inicial:** Menu de navegação simples.
* **Formulário de Cadastro:** Validação de campos (HTML5) e coleta de dados (Nome, Endereço, E-mail, Telefone e Nascimento).
* **Integração com DB:** Script de conexão e execução de query SQL para inserção de dados.
* **Feedback ao Usuário:** Mensagens de confirmação de sucesso ou erro após o cadastro.



## 🧰 Tecnologias Utilizadas
* **PHP**: Processamento e conexão com o banco.
* **MySQL**: Armazenamento dos dados.
* **HTML5**: Estruturação das páginas e formulários.

## 📁 Estrutura do Projeto
* `pagina_inicial.php`: Ponto de entrada do sistema.
* `pagina_cadastro.php`: Contém o formulário HTML para coleta de dados.
* `Connect_DB-php.php`: Arquivo de configuração da conexão com o banco de dados.
* `Connect_HTML-php.php`: Lógica PHP que recebe o formulário e executa o `INSERT`.

## ⚙️ Como configurar o Banco de Dados
Para que o sistema funcione, você precisará criar um banco de dados chamado `cadastro de clientes` e uma tabela com a seguinte estrutura:

```sql
CREATE DATABASE `cadastro de clientes`;

USE `cadastro de clientes`;

CREATE TABLE `cadastro de clientes` (
    `id` INT AUTO_INCREMENT PRIMARY KEY,
    `nome` VARCHAR(255),
    `endereco` VARCHAR(255),
    `email` VARCHAR(255),
    `telefone` VARCHAR(20),
    `d_nasci` DATE
);
