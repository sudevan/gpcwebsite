<?php 
include("include.php");
session_unset();
    session_destroy();
    header("location:./"); exit;


?>
