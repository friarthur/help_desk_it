# Help Desk

Sistema de Help Desk desenvolvido em **PHP Vanilla**, com arquitetura MVC e ambiente containerizado utilizando Docker.

O projeto tem como objetivo construir uma aplicação de gerenciamento de chamados, permitindo organizar solicitações, usuários, clientes e atendimentos em um único sistema.

> Projeto desenvolvido com foco em aprendizado, boas práticas de desenvolvimento e evolução contínua da aplicação.

---

## Sobre o Projeto

O **Help Desk** é uma aplicação web para gerenciamento de chamados de suporte.

A ideia é criar uma solução simples, organizada e escalável para empresas que precisam controlar solicitações de suporte e acompanhar o andamento dos atendimentos.

O projeto está sendo desenvolvido de forma incremental, começando pela estrutura base da aplicação e evoluindo posteriormente para os módulos de negócio.

---

## Objetivos

* Criar um sistema funcional de Help Desk.
* Aplicar arquitetura MVC utilizando PHP Vanilla.
* Trabalhar com separação de responsabilidades.
* Utilizar Docker para padronizar o ambiente de desenvolvimento.
* Aplicar conceitos de banco de dados relacional.
* Trabalhar com autenticação e controle de acesso.
* Criar uma estrutura preparada para crescimento.
* Praticar Git e GitHub durante todo o desenvolvimento.
* Desenvolver uma aplicação próxima de um cenário profissional.

---

## Tecnologias

### Backend

* PHP 8.3
* PHP-FPM
* Composer
* PDO
* MySQL 8.4

### Frontend

* HTML5
* CSS3
* JavaScript

### Infraestrutura

* Docker
* Docker Compose
* Nginx
* Linux

### Desenvolvimento

* Git
* GitHub
* PSR-4
* Arquitetura MVC

---

## Arquitetura

O projeto utiliza uma arquitetura baseada em **MVC**, separando as responsabilidades da aplicação.

```text
Help Desk
│
├── app/
│   ├── Controllers/
│   ├── Models/
│   ├── Services/
│   └── Views/
│
├── config/
├── database/
├── docker/
│   ├── nginx/
│   └── php/
│
├── public/
├── routes/
├── storage/
├── tests/
│
├── .env
├── .gitignore
├── composer.json
├── compose.yaml
└── README.md
```

### Controllers

Responsáveis por receber as requisições e coordenar o fluxo da aplicação.

### Models

Responsáveis pela comunicação e representação dos dados utilizados pelo sistema.

### Services

Responsáveis pelas regras de negócio da aplicação.

### Views

Responsáveis pela apresentação das informações ao usuário.

---

## Ambiente Docker

A aplicação utiliza containers separados para os principais serviços.

```text
                    Help Desk
                        │
                ┌───────┴───────┐
                │               │
             Nginx             PHP
              :3000          PHP-FPM
                │               │
                └───────┬───────┘
                        │
                      MySQL
```

### Containers

| Serviço | Tecnologia   | Função                     |
| ------- | ------------ | -------------------------- |
| `nginx` | Nginx Alpine | Servidor web               |
| `php`   | PHP 8.3 FPM  | Processamento da aplicação |
| `mysql` | MySQL 8.4    | Banco de dados             |

Os serviços são executados de forma independente dentro do ambiente Docker.

---

## Requisitos

Para executar o projeto localmente, é necessário possuir:

* Docker
* Docker Compose
* Git

Não é necessário instalar PHP, MySQL ou Nginx diretamente no sistema operacional para executar o ambiente do projeto.

---

## Instalação

Clone o repositório:

```bash
git clone <URL_DO_REPOSITORIO>
```

Entre na pasta:

```bash
cd Help_desk
```

Construa e inicialize os containers:

```bash
docker compose up -d --build
```

Verifique os containers:

```bash
docker compose ps
```

---

## Composer

O Composer é executado dentro do container PHP.

Verificar a versão:

```bash
docker compose exec php composer --version
```

Instalar as dependências:

```bash
docker compose exec php composer install
```

O projeto utiliza autoload **PSR-4** configurado no `composer.json`.

---

## Acessando a aplicação

Com os containers em execução, acesse:

```text
http://localhost:3000
```

---

## Banco de Dados

O banco utilizado pelo projeto é o **MySQL 8.4**.

Dentro da rede Docker, a aplicação PHP acessa o banco utilizando:

```text
Host: mysql
Port: 3306
Database: helpdesk
User: helpdesk
```

A porta do MySQL não precisa ser exposta diretamente para o sistema operacional, pois a comunicação entre PHP e MySQL ocorre através da rede interna do Docker.

---

## Variáveis de Ambiente

As configurações sensíveis da aplicação devem ser armazenadas no arquivo `.env`.

Exemplo:

```env
APP_ENV=development

DB_HOST=mysql
DB_PORT=3306
DB_DATABASE=helpdesk
DB_USERNAME=helpdesk
DB_PASSWORD=helpdesk
```

O arquivo `.env` não deve ser versionado no Git.

---

## Funcionalidades

### Em desenvolvimento

* [x] Estrutura inicial do projeto
* [x] Ambiente Docker
* [x] PHP-FPM
* [x] Nginx
* [x] MySQL
* [x] Composer
* [x] Autoload PSR-4
* [x] Estrutura MVC
* [ ] Conexão com banco de dados
* [ ] Sistema de autenticação
* [ ] Usuários
* [ ] Clientes
* [ ] Chamados
* [ ] Categorias
* [ ] Prioridades
* [ ] Status dos chamados
* [ ] Histórico de chamados
* [ ] Dashboard
* [ ] Controle de permissões
* [ ] Relatórios
* [ ] Testes automatizados

---

## Fluxo dos Chamados

A aplicação será estruturada para permitir que um chamado percorra diferentes etapas durante seu atendimento.

Exemplo de fluxo:

```text
Aberto
  ↓
Em análise
  ↓
Em atendimento
  ↓
Aguardando retorno
  ↓
Resolvido
  ↓
Fechado
```

O fluxo poderá evoluir conforme as regras de negócio forem implementadas.

---

## Segurança

Alguns dos conceitos de segurança previstos para o projeto:

* Senhas armazenadas utilizando hashing seguro.
* Prepared Statements através do PDO.
* Validação de dados recebidos.
* Sanitização de dados quando necessária.
* Controle de sessões.
* Controle de acesso por usuário.
* Proteção contra SQL Injection.
* Proteção contra XSS.
* Proteção contra CSRF.
* Variáveis sensíveis armazenadas em `.env`.

---

## Organização do Desenvolvimento

O projeto será desenvolvido de forma incremental.

A evolução seguirá aproximadamente esta ordem:

```text
Infraestrutura
     ↓
Estrutura da aplicação
     ↓
Banco de dados
     ↓
Autenticação
     ↓
Usuários
     ↓
Clientes
     ↓
Chamados
     ↓
Regras de negócio
     ↓
Dashboard
     ↓
Relatórios
     ↓
Testes
     ↓
Melhorias
```

O objetivo é evitar a implementação de funcionalidades desnecessárias antes que a base do sistema esteja consolidada.

---

## Git

O desenvolvimento utiliza Git para controle de versão.

Exemplo de fluxo:

```text
main
  ↓
feature/nome-da-feature
  ↓
commit
  ↓
push
  ↓
Pull Request
  ↓
merge
  ↓
main
```

Branches serão utilizadas para separar novas funcionalidades, correções e melhorias.

---

## Estrutura de Desenvolvimento

O projeto busca manter uma separação clara entre:

```text
Controller
    ↓
Service
    ↓
Model
    ↓
Database
```

Enquanto a apresentação permanece separada:

```text
Controller
    ↓
View
```

Essa organização facilita a manutenção e permite que as regras de negócio não fiquem diretamente misturadas com HTML ou acesso ao banco de dados.

---

## Status do Projeto

**Em desenvolvimento.**

O projeto encontra-se em sua fase inicial de construção da infraestrutura e arquitetura.

Novas funcionalidades serão adicionadas progressivamente.

---

## Objetivo de Aprendizado

Além de construir uma aplicação funcional, o projeto tem como objetivo praticar conceitos utilizados no desenvolvimento profissional, incluindo:

* Arquitetura de software
* PHP orientado a objetos
* MVC
* Separação de responsabilidades
* Banco de dados
* APIs e requisições HTTP
* Segurança
* Docker
* Nginx
* Git
* GitHub
* Composer
* PSR-4
* Testes automatizados
* Organização de código

---

## Licença

Este projeto ainda não possui uma licença definida.

---

## Autor

Desenvolvido por **Arthur Reis**.

Projeto criado para estudos, desenvolvimento profissional e construção de experiência prática em desenvolvimento de software.

---------english version

# Help Desk

Help Desk system developed in **Vanilla PHP**, using MVC architecture and a containerized environment with Docker.

The project aims to build a ticket management application, allowing support requests, users, clients, and service activities to be organized in a single system.

> Project developed with a focus on learning, good development practices, and continuous application evolution.

---

## About the Project

**Help Desk** is a web application for managing support tickets.

The idea is to create a simple, organized, and scalable solution for companies that need to manage support requests and track the progress of their services.

The project is being developed incrementally, starting with the application's core structure and gradually evolving into business-oriented modules.

---

## Objectives

* Build a functional Help Desk system.
* Apply MVC architecture using Vanilla PHP.
* Work with separation of responsibilities.
* Use Docker to standardize the development environment.
* Apply relational database concepts.
* Implement authentication and access control.
* Create a structure prepared for future growth.
* Practice Git and GitHub throughout the development process.
* Develop an application close to a professional environment.

---

## Technologies

### Backend

* PHP 8.3
* PHP-FPM
* Composer
* PDO
* MySQL 8.4

### Frontend

* HTML5
* CSS3
* JavaScript

### Infrastructure

* Docker
* Docker Compose
* Nginx
* Linux

### Development

* Git
* GitHub
* PSR-4
* MVC Architecture

---

## Architecture

The project uses an **MVC-based architecture**, separating the responsibilities of the application.

```text
Help Desk
│
├── app/
│   ├── Controllers/
│   ├── Models/
│   ├── Services/
│   └── Views/
│
├── config/
├── database/
├── docker/
│   ├── nginx/
│   └── php/
│
├── public/
├── routes/
├── storage/
├── tests/
│
├── .env
├── .gitignore
├── composer.json
├── compose.yaml
└── README.md
```

### Controllers

Responsible for receiving requests and coordinating the application's flow.

### Models

Responsible for representing and interacting with the data used by the system.

### Services

Responsible for implementing the application's business rules.

### Views

Responsible for presenting information to the user.

---

## Docker Environment

The application uses separate containers for its main services.

```text
                    Help Desk
                        │
                ┌───────┴───────┐
                │               │
             Nginx             PHP
              :3000          PHP-FPM
                │               │
                └───────┬───────┘
                        │
                      MySQL
```

### Containers

| Service | Technology   | Purpose                |
| ------- | ------------ | ---------------------- |
| `nginx` | Nginx Alpine | Web server             |
| `php`   | PHP 8.3 FPM  | Application processing |
| `mysql` | MySQL 8.4    | Database               |

The services run independently within the Docker environment.

---

## Requirements

To run the project locally, you need:

* Docker
* Docker Compose
* Git

There is no need to install PHP, MySQL, or Nginx directly on the operating system to run the project environment.

---

## Installation

Clone the repository:

```bash
git clone <REPOSITORY_URL>
```

Enter the project directory:

```bash
cd Help_desk
```

Build and start the containers:

```bash
docker compose up -d --build
```

Check the running containers:

```bash
docker compose ps
```

---

## Composer

Composer is executed inside the PHP container.

Check the Composer version:

```bash
docker compose exec php composer --version
```

Install the dependencies:

```bash
docker compose exec php composer install
```

The project uses **PSR-4 autoloading** configured in `composer.json`.

---

## Accessing the Application

With the containers running, access:

```text
http://localhost:3000
```

---

## Database

The database used by the project is **MySQL 8.4**.

Inside the Docker network, the PHP application accesses the database using:

```text
Host: mysql
Port: 3306
Database: helpdesk
User: helpdesk
```

The MySQL port does not need to be exposed directly to the host operating system, since communication between PHP and MySQL occurs through the internal Docker network.

---

## Environment Variables

Sensitive application settings should be stored in the `.env` file.

Example:

```env
APP_ENV=development

DB_HOST=mysql
DB_PORT=3306
DB_DATABASE=helpdesk
DB_USERNAME=helpdesk
DB_PASSWORD=helpdesk
```

The `.env` file should not be committed to Git.

---

## Features

### In Development

* Initial project structure
* Docker environment
* PHP-FPM
* Nginx
* MySQL
* Composer
* PSR-4 autoloading
* MVC structure
* Database connection
* Authentication system
* Users
* Clients
* Tickets
* Categories
* Priorities
* Ticket statuses
* Ticket history
* Dashboard
* Permission management
* Reports
* Automated tests

---

## Ticket Workflow

The application will be structured to allow a ticket to go through different stages during the support process.

Example workflow:

```text
Open
  ↓
Under analysis
  ↓
In progress
  ↓
Waiting for response
  ↓
Resolved
  ↓
Closed
```

The workflow may evolve as the business rules are implemented.

---

## Security

Some of the security concepts planned for the project include:

* Passwords stored using secure hashing.
* Prepared Statements through PDO.
* Validation of received data.
* Data sanitization when necessary.
* Session management.
* User access control.
* Protection against SQL Injection.
* Protection against XSS.
* Protection against CSRF.
* Sensitive variables stored in `.env`.

---

## Development Organization

The project will be developed incrementally.

The development process will approximately follow this order:

```text
Infrastructure
     ↓
Application structure
     ↓
Database
     ↓
Authentication
     ↓
Users
     ↓
Clients
     ↓
Tickets
     ↓
Business rules
     ↓
Dashboard
     ↓
Reports
     ↓
Tests
     ↓
Improvements
```

The goal is to avoid implementing unnecessary features before the system's foundation has been properly established.

---

## Git

The development process uses Git for version control.

Example workflow:

```text
main
  ↓
feature/feature-name
  ↓
commit
  ↓
push
  ↓
Pull Request
  ↓
merge
  ↓
main
```

Branches are used to separate new features, fixes, and improvements.

---

## Development Structure

The project aims to maintain a clear separation between:

```text
Controller
    ↓
Service
    ↓
Model
    ↓
Database
```

While the presentation layer remains separate:

```text
Controller
    ↓
View
```

This organization makes the application easier to maintain and allows business rules to remain separate from HTML and direct database access.

---

## Project Status

**In development.**

The project is currently in its initial phase, focused on building the infrastructure and application architecture.

New features will be added progressively.

---

## Learning Objectives

In addition to building a functional application, this project aims to practice concepts commonly used in professional software development, including:

* Software architecture
* Object-oriented PHP
* MVC
* Separation of responsibilities
* Database development
* APIs and HTTP requests
* Security
* Docker
* Nginx
* Git
* GitHub
* Composer
* PSR-4
* Automated testing
* Code organization

---

## License

This project does not have a defined license yet.

---

## Author

Developed by **Arthur Reis**.

Project created for learning, professional development, and building practical software development experience.
