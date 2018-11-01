delete vendor's folder, change version php to PHP 7.1.23
composer install and check (run command git status)
create database mydb; (run it in mysql console)
change credential in bootstrap.php
run php create_product.php test-product01 (test-product01 is field's name value of product table)
php create_product.php test-product01
php list_products.php
php show_product.php 1
php update_product.php 5 'test update product php file'
**********************************************************
vendor/bin/doctrine orm:schema-tool:drop --force
vendor/bin/doctrine orm:schema-tool:create
vendor/bin/doctrine orm:schema-tool:update --force
**********************************************************
php create_user.php Evgeniy
php create_user.php Boris
php create_product.php "Braem (Java)";
php create_bug.php 1 1 1
php create_bug.php 2 2 1
php create_bug.php 1 2 1
**********************************************************
php list_bugs.php

