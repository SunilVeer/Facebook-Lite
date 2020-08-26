<?php
include 'connection.php';
session_start();
$friend_email = $_GET['email'];
$request_status = 'accepted';
$date = Date("d M Y");
$query = 'update freind_request set request_status = :rs where member_email1 = \''. $_SESSION['emailid'].' \' and member_email = \''. $_GET['email'].' \'';
$stid = oci_parse($conn, $query);
oci_bind_by_name ($stid, ':rs', $request_status);
oci_execute($stid);
echo "$query";

$query1 = 'insert into friend values (\''. $_GET['email'].' \', \''. $_SESSION['emailid'].' \', :dt)';
$stid1 = oci_parse($conn, $query1);
oci_bind_by_name ($stid1, ':dt', $date);
oci_execute($stid1);
echo "$query1";
oci_free_statement($stid);
oci_free_statement($stid1);
oci_close($conn);

header('Location: home.php');

?>

