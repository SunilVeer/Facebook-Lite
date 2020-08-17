<?php
// establish a database connection to your Oracle database.
include 'connection.php';

session_start();

if ($_POST["fullname"]){
$query = 'update member SET full_name = \''. $_POST["fullname"].' \' where email = \''. $_SESSION["emailid"].' \'';
$stid = oci_parse($conn, $query);
oci_execute($stid);
}

if ($_POST["screename"]){
$query = 'update member SET screen_name = \''. $_POST["screename"].' \' where email = \''. $_SESSION["emailid"].' \'';
$stid = oci_parse($conn, $query);
oci_execute($stid);
}

if ($_POST["dob"]){
$query = 'update member SET date_of_birth = \''. $_POST["dob"].' \' where email = \''. $_SESSION["emailid"].' \'';
$stid = oci_parse($conn, $query);
oci_execute($stid);
}

if ($_POST["gender"]){
$query = 'update member SET gender = \''. $_POST["gender"].' \' where email = \''. $_SESSION["emailid"].' \'';
$stid = oci_parse($conn, $query);
oci_execute($stid);
}

if ($_POST["status"]){
$query = 'update member SET status = \''. $_POST["status"].' \' where email = \''. $_SESSION["emailid"].' \'';
$stid = oci_parse($conn, $query);
oci_execute($stid);
}

if ($_POST["location"]){
$query = 'update member SET location = \''. $_POST["location"].' \' where email = \''. $_SESSION["emailid"].' \'';
$stid = oci_parse($conn, $query);
oci_execute($stid);
}

if ($_POST["visibility"]){
$query = 'update member SET visibility = \''. $_POST["visibility"].' \' where email = \''. $_SESSION["emailid"].' \'';
$stid = oci_parse($conn, $query);
oci_execute($stid);
}

if ($_POST["passwd"]){
$query = 'update member SET password = \''. $_POST["passwd"].' \' where email = \''. $_SESSION["emailid"].' \'';
$stid = oci_parse($conn, $query);
oci_execute($stid);
}

header('Location: home.php');

?>
