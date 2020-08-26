<?php
include 'connection.php';
session_start();

$friend_email = $_GET['email'];

$query = 'delete from freind_request where member_email1 = \''. $_SESSION['emailid'].' \' and member_email = \''. $_GET['email'].' \'';
$stid = oci_parse($conn, $query);
oci_execute($stid);
oci_close($conn);

header('Location: home.php');
?>


