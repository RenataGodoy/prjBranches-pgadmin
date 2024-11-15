# Use a imagem PHP 8.2 FPM com suporte a PostgreSQL
FROM php:8.2-fpm

# Instalar dependências necessárias para o Laravel
RUN apt-get update && apt-get install -y \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    zip \
    git \
    unzip \
    libpq-dev

# Instalar o Composer (gerenciador de dependências do PHP)
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Definir o diretório de trabalho dentro do container
WORKDIR /var/www

# Copiar os arquivos do projeto para o container
COPY . .

# Instalar as dependências do Laravel
RUN composer install

# Configurar permissões para o Laravel
RUN chown -R www-data:www-data /var/www/storage /var/www/bootstrap/cache

# Expor a porta 9000 para rodar o PHP-FPM
EXPOSE 9000

# Rodar o PHP-FPM no contêiner
CMD ["php-fpm"]
