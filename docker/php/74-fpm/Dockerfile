FROM debian:12-slim

ENV DEBIAN_FRONTEND=noninteractive

RUN apt-get update && \
    apt-get install -y \
    curl \
    lsb-release \
    gnupg2 \
    ca-certificates && \
    echo "deb https://packages.sury.org/php/ $(lsb_release -sc) main" > /etc/apt/sources.list.d/php.list && \
    curl -fsSL https://packages.sury.org/php/apt.gpg | gpg --dearmor -o /etc/apt/trusted.gpg.d/php.gpg && \
    apt-get update && \
    apt-get install -y php7.4-fpm && \
    rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/*

RUN sed -i 's|/run/php/php7.4-fpm.sock|0.0.0.0:9000|' /etc/php/7.4/fpm/pool.d/www.conf

RUN groupadd --gid 1000 ixcsoft && \
    useradd --uid 1000 --gid ixcsoft --shell /bin/bash --create-home ixcsoft

WORKDIR /opt/project

#USER ixcsoft

EXPOSE 9000

CMD ["/usr/sbin/php-fpm7.4", "-F"]
