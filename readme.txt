sudo apt-get install sqlite3 php-sqlite3
sudo apt install php7.1-sqlite3
php 5.6
create database mydb;
vendor/bin/doctrine orm:schema-tool:drop --force
vendor/bin/doctrine orm:schema-tool:create
vendor/bin/doctrine orm:schema-tool:update --force