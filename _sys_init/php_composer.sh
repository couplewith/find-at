

tail  /etc/profile
echo "export PATH=/usr/local/fpm-php/bin:\$PATH" >> /etc/profile


php -r "readfile('https://getcomposer.org/installer');" | php -- --install-dir=/usr/local/bin/


composer require  "elasticsearch/elasticsearch"


# https://www.lesstif.com/pages/viewpage.action?pageId=23757293
