<div align="center">
  <img src="https://raw.githubusercontent.com/MicaelliMedeiros/micaellimedeiros/master/image/computer-illustration.png" alt="Ilustração de um computador com código" width="400"/>
</div>

# 💊 phppill - A Jornada PHP

Bem-vindo ao meu repositório de estudos de PHP! Este não é apenas um lugar para guardar códigos, é o diário da minha jornada para dominar o PHP e, com esse conhecimento, conquistar meus objetivos. O nome "phppill" vem da ideia de tomar uma "pílula de conhecimento" em PHP todos os dias.

O objetivo final? **Dominar a tecnologia para farmar a tão sonhada moto!** 🏍️💨

---

## 🚀 Como Usar Este Repositório

Este projeto foi configurado para rodar em um ambiente de desenvolvimento isolado usando Docker, o que garante que ele funcione da mesma forma em qualquer máquina.

### Pré-requisitos
* **Docker:** É necessário ter o [Docker Desktop](https://www.docker.com/products/docker-desktop/) instalado e em execução na sua máquina.
* **Git:** Essencial para clonar o repositório.

### Passo a Passo para Iniciar o Ambiente

1.  **Clone o Repositório:** Abra seu terminal e execute o comando abaixo para baixar os arquivos do projeto.
    ```bash
    git clone [https://github.com/seu-usuario/phppill.git](https://github.com/seu-usuario/phppill.git)
    ```

2.  **Entre na Pasta do Projeto:**
    ```bash
    cd phppill
    ```

3.  **Inicie o Ambiente Docker:** Este comando irá construir e iniciar o contêiner do PHP com Apache. O `-d` faz com que ele rode em segundo plano.
    ```bash
    docker-compose up -d
    ```

4.  **Acesse o Projeto:** Após a execução do comando, abra seu navegador e visite `http://localhost:8080`.

### Estrutura e Funcionamento

-   **Menu Principal (`src/index.php`):** A página inicial funciona como um menu inteligente. Ela lê automaticamente as pastas e arquivos de exercícios dentro do diretório `src/` e cria uma lista de links para cada um.
-   **Adicionando Exercícios:** Para praticar um novo conceito, simplesmente crie uma pasta para o módulo (ex: `src/modulo_arrays/`) e adicione seu script PHP (ex: `exercicio_filtros.php`). Ao recarregar o `localhost:8080`, o link para seu novo exercício aparecerá no menu.
-   **Parando o Ambiente:** Quando terminar de estudar, volte ao terminal na pasta do projeto e execute `docker-compose down` para desligar o contêiner.

---

## 🎯 Status da Missão: Farmando a Moto

<div align="center">
  <img alt="PHP" src="https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white"/>
  <img alt="PostgreSQL" src="https://img.shields.io/badge/PostgreSQL-336791?style=for-the-badge&logo=postgresql&logoColor=white"/>
  <img alt="Docker" src="https://img.shields.io/badge/Docker-2496ED?style=for-the-badge&logo=docker&logoColor=white"/>
  <img alt="Status" src="https://img.shields.io/badge/Status-Em_Progresso-green?style=for-the-badge"/>
</div>

---

## 🗺️ O Roadmap Definitivo: Do Zero ao Herói do PHP

Este é o mapa que vou seguir. Cada item é uma fase da jornada, e marcarei meu progresso aqui. Os exercícios práticos para cada tópico estão organizados em pastas neste repositório.

### Fase 1: Fundamentos da Linguagem (O Básico Bem Feito)
- [ ] 🐘 **Sintaxe e Variáveis:** Entender a base, como declarar variáveis, tipos de dados (`string`, `int`, `float`, `bool`, `array`, `object`).
- [ ] ⚙️ **Operadores:** Aritméticos, lógicos, de comparação e de atribuição.
- [ ] 🌐 **Ambiente de Desenvolvimento:** Configurar o ambiente local com Docker (PHP + Apache/Nginx). Chega de XAMPP!
- [ ] 🗣️ **Estruturas de Controle:** `if`, `else`, `elseif`, `switch`.
- [ ] 🔄 **Estruturas de Repetição:** `for`, `while`, `do-while`, `foreach`.
- [ ] 🧩 **Funções:** Criar e usar funções para reutilizar código. Entender escopo de variáveis.
- [ ] 📂 **Includes e Requires:** `include`, `require`, `include_once`, `require_once`.

### Fase 2: PHP na Web (Interagindo com o Mundo)
- [ ] 📝 **Formulários e HTTP:** Lidar com requisições `GET` e `POST` (`$_GET`, `$_POST`, `$_REQUEST`).
- [ ] 🍪 **Cookies e Sessões:** Entender como manter o estado do usuário com `$_SESSION` e `$_COOKIE`.
- [ ] 🗃️ **Manipulação de Arquivos:** Ler e escrever em arquivos no servidor.
- [ ] 🛡️ **Validação e Segurança Básica:** Filtrar e validar dados de entrada para evitar ataques simples (XSS, SQL Injection).

### Fase 3: PHP Orientado a Objetos (POO) (Nível Profissional)
- [ ] 🏛️ **Classes e Objetos:** O pilar da POO.
- [ ] ✨ **Propriedades e Métodos:** Atributos e comportamentos dos objetos.
- [ ] 🔐 **Modificadores de Acesso:** `public`, `private`, `protected`.
- [ ] 🧬 **Herança:** Reutilização de código com `extends`.
- [ ] 📏 **Interfaces e Classes Abstratas:** Definir "contratos" e estruturas para as classes.
- [ ] 🧙 **Métodos Mágicos:** `__construct`, `__destruct`, `__get`, `__set`, etc.
- [ ] 📦 **Namespaces e Autoloading:** Organizar o código e carregar classes automaticamente com o **Composer**.

### Fase 4: Banco de Dados com PHP (Onde a Mágica Acontece)
- [ ] 🔗 **Conexão com Banco de Dados:** Usando **PDO (PHP Data Objects)**. É o padrão moderno e seguro.
- [ ] ✍️ **Operações CRUD:** Create, Read, Update, Delete.
- [ ] 🛡️ **Prepared Statements:** A forma correta e segura de executar queries para prevenir SQL Injection.
- [ ] 🤝 **Transações:** Garantir a integridade dos dados em operações complexas.

### Fase 5: Ecossistema e Ferramentas Modernas (O Arsenal do Dev)
- [ ] 📦 **Composer:** Gerenciador de dependências. Aprender a usar `composer.json`, `install` e `update`.
- [ ] 🧭 **Padrões de Projeto (Design Patterns):** Conhecer os mais comuns (Singleton, Factory, Strategy, etc.).
- [ ] 🏗️ **Frameworks:** Escolher um e mergulhar fundo.
    - [ ] **Laravel:** O mais popular, robusto e com uma comunidade gigante. Ótimo para o mercado de trabalho.
    - [ ] **Symfony:** Extremamente poderoso e modular. Base do Laravel e de muitos outros projetos.
- [ ] 🧪 **Testes Automatizados:** Aprender a escrever testes unitários e de integração com **PHPUnit**.
- [ ] 🚀 **APIs RESTful:** Construir APIs para serem consumidas por aplicações front-end (React, Vue, mobile).

### Fase 6: Tópicos Avançados (Rumo à Maestria)
- [ ] 📈 **Performance e Otimização:** Técnicas de cache (Redis, Memcached), OPcache.
- [ ] 🔄 **Processamento Assíncrono:** Filas e Jobs.
- [ ] 🐳 **Docker Avançado:** Criar ambientes de produção otimizados com `docker-compose`.
- [ ] ☁️ **Deploy:** Fazer o deploy de uma aplicação PHP em um servidor real (DigitalOcean, AWS, etc.).

---

## 🛠️ Ferramentas Utilizadas neste Repositório

* **Linguagem:** PHP
* **Ambiente:** Docker
* **Editor de Código:** Visual Studio Code
* **Controle de Versão:** Git e GitHub

> "A jornada de mil milhas começa com um único passo." - Lao Tsé