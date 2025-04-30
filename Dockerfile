FROM debian:12-slim

RUN apt-get update \
    && apt-get install -y curl \
    && apt-get clean \
    && rm -rf /var/lib/apt/lists/*

RUN curl -sL -o sury.sh https://packages.sury.org/php/README.txt \
  && chmod +x sury.sh \
  && sh sury.sh

RUN apt-get install -y \
    php7.4-cli \
    php7.4-mysql \
    php7.4-pdo \
    php7.4-xml \
    php7.4-mbstring

WORKDIR /app

ENTRYPOINT ["php", "index.php"]
