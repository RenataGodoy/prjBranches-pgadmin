FROM php:8.1-fpm

# Instalar dependências necessárias
RUN apt-get update && apt-get install -y libpng-dev libjpeg-dev libfreetype6-dev zip git unzip libpq-dev

# Instalar Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Definir o diretório de trabalho
WORKDIR /var/www

# Copiar os arquivos do projeto
COPY . .

# Instalar dependências do Laravel
RUN composer install

# Expôr a porta do PHP
EXPOSE 9000

# Iniciar o PHP-FPM
CMD ["php-fpm"]
