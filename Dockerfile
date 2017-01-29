FROM phusion/baseimage
MAINTAINER Peter Schmalfeldt <me@peterschmalfeldt.com>

# ensure UTF-8
RUN locale-gen en_US.UTF-8
ENV LANG en_US.UTF-8
ENV LC_ALL en_US.UTF-8

# phusion setup
ENV HOME /root
RUN /etc/my_init.d/00_regen_ssh_host_keys.sh

CMD ["/sbin/my_init"]

# nginx-php installation
RUN DEBIAN_FRONTEND="noninteractive" apt-get update
RUN DEBIAN_FRONTEND="noninteractive" apt-get -y upgrade
RUN DEBIAN_FRONTEND="noninteractive" apt-get update --fix-missing
RUN DEBIAN_FRONTEND="noninteractive" apt-get install --no-install-recommends apt-utils -y
RUN DEBIAN_FRONTEND="noninteractive" apt-get install php7.0 -y
RUN DEBIAN_FRONTEND="noninteractive" apt-get install php7.0-fpm php7.0-common php7.0-cli php7.0-mysqlnd php7.0-mcrypt php7.0-curl php7.0-bcmath php7.0-mbstring php7.0-soap php7.0-xml php7.0-zip php7.0-json php7.0-imap php-xdebug -y

# install nginx (full)
RUN DEBIAN_FRONTEND="noninteractive" apt-get install nginx-full -y

# install developer tools
RUN DEBIAN_FRONTEND="noninteractive" apt-get install nodejs -y
RUN DEBIAN_FRONTEND="noninteractive" apt-get install npm -y
RUN DEBIAN_FRONTEND="noninteractive" apt-get install git -y
RUN DEBIAN_FRONTEND="noninteractive" apt-get install --reinstall build-essential -y
RUN DEBIAN_FRONTEND="noninteractive" apt-get install nano -y
RUN DEBIAN_FRONTEND="noninteractive" apt-get install zsh -y

# install php composer
RUN curl -sS https://getcomposer.org/installer | php
RUN mv composer.phar /usr/local/bin/composer

# add build script (also set timezone to Americas/New_York)
RUN mkdir -p /root/setup
ADD .docker_assets/setup.sh /root/setup/setup.sh
RUN chmod +x /root/setup/setup.sh
RUN (cd /root/setup/; /root/setup/setup.sh)

# copy files from repo
ADD .docker_assets/nginx.conf /etc/nginx/sites-available/default
ADD .docker_assets/.bashrc /root/.bashrc
ADD .docker_assets/.zshrc /root/.zshrc
ADD .docker_assets/.nanorc /root/.nanorc

# disable services start
RUN update-rc.d -f apache2 remove
RUN update-rc.d -f nginx remove
RUN update-rc.d -f php7.0-fpm remove

# add startup scripts for nginx
ADD .docker_assets/nginx.sh /etc/service/nginx/run
RUN chmod +x /etc/service/nginx/run

# add startup scripts for php7.0-fpm
ADD .docker_assets/phpfpm.sh /etc/service/phpfpm/run
RUN chmod +x /etc/service/phpfpm/run

RUN chown -R www-data:www-data /var/www
RUN chmod 755 /var/www

# set terminal environment
ENV TERM=xterm

# port and settings
EXPOSE 80 9000

# cleanup apt and lists
RUN apt-get clean
RUN apt-get autoclean