<?php

session_start();
$id=$_GET["id"];
unset($_SESSION["sepet"][$id]);
header("location:sepet.html");


?>
