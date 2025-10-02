#!/bin/bash

sed -i -e "s/\/etc\/ssl\/certs\/ssl-cert-snakeoil.pem/\/etc\/ssl\/private\/$LOCAL_DOMAIN+1.pem/g" /etc/apache2/sites-available/default-ssl.conf

sed -i -e "s/\/etc\/ssl\/private\/ssl-cert-snakeoil.key/\/etc\/ssl\/private\/$LOCAL_DOMAIN+1-key.pem/g" /etc/apache2/sites-available/default-ssl.conf

a2ensite default-ssl
a2enmod ssl

