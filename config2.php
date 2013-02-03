<?php
session_start();
$server = "localhost"; //Host type
$user = "root"; //Databace username
$password = ""; //Database password
$database = "assignment"; //Database name

ini_set('session.bug_compat_warn', 0);
//Database connection
$connexion = mysqli_connect("$server", "$user", "$password","$database");
?>