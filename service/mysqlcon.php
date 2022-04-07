<?php
session_start();
$host="localhost";
$username="root";
$password="";
$db_name="Fakturowanie";
$link=mysql_connect("$host", "$username", "$password")or die("Nie można połączyć");
mysql_select_db("$db_name")or die("nie ma takiej bazy");
?>
