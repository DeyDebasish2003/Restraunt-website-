<?php

session_start();
$_SESSION["username"] = "hey welcome to our wesbite";

echo $_SESSION["username"];

echo $_SESSION["username"];


session_unset();


?>