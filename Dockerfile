# Utilisez l'image officielle PHP avec Apache
FROM php:8.1-apache


# Installe les dépendances nécessaires
RUN apt-get update && \
    apt-get install -y \
        libzip-dev \
        zip \
        unzip

# Active les extensions PHP requises
RUN docker-php-ext-install pdo_mysql zip

# Copie le code source de l'application dans le conteneur
COPY . /var/www/html

# Configure le répertoire de travail
WORKDIR /var/www/html

# Met à jour les permissions
RUN chown -R www-data:www-data /var/www/html

# Active le module Apache de réécriture d'URL
RUN a2enmod rewrite

# Redémarre Apache
RUN service apache2 restart
