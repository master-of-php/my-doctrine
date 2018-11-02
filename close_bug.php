<?php
/**
 * Created by PhpStorm.
 * User: tim
 * Date: 02.11.18
 * Time: 12:52
 */
require_once "bootstrap.php";

$theBugId = $argv[1];

$bug = $entityManager->find("Bug", $theBugId);

$bug->close();
$entityManager->flush();