<?php
include 'connection.php';

$stid = oci_parse($conn, 'SELECT email FROM member where email <> \''. $_SESSION["emailid"].' \'');
oci_execute($stid);

while (($row = oci_fetch_row($stid)) != false) {
$row1 = 'NULL';
$row2 = 'NULL';

$stid2 = oci_parse($conn, 'SELECT request_status FROM freind_request where member_email1 = \''. $_SESSION["emailid"].' \' and member_email = :rw');
oci_bind_by_name ($stid2, ':rw', $row[0]);
oci_execute($stid2);
$row2 = oci_fetch_row($stid2);

if (strcmp($row2[0],'accepted') ==2){
echo "<tr><td>";
echo $row[0] . "</td><td></td></tr>";
$row2 = 'NULL';
}

else {
if (strcmp($row2[0],'pending')==3){
echo "<tr><td>";
echo $row[0] . "</td><td>
<a href= 'accept_friends.php?email=$row[0]'><button type='submit'>Accept</button></a>
<a href= 'reject_friends.php?email=$row[0]'><button type='submit'>Reject</button></a>
</td></tr>";
$row2 = 'NULL';
}

else {

$stid1 = oci_parse($conn, 'SELECT request_status FROM freind_request where member_email = \''. $_SESSION["emailid"].' \' and member_email1 = :rw');
oci_bind_by_name ($stid1, ':rw', $row[0]);
oci_execute($stid1);
$row1 = oci_fetch_row($stid1);

if (strcmp($row1[0],'pending')==-7){
echo "<tr><td>";
echo $row[0] . "</td><td>
<a href= 'manage_friends.php?email=$row[0]'><button type='submit'>Send Request</button></a>
</td></tr>";
$row1 = 'NULL';
}

else if (strcmp($row1[0],'pending')==3){
echo "<tr><td>";
echo $row[0] . "</td><td>
<button type='submit'>Request Sent</button>
</td></tr>";
$row1 = 'NULL';
}

else if (strcmp($row1[0],'accepted')==2){
echo "<tr><td>";
echo $row[0] . "</td><td></td></tr>";
$row1 = 'NULL';
}

}
}
}
echo "</table>\n";
    oci_close($conn);
?>
