<?php
/**
 * Created by PhpStorm.
 * User: tim
 * Date: 22.10.18
 * Time: 11:37
 */
require_once "bootstrap.php";

$id = $argv[1];
$product = $entityManager->find('Product', $id);

if ($product === null) {
    echo "No product found.\n";
    exit(1);
}

echo sprintf("-%s\n", $product->getName());