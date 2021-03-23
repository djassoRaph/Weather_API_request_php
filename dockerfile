FROM php:7.4-cli
RUN apt-get update && apt-get install -y 
RUN apt-get install curl -y
COPY . /usr/src/myapp
WORKDIR /usr/src/myapp
CMD [ "php", "./weather.php" ]