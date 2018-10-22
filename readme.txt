delete vendor's folder, change version php to PHP 7.1.23
create database mydb; (run it in mysql console -> create database mydb;)
change credential in bootstrap.php
run php create_product.php test-product01
test-product01 is field's name value of product table
**********************************************************
vendor/bin/doctrine orm:schema-tool:drop --force
vendor/bin/doctrine orm:schema-tool:create
vendor/bin/doctrine orm:schema-tool:update --force
**********************************************************