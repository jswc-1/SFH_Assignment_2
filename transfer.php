<?php
session_start();
$_SESSION["Title"] = $_POST["Title"];
$_SESSION["FName"] = $_POST["FName"];
$_SESSION["LName"] = $_POST["LName"];
$_SESSION["Role"] = $_POST["Role"];

header("Location: problem.php");
?>
