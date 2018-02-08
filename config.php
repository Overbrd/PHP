<?php
//Connect To Database
$hostname='yntr7642.db.4815081.resteazy.com';
$username='yntr7642';
$password='Zres748aZ1692';
$dbname='yntr7642';
$usertable='yntr7642';
$yourfield = 'ApplicationNumber';

mysql_connect($hostname,$username, $password) OR DIE ('Unable to connect to database! Please try again later.');
mysql_select_db($dbname);

$query = 'SELECT * FROM $usertable';
$result = mysql_query($query);
if($result) {
    while($row = mysql_fetch_array($result)){
        $name = $row['$yourfield'];
        echo 'Name: '.$name;
    }
}
?> 