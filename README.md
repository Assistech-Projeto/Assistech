# Assistech

# Criar um novo projeto Laravel:

    composer create-project --prefer-dist laravel/laravel nome-do-projeto

Este comando cria um novo projeto Laravel usando o Composer. Ele baixa todas as dependências do Laravel e configura a estrutura básica do projeto com as pastas e arquivos necessários.

# Executar o servidor de desenvolvimento local:

    php artisan serve

Este comando inicia o servidor de desenvolvimento embutido do PHP. Permite acessar sua aplicação Laravel localmente no navegador.

# Criar um novo Controller:

    php artisan make:controller NomeDoController

Cria um novo Controller no diretório app/Http/Controllers. Os controllers são responsáveis por receber requisições HTTP e controlar a lógica da aplicação.

# Criar uma nova Migration:

    php artisan make:migration nome_da_migration

Cria um novo arquivo de migration no diretório database/migrations. As migrations são usadas para gerenciar o esquema do banco de dados. Elas ajudam a manter um controle versionado das alterações no banco de dados.

# Executar as Migrations (criar tabelas no banco de dados):

    php artisan migrate

Executa todas as migrations que ainda não foram executadas no banco de dados. Isso cria as tabelas especificadas nos arquivos de migration no banco de dados.

# Criar um novo Model:

    php artisan make:model NomeDoModel

Cria um novo Model no diretório app. Os Models representam tabelas do banco de dados e são usados para interagir com os dados do banco de dados.

# Criar um novo Middleware:

    php artisan make:middleware NomeDoMiddleware

Cria um novo Middleware no diretório app/Http/Middleware. Os middlewares são filtros HTTP que podem ser aplicados a rotas da aplicação para executar lógica antes ou depois de uma requisição HTTP.

# Criar uma nova Factory:

    php artisan make:factory NomeDaFactory --model=NomeDoModel

Cria uma nova Factory no diretório database/factories. As factories são usadas para gerar dados falsos para testes ou para preencher o banco de dados durante o desenvolvimento.

# Criar uma nova Seeder:

    php artisan make:seeder NomeDaSeeder

Cria um novo Seeder no diretório database/seeders. Os seeders são usados para popular o banco de dados com dados falsos para testes ou para criar um estado inicial da aplicação.




