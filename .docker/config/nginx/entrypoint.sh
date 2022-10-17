#!/bin/sh

if [ ! -f /usr/local/nginx/ssl/cert.key ]; then
    echo "Installing Certificates";

    apk add openssl

    mkdir -p /usr/local/nginx/ssl

    openssl req -x509 -nodes -newkey rsa:2048 -days 365 \
        -keyout '/usr/local/nginx/ssl/cert.key' \
        -out '/usr/local/nginx/ssl/cert.crt' \
        -subj '/CN=henryschein.local'

    openssl dhparam -out /usr/local/nginx/ssl/dhparam.pem 2048
fi

sh /docker-entrypoint.sh nginx -g 'daemon off;';