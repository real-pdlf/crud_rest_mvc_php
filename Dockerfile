FROM php:8.2-cli
COPY . /usr/src/
WORKDIR /usr/src/
CMD [ "php", "-S", "localhost:8000" ]