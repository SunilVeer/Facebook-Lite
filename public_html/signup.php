<!doctype html>
<html lang="en">
  <head>
    <title>Sign Up Page</title>
    <meta charset="utf-8">
  </head>
  <body style="background-image:url('bubbles.jpg'); background-size: 1400px 660px">
    <h1 style="color:lightgrey; font-size: 2em; margin-top: 1em; margin-left: 1em">
      <center>Sign Up Page</center>
    </h1>
    <style>
      div {
      background-color: lightgrey;
      width: 500px;
      border: 8px solid yellow;
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
      <b style="color:Black; font-size: 2em;">Fill the following information:</b>
      </label>
      <br></br>
      <form action="signup_input.php" method="post">
        <table>
          <tr>
            <td> 
              <label for="emailid" required>
              <b>Email : </b>
              <abbr title="This field is mandatory">*</abbr>
              </label>
            </td>
            <td>
              <input type="email" placeholder="Enter Email Id" name="emailid" required>
            </td>
          </tr>
          <tr>
            <td><label for="fullname" required>
              <b>Full Name : </b>
              <abbr title="This field is mandatory">*</abbr>
              </label>
            </td>
            <td><input type="text" placeholder="Enter Full Name" name="fullname" required></td>
          </tr>
          <tr>
            <td><label for="screename" required>
              <b>Screen Name : </b>
              <abbr title="This field is mandatory">*</abbr>
              </label>
            </td>
            <td>   <input type="text" placeholder="Enter Screen Name" name="screename" required></td>
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
      </form> </td>
      </tr>
      <tr>
      <td><label for="status" required>
      <b>Status : </b>
      </label></td>
      <td>   <input type="text" placeholder="Enter Your Status" name="status" ></td>
      </tr>
      <tr>
      <td><label for="visibility" required>
      <b>Visibility Level : </b>
      </label></td>
      <td>   <input type="text" placeholder="Enter Visibility" name="visibility" ><br>can use private, friends-only or everyone</td>
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
      <abbr title="This field is mandatory">*</abbr>
      </label></td>
      <td><input type="password" placeholder="Enter Password" name="passwd" required></td>
      </tr>
      <tr><td><button type="submit">Sign Up</button></td></tr> 
      </table>
      </form>
    </div>
  </body>
</html>
