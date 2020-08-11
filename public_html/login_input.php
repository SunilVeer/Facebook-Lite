<?php
include 'connection.php';

session_start();

$login = 'SELECT * FROM member WHERE email = \''. $_POST["emailid"].' \' and password = \''. $_POST["passwd"].' \'';

$stid = oci_parse($conn, $login);
oci_execute($stid);

if ((oci_fetch_row($stid)) == true) {

// Set emailid session variable
$_SESSION['emailid'] = $_POST['emailid'];
$_SESSION['fullname'] = $_POST['fullname'];
$_SESSION['screename'] = $_POST['screename'];
$_SESSION['dob'] = $_POST['dob'];
$_SESSION['gender'] = $_POST['status'];
$_SESSION['location'] = $_POST['location'];
$_SESSION['visibility'] = $_POST['visibility'];
$_SESSION['passwd'] = $_POST['passwd'];

// Jump to secured page
header('Location: home.php');
}

else{

//login failed
header('Location: index.php');
}

oci_free_statement($stid);
oci_close($conn);
?>

