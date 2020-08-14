<?php 

// establish a database connection to your Oracle database.
include 'connection.php';

$dob = $_POST['dob'];
$dob_formated = date ('d-M-Y', strtotime($dob));

$query = 'insert into member values (\''. $_POST["emailid"].' \', \''. $_POST["fullname"].' \', \''. $_POST["screename"].' \', \''. $dob_formated .' \', \''. $_POST["gender"].' \', \''. $_POST["status"].' \', \''. $_POST["location"].' \', \''. $_POST["visibility"].' \',  \''. $_POST["passwd"].' \')';
$stid = oci_parse($conn, $query);
$result =  oci_execute($stid);

if ($result && $_POST["emailid"] && $_POST["fullname"] && $_POST["screename"] && $_POST["passwd"]){

session_start();
$_SESSION['emailid'] = $_POST['emailid'];
$_SESSION['fullname'] = $_POST['fullname'];
$_SESSION['screename'] = $_POST['screename'];
$_SESSION['dob'] = $_POST['dob'];
$_SESSION['gender'] = $_POST['status'];
$_SESSION['location'] = $_POST['location'];
$_SESSION['visibility'] = $_POST['visibility'];
$_SESSION['passwd'] = $_POST['passwd'];

header ('Location: home.php');
}
else{
header ('Location: signup.php');
}
oci_free_statement($stid);
commit();
oci_close($conn);

?>
