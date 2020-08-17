<!doctype html>
<?php
  session_start();
  include 'connection.php';
  $stid = oci_parse($conn, 'SELECT * FROM member where email = \''. $_SESSION["emailid"].' \'');
  oci_execute($stid);
  $row = oci_fetch_row($stid);
  ?>
<html lang="en">
  <head>
    <title>View Profile Page</title>
    <meta charset="utf-8">
  </head>
  <body style="background-image:url('bubbles.jpg'); background-size: 1400px 660px">
    <h1 style="color:lightgrey; font-size: 2em; margin-top: 1em; margin-left: 1em">
      <center>View Profile Page</center>
    </h1>
    <style>
      div {
      background-color: lightgrey;
      width: 500px;
      border: 8px solid red;
      padding: 10px;
      margin: 20px;
      text-align: left;
      left: 50%;
      top: 50%;
      transform: translate(75%, 10%);
      }
    </style>
    <div class="container">
      <label>
      <b style="color:Black; font-size: 2em;">Your profile details:</b>
      </label>
      <br></br>
      <form action="home.php" method="post">
        <table>
          <tr>
            <td>
              <label for="emailid">
              <b>Email : </b>
              </label>
            </td>
            <td>
              <input type="email" name="emailid" value="<?php echo $row[0]; ?>" readonly>
            </td>
          </tr>
          <tr>
            <td><label for="fullname">
              <b>Full Name : </b>
              </label>
            </td>
            <td><input type="text"  name="fullname" value="<?php echo $row[1]; ?>" readonly></td>
          </tr>
          <tr>
            <td><label for="screename">
              <b>Screen Name : </b>
              </label>
            </td>
            <td>   <input type="text" name="screename" value="<?php echo $row[2]; ?>" readonly></td>
          </tr>
          <tr>
            <td><label for="dob">
              <b>Date Of Birth : </b>
              </label>
            </td>
            <td><input type="text"  name="dob" value="<?php echo $row[3]; ?>" readonly></td>
          </tr>
          <tr>
            <td><label for="gender" >
              <b>Select a Gender : </b>
              </label>
            </td>
            <td>    
              <input type="text" name="gender" value="<?php echo $row[4]; ?>" readonly>
            </td>
          </tr>
          <tr>
            <td><label for="status">
              <b>Status : </b>
              </label>
            </td>
            <td><input type="text" name="status" value="<?php echo $row[5]; ?>" readonly></td>
          </tr>
          <tr>
            <td><label for="visibility">
              <b>Visibility Level : </b>
              </label>
            </td>
            <td>   <input type="text" name="visibility"  value="<?php echo $row[6]; ?>" readonly></td>
          </tr>
          <tr>
            <td><label for="location">
              <b>Location : </b>
              </label>
            </td>
            <td><input type="text" name="location"  value="<?php echo $row[7]; ?>" readonly></td>
          </tr>
          <tr>
            <td><label for="passwd">
              <b>Password : </b>
              </label>
            </td>
            <td><input type="password" name="passwd"  value="<?php echo $row[8]; ?>" readonly></td>
          </tr>
          <tr>
            <td><button type="submit">Go Back</button></td>
          </tr>
        </table>
      </form>
    </div>
  </body>
</html>
