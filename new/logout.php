<?php
session_start();

session_destroy();

header("location: main/home.php");
?>