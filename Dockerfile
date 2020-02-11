FROM debian:buster
RUN apt-get update
RUN apt-get -y install php-cli php-sqlite3 composer adminer
RUN apt-get -y install php-dom
RUN apt-get -y install curl gnupg

RUN curl -sS https://dl.yarnpkg.com/debian/pubkey.gpg | apt-key add -
RUN echo "deb https://dl.yarnpkg.com/debian/ rc main" | tee /etc/apt/sources.list.d/yarn.list
RUN apt-get update
RUN apt-get -y install yarn
RUN apt-get -y install php-fpm
RUN service php7.3-fpm stop
RUN echo 'listen = 9000' >> /etc/php/7.3/fpm/php-fpm.conf

RUN mkdir /var/www/.composer/
RUN mkdir /var/www/.cache/
RUN chmod 770 /var/www/ -R
RUN chown root:www-data /var/www/ -R
USER www-data
RUN cd /var/www/
