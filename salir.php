<?php

session_start();

$usuario=$_SESSION['oficial_num_placa'];
session_destroy();
header("location: index.html");
exit();


?>