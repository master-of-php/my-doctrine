<?php
/**
 * Created by PhpStorm.
 * User: tim
 * Date: 22.10.18
 * Time: 11:28
 */

require_once "bootstrap.php";

$productRepository = $entityManager->getRepository('Product');
$products = $productRepository->findAll();

foreach ($products as $product) {
    echo sprintf("-%s\n", $product->getName());
}