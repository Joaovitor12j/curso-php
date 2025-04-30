FROM debian:12-slim

ENV DEBIAN_FRONTEND=noninteractive

RUN apt-get update && \
    apt-get install -y \
        curl \
        ca-certificates \
        gnupg2 \
        lsb-release && \
    echo "deb https://packages.sury.org/php/ $(lsb_release -sc) main" > /etc/apt/sources.list.d/php.list && \
    curl -fsSL https://packages.sury.org/php/apt.gpg | gpg --dearmor -o /etc/apt/trusted.gpg.d/php.gpg && \
    apt-get update && \
    apt-get install -y php7.4-cli && \
    rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/*

COPY --from=composer/composer:latest-bin /composer /usr/bin/composer

RUN groupadd --gid 1000 ixcsoft && \
    useradd --uid 1000 --gid ixcsoft --shell /bin/bash --create-home ixcsoft

WORKDIR /opt/project

#USER ixcsoft
