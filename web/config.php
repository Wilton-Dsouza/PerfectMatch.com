<?php

$host = 'ec2-3-228-235-79.compute-1.amazonaws.com';
$port = '5432';
$dbname = 'd326i17bserkrq';
$user = 'juxjphcovnrzkd';
$password = '2ccbda92f851b59532d84861d30e3efe6323990ad82f6882e135153f4a5d365a';

$db = pg_connect(
    "
    host = $host
    port = $port
    dbname = $dbname
    user = $user
    password = $password
    "
) or die('Could not connect: ' . pg_last_error());;


session_start();

?>
