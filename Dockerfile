FROM php:8.0-cli
COPY ping.php /app/
WORKDIR /app
CMD ["php", "ping.php"]
