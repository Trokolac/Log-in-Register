<?php

$db=require './db.inc.php';
$conf=require './config.inc.php';

$stmt_createUsersTable = $db->prepare("
    CREATE TABLE IF NOT EXISTS `users`(
        `id` int AUTO_INCREMENT PRIMARY KEY,
        `email` varchar(30),
        `name` varchar(30),
        `password` varchar(32),
        `created_at` datetime DEFAULT now(),
        `updated_at` datetime DEFAULT now() ON UPDATE now(),
        `deleted_at` datetime DEFAULT NULL  
    )
");

$stmt_createUsersTable->execute();