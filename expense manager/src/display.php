<?php
// session_start();
include_once("config.php");
foreach ($_SESSION['expenses'] as $expensekey => $expensevalue) {
    foreach ($expensevalue as $key => $value) {
        echo "<tr><td>".$key."</td><td>".$_SESSION['expenses'][$expensekey][$key]."</td><td><button id='$expensekey' onclick='edit(this.id)'>Edit</button></td><td><button id='$expensekey' onclick='deleteExpense(this.id)'>Delete</button></td></tr>";
    }
}

?>