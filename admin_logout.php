<?php 
require 'fix_mysql.inc.php';
session_start();
session_destroy();
header('location:adminlogin.php');   
?>
