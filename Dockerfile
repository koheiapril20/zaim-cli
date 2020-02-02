FROM composer:1.9.2

RUN mkdir /app/zaim-cli
ADD . /app/zaim-cli/
RUN composer install -d /app/zaim-cli
COPY .env.example /app/zaim-cli/.env

ENTRYPOINT ["php", "/app/zaim-cli/zaim-cli"]