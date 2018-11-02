<?php
/**
 * Created by PhpStorm.
 * User: tim
 * Date: 02.11.18
 * Time: 11:19
 */
require_once "bootstrap.php";

$theBugId = $argv[1];
$bug = $entityManager->find("Bug", (int)$theBugId);
echo "Bug: ".$bug->getDescription()."\n";
echo "Engineer: " . $bug->getEngineer()->getName() . "\n";
