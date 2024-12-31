<?php
include __DIR__.'/../../layouts/header.php';
include __DIR__.'/../../../database/connection.php';

if (!isset($_GET['id'])) {
   $user_id = (int)$_GET['id'];
    $query = "DELETE FROM user WHERE id = $user_id";
    header("Location: ../dashboard.php");
    exit();
}

header("Location: ../dashboard.php");
exit(); 
