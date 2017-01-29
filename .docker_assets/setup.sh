#!/usr/bin/env bash

##-------------------------------------------------------
# UPDATE CONFIG FILES
##-------------------------------------------------------

# set timezone machine to America/New_York
cp /usr/share/zoneinfo/America/New_York /etc/localtime

# set UTF-8 environment
echo 'LC_ALL=en_US.UTF-8' >> /etc/environment
echo 'LANG=en_US.UTF-8' >> /etc/environment
echo 'LC_CTYPE=en_US.UTF-8' >> /etc/environment

# enable xdebug
echo 'xdebug.remote_enable=1' >> /etc/php/7.0/mods-available/xdebug.ini
echo 'xdebug.remote_connect_back=1' >> /etc/php/7.0/mods-available/xdebug.ini
echo 'xdebug.show_error_trace=1' >> /etc/php/7.0/mods-available/xdebug.ini
echo 'xdebug.remote_port=9000' >> /etc/php/7.0/mods-available/xdebug.ini
echo 'xdebug.scream=0' >> /etc/php/7.0/mods-available/xdebug.ini
echo 'xdebug.show_local_vars=1' >> /etc/php/7.0/mods-available/xdebug.ini
echo 'xdebug.idekey=PHPSTORM' >> /etc/php/7.0/mods-available/xdebug.ini

# set PHP7 timezone to America/New_York
sed -i "s/;date.timezone =*/date.timezone = America\/New_York/" /etc/php/7.0/fpm/php.ini
sed -i "s/;date.timezone =*/date.timezone = America\/New_York/" /etc/php/7.0/cli/php.ini

# setup php7.0-fpm to not run as daemon (allow my_init to control)
sed -i "s/;daemonize\s*=\s*yes/daemonize = no/g" /etc/php/7.0/fpm/php-fpm.conf
sed -i "s/;cgi.fix_pathinfo=1/cgi.fix_pathinfo=0/" /etc/php/7.0/fpm/php.ini

# create run directories
mkdir -p /var/run/php
chown -R www-data:www-data /var/run/php

touch ~/.hushlogin
sh -c "$(curl -fsSL https://raw.githubusercontent.com/robbyrussell/oh-my-zsh/master/tools/install.sh)"

cd ~
git clone https://github.com/nanorc/nanorc.git
cd nanorc
make install

cd ~
git clone https://github.com/zsh-users/zsh-syntax-highlighting.git
git clone git://github.com/zsh-users/zsh-autosuggestions $ZSH_CUSTOM/plugins/zsh-autosuggestions