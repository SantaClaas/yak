#!  /bin/bash

echo "Setting up WordPress";
echo "Configuring";
cp ./wp-config.php /var/www/html/wp-config.php;

cd /var/www/html;
echo "Installing plugins";
wp plugin install menu-icons classic-editor external-markdown --activate;
