# Usar uma imagem base leve e específica para a versão do Debian
FROM debian:12-slim

# Evitar prompts interativos durante a instalação
ENV DEBIAN_FRONTEND=noninteractive

# Instalar dependências básicas e repositório Sury para versões PHP
RUN apt-get update \
    && apt-get install -y \
      curl \
    && rm -rf /tmp/* /var/tmp/*

# Comando para instalar o php-fpm
RUN curl -sSLo sury.sh https://packages.sury.org/php/README.txt \
  && chmod +x sury.sh \
  && sh sury.sh \
  && apt-get install --no-install-recommends and --no-install-suggests -y \
      php7.4-fpm \
      php7.4-xdebug \
  && apt-get clean  \
  && rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/*

# Comando para instalar o composer utilizando a imagem oficial do composer no docker hub
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

COPY dev.ini /etc/php/7.4/mods-available/dev.ini

RUN phpenmod dev

# Criar e configurar um usuário não root
RUN groupadd --gid 1000 ixcsoft && \
    useradd --uid 1000 --gid ixcsoft --shell /bin/bash --create-home ixcsoft

# Define o diretório de inicio de execução
WORKDIR /opt/project

# Expor a porta padrão do PHP-FPM
RUN sed -i 's|/run/php/php7.4-fpm.sock|0.0.0.0:9000|' /etc/php/7.4/fpm/pool.d/www.conf
EXPOSE 9000

# Execução do comando para execução do php-fpm
CMD ["/usr/sbin/php-fpm7.4", "-F"]
