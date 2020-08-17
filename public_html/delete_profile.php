<?php
include 'connection.php';
session_start();

$query = 'delete from member where email = \''. $_SESSION['emailid'].' \'';
$stid = oci_parse($conn, $query);
oci_execute($stid);
oci_close($conn);

//after deleting account it will logout just to stop the sessions started previously
header('Location: logout.php');
?>
