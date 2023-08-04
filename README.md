<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
</head>
<body>
  <h1>Configuração do Ambiente de Desenvolvimento Laravel</h1>
  <p>Este é um guia passo a passo para configurar o ambiente de desenvolvimento Laravel usando o Laravel Sail no Windows e Linux.</p>
  
  <h2>Pré-requisitos:</h2>
  <ol>
    <li>Git: Certifique-se de ter o Git instalado em sua máquina para clonar o repositório do projeto Laravel.</li>
    <li>PHP: Tenha o PHP instalado em sua máquina.</li>
    <li>Composer: Instale o Composer para gerenciar as dependências do Laravel.</li>
    <li>Docker: Certifique-se de que o Docker Desktop esteja instalado e em execução para usar o Laravel Sail.</li>
  </ol>

  <h2>Passo 1: Clonar o Repositório</h2>
  <pre><code>
    git clone https://github.com/seu-usuario/seu-repositorio.git
    cd seu-repositorio
  </code></pre>

  <h2>Passo 2: Instalar as Dependências</h2>
  <p>Antes de instalar o Laravel Sail, execute os seguintes comandos para atualizar e instalar as dependências:</p>
  <pre><code>
    composer update
    composer install
  </code></pre>

  <h2>Passo 3: Instalar o Laravel Sail</h2>
  <p>O Composer instalará automaticamente todas as dependências, incluindo o Laravel Sail:</p>
  <pre><code>composer require laravel/sail --dev</code></pre>

  <h2>Passo 4: Configurar o Arquivo .env</h2>
  <p>Renomeie o arquivo .env.example para .env. Configure corretamente os detalhes do banco de dados (DB_CONNECTION, DB_HOST, DB_PORT, DB_DATABASE, DB_USERNAME e DB_PASSWORD) no arquivo .env.</p>

  <h2>Passo 5: Iniciar os Contêineres com o Laravel Sail</h2>
  <pre><code>sail up</code></pre>

  <h2>Passo 6: Rodar as Migrations e Seeders</h2>
  <pre><code>
    sail artisan migrate
    sail artisan db:seed
  </code></pre>

  <h2>Passo 7: Configurar a Chave de Criptografia</h2>
  <pre><code>sail artisan key:generate</code></pre>

  <h2>Passo 8: Configurar o JWT (opcional)</h2>
  <p>Se o projeto utiliza autenticação JWT, você pode configurá-lo com as seguintes etapas:</p>
  
  <p>Passo 8.1: Instalar o pacote JWT Auth:</p>
  <pre><code>composer require tymon/jwt-auth</code></pre>

  <p>Passo 8.2: Publicar as configurações do JWT:</p>
  <pre><code>php artisan vendor:publish --provider="Tymon\JWTAuth\Providers\LaravelServiceProvider"</code></pre>

  <p>Passo 8.3: Gerar a chave secreta do JWT:</p>
  <pre><code>php artisan jwt:secret</code></pre>

  <p>Após executar essas etapas, o JWT Auth estará configurado e pronto para ser usado no seu projeto Laravel.</p>
</body>
</html>
