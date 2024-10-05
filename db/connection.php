<?php
$dbSetup = "mysql:host=localhost;dbname=timoshen12;charset=utf8";
$dbUser = "timoshen12";
$dbPass = "Ert135ertBnm147bnm";
$dbErrMode = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];
$conn = new PDO ($dbSetup, $dbUser, $dbPass, $dbErrMode);
?>