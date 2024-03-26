FROM php:8.2-cli
COPY . /usr/src/
WORKDIR /usr/src/
CMD [ "php", "./app.php" ]