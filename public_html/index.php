<!doctype html>
<html lang="en">
  <head>
    <title>Facebook Lite</title>
    <meta charset="utf-8">
  </head>
  <body style="background-image:url('climbing-wallpaper.jpg'); background-size: 1400px 660px" >
    <center>
      <h1 style="color:white; font-size: 3em; margin-top: 1.5em;">Facebook Lite</h1>
    </center>
    <style>
      div {
      background-color: lightgrey;
      width: 300px;
      border: 15px solid green;
      padding: 50px;
      margin: 20px;
      text-align: center;
      left: 50%;
      top: 50%;
      transform: translate(100%, 20%);
      }
    </style>
    <div class="container">
      <label>
      <b>Login</b>
      </label>
      <br style = “line-height:5px;”><br>
      <form action="login_input.php" method="post">
        <label for="emailid">
        <b>User Name</b>
        </label>
        <input type="text" placeholder="Enter Email Id" name="emailid" required>
        <br style = “line-height:5px;”><br>
        <label for="passwd">
        <b>Password</b>
        </label>
        <input type="password" placeholder="Enter Password" name="passwd" required>
        <br style = “line-height:5px;”><br>
        <button type="submit">Login</button>
        <br style = “line-height:5px;”><br>
      </form>
      <label>
      <b>not a user?</b>
      </label>
      <a href="signup.php"><button type="submit">Sign Up</button></a>
    </div>
  </body>
</html>
