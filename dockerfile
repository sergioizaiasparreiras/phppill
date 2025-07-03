# Usa a imagem oficial do PHP com o servidor Apache
FROM php:8.2-apache

# Define o diretório de trabalho padrão dentro do contêiner
WORKDIR /var/www/html

# Copia os arquivos do seu diretório 'src' local para o contêiner
COPY src/ .