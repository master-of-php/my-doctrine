<?php
/**
 * Created by PhpStorm.
 * User: tim
 * Date: 18.10.18
 * Time: 17:33
 */

// create_product.php <name>
require_once "bootstrap.php";

$newProductName = $argv[1];

$product = new Product();
$product->setName($newProductName);

$entityManager->persist($product);
$entityManager->flush();

echo "Created Product with ID " . $product->getId() . "\n";
