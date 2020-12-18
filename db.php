<?php
$mysqli = new mysqli('127.0.0.1', 'root', 'usbw','platserdbnew');
if(mysqli_connect_error()){echo mysqli_connect_error(); exit;};
mysqli_set_charset($mysqli,"utf8");