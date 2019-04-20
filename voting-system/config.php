<?php
$hostname = "https://epicgames.lazylinks.fr";
$db_username = "root";
$db_password = "cascarilla6a";

$link = mysql_connect($hostname, $db_username, $db_password) or die("Cannot connect to the database");
mysql_select_db("votes") or die("Cannot select the database");


?>