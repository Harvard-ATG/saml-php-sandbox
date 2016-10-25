#!/bin/bash

export DEBIAN_FRONTEND=noninteractive

echo "Provisioning virtual machine..."

echo "Updating repository"
add-apt-repository ppa:ondrej/php5 -y > /dev/null
apt-get update

echo "Installing Git"
apt-get install git -y > /dev/null

echo "Install Essential" 
apt-get install python-software-properties build-essential -y > /dev/null

echo "Installing PHP"
apt-get install php5-common php5-dev php5-cli php5-fpm -y > /dev/null
apt-get install curl php5-curl php5-gd php5-mcrypt php5-mysql -y > /dev/null

cp /var/www/provision/config/www.conf /var/php5/fpm/pool.d/

service php5-fpm restart

echo "Installing Nginx"
apt-get install nginx -y > /dev/null

echo "Configuring Nginx"
#cp -v /var/www/provision/config/nginx_vhost /etc/nginx/sites-available/nginx_vhost 
if [ -e /etc/nginx/sites-enabled/default ]; then
	rm -vf /etc/nginx/sites-enabled/default
fi
if [ ! -e /etc/nginx/sites-enabled/nginx_vhost ]; then
	#ln -sv /etc/nginx/sites-available/nginx_vhost /etc/nginx/sites-enabled/
	ln -sv /var/www/provision/config/nginx_vhost /etc/nginx/sites-enabled/nginx_vhost 
fi
service nginx restart 

echo "Done provisioning."
