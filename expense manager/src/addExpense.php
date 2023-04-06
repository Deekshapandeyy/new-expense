<?php
session_start();
include_once("config.php");
$category = $_POST['Category'];
$expense = $_POST['Expense'];
array_push($_SESSION['expenses'], array($category => $expense));
print_r($_SESSION['expenses']);
?>