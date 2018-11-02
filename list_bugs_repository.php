<?php
/**
 * Created by PhpStorm.
 * User: tim
 * Date: 02.11.18
 * Time: 17:00
 */
require_once "bootstrap.php";

$bugs = $entityManager->getRepository('Bug')->getRecentBugs();
$productCount = $entityManager->getRepository(Product::class)
    ->count(['name' => $productName]);

echo "product count: " . $productCount;

foreach ($bugs as $bug) {
    echo $bug->getDescription() . " - " . $bug->getCreated()->format('d.m.Y') . "\n";
    echo "    Reported by: " . $bug->getReporter()->getName() . "\n";
    echo "    Assigned to: " . $bug->getEngineer()->getName() . "\n";
    foreach ($bug->getProducts() as $product) {
        echo "    Platform: " . $product->getName() . "\n";
    }
    echo "\n";
}