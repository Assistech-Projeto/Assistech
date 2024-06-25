# Clonar o repositório
        git clone https://github.com/Assistech-Projeto/Assistech.git
#        
        cd nome-do-repositorio

# Instalar dependências do PHP
        composer install

# Configurar o arquivo .env
        cp .env.example .env
# (Edite o arquivo .env para configurar as variáveis de ambiente)

# Gerar a chave da aplicação
        php artisan key:generate

# Executar migrations
        php artisan migrate

# Instalar dependências do Node.js
        npm install

# Compilar assets de front-end
        npm run build

# Iniciar o servidor de desenvolvimento
        php artisan serve
    
