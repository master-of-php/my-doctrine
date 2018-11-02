<?php
/**
 * Created by PhpStorm.
 * User: tim
 * Date: 02.11.18
 * Time: 12:38
 */
require_once "bootstrap.php";

$dql = "SELECT p.id, p.name, count(b.id) as openBugs FROM Bug b ".
        "JOIN b.products p WHERE b.status = 'OPEN' GROUP BY p.id";

$productBugs = $entityManager->createQuery($dql)->getScalarResult();

foreach ($productBugs as $productBug) {
    echo $productBug['name'] . " has " . $productBug['openBugs'] . " open bugs!\n";
}