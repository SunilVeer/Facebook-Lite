<!doctype html>
<html lang="en">
  <head>
    <title>Edit Profile Page</title>
    <meta charset="utf-8">
  </head>
  <body style="background-image:url('bubbles.jpg'); background-size: 1400px 660px">
    <h1 style="color:lightgrey; font-size: 2em; margin-top: 1em; margin-left: 1em">
      <center>Edit Profile Page</center>
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
      <b style="color:Black; font-size: 2em;">Edit the required fields:</b>
      </label>
      <br></br>
      <form action="edit_profile_input.php" method="post">
        <table>
          <tr>
            <td><label for="fullname">
              <b>Full Name : </b>
              </label>
            </td>
            <td><input type="text" placeholder="Enter Full Name" name="fullname"></td>
          </tr>
          <tr>
            <td><label for="screename">
              <b>Screen Name : </b>
              </label>
            </td>
            <td>   <input type="text" placeholder="Enter Screen Name" name="screename"></td>
          </tr>
          <tr>
            <td><label for="dob">
              <b>Date Of Birth : </b>
              </label>
            </td>
            <td><input type="date" placeholder="Enter Date Of Birth" name="dob"></td>
          </tr>
          <tr>
            <td><label for="gender" >
              <b>Select a Gender : </b>
              </label>
            </td>
            <td>
      <form>
      <input type="radio" name="gender" value="male" checked> Male
      <input type="radio" name="gender" value="female"> Female
      <input type="radio" name="gender" value="other"> Other
      </form> 
      </td>
      </tr>
      <tr>
      <td><label for="status">
      <b>Status : </b>
      </label></td>
      <td><input type="text" placeholder="Enter Your Status" name="status" ></td>
      </tr>
      <tr>
      <td><label for="visibility">
      <b>Visibility Level : </b>
      </label></td>
      <td>   <input type="text" placeholder="Enter Visibility" name="visibility"><br>can use private, friends-only or everyone</td>
      </tr>
      <tr>
      <td><label for="location">
      <b>Location : </b>
      </label></td>
      <td><input type="text" placeholder="Enter your location" name="location"></td>
      </tr>
      <tr>
      <td><label for="passwd">
      <b>Password : </b>
      </label></td>
      <td><input type="password" placeholder="Enter Password" name="passwd"></td>
      </tr>
      <tr><td><button type="submit">Edit</button></td></tr> 
      <tr><td><a href="home.php"><button type="submit">Cancel</button></a></td></tr>
      </table>
      </form>
    </div>
  </body>
</html>
