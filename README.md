# 🚀 Gerenciador de Tarefas — Laravel

Projeto em desenvolvimento com foco no aprendizado prático do framework **Laravel**, aplicando conceitos fundamentais de autenticação, organização de domínio, boas práticas de backend e versionamento com Git.

O sistema tem como objetivo evoluir para um gerenciador de tarefas no estilo Kanban (inspirado no Trello), mantendo um escopo controlado e bem estruturado.

---

## 📌 Status do Projeto

🛠️ **Em desenvolvimento**

Atualmente, o projeto possui a estrutura base configurada e autenticação de usuários implementada. As funcionalidades principais estão sendo desenvolvidas de forma incremental.

---

## ✨ Funcionalidades Implementadas

- 🔐 Autenticação de usuários (login, registro e logout)
- 🔒 Proteção de rotas autenticadas
- 🧱 Estrutura inicial do projeto com Laravel Breeze
- ⚙️ Ambiente configurado com Vite e Blade Templates

---

## 🧩 Funcionalidades em Desenvolvimento

- 📂 Gerenciamento de listas de tarefas
- 📝 Criação e organização de tarefas por lista
- 🔄 Fluxo de status das tarefas
- 👤 Associação de dados por usuário autenticado

---

## 🛠️ Tecnologias Utilizadas

- **Framework:** Laravel 10 / 11  
- **Linguagem:** PHP 8.2+  
- **Frontend:** Blade Templates  
- **Build Tool:** Vite  
- **Banco de Dados:** MySQL (ou outro banco relacional compatível)  
- **Gerenciamento de Dependências:** Composer & NPM  

---

## 🚀 Como Executar o Projeto Localmente

### 1️⃣ Clone o repositório
```bash
git clone https://github.com/seu-usuario/gerenciador-de-tarefas.git
2️⃣ Instale as dependências do backend
composer install
3️⃣ Instale as dependências do frontend
npm install
npm run build
4️⃣ Configure o ambiente
cp .env.example .env
php artisan key:generate
Configure as credenciais do banco de dados no arquivo .env.

5️⃣ Rode as migrations
php artisan migrate
6️⃣ Inicie o servidor
php artisan serve
Acesse em:

http://127.0.0.1:8000
🎯 Objetivo do Projeto
Este projeto faz parte do meu portfólio pessoal e tem como principal objetivo consolidar conhecimentos em Laravel, modelagem de dados, autenticação, organização de código e fluxo de aplicações web reais.

O desenvolvimento está sendo feito de forma incremental, priorizando clareza, boas práticas e aprendizado sólido.

👤 Autor
Desenvolvido por Paulo Ângelo
Estudante de Análise e Desenvolvimento de Sistemas

