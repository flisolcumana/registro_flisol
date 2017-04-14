<?php
error_reporting(E_ALL);
ini_set("display_errors","On");

$nacionalidad="V";
$numero="16315637";

$db_cne = new SQLite3('cne.sqlite');
$results = $db_cne->query("SELECT * FROM persona WHERE nacionalidad='$nacionalidad' and cedula=$numero");
$result=array();
while($row = $results->fetchArray()) $result[]=$row;

print_r($result);
?>
