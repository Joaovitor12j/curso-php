FROM debian:12-slim

RUN apt-get update \
    && apt-get install -y curl

RUN curl -sL -o sury.sh https://packages.sury.org/php/README.txt \
  && chmod +x sury.sh \
  && sh sury.sh

RUN apt-get install -y \
    php7.4-cli

WORKDIR /opt/project

COPY index.php /opt/project/index.php

ENTRYPOINT ["php", "index.php"]