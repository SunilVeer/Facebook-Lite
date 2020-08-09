<?php
$username = '<username>';
$password = '<password>';
$servername = '<servername>';
$servicename = '<servicename>';
$connection = $servername."/".$servicename;

$conn = oci_connect($username, $password, $connection);
if(!$conn)
{
    $e = oci_error();
    trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
}
?>

