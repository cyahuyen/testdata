<?php

$host = "localhost";
$use = "root";
$prw = "";
$db = "testdata";
$conn = mysql_connect($host, $use, $prw) or die("can't connect server!");
$db = mysql_select_db($db, $conn) or die("no found database");
mysql_query("SET NAMES 'utf8'");
?>
