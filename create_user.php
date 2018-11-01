<?php
/**
 * Created by PhpStorm.
 * User: tim
 * Date: 01.11.18
 * Time: 14:57
 */
require_once "bootstrap.php";
$newUserName = $argv[1];
$user = new User();
$user->setName($newUserName);

$entityManager->persist($user);
$entityManager->flush();

echo "Created User with ID " . $user->getId()."\n";