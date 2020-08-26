<?php
include 'connection.php';
session_start();

$friend_email = $_GET['email']; 
$date = Date("d F Y");
$request_status = 'pending';

$query = 'insert into freind_request values (\''. $_SESSION['emailid'].' \', \''. $_GET['email'].' \', :rs, :dt)';
$stid = oci_parse($conn, $query);
oci_bind_by_name ($stid, ':rs', $request_status);
oci_bind_by_name ($stid, ':dt', $date);
oci_execute($stid);
oci_free_statement($stid);
oci_close($conn);

header('Location: home.php');
?>

