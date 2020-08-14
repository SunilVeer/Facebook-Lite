<?php
  session_start();
  ?>
<html>
  <head>
    <link type="text/css" rel="stylesheet" href="home_input.css" />
  </head>
  <body>
    <div class="header1">
      <div id="img3" class="header1">
        <h style="color:white; font-size: 2em; margin-left: 15em;">Facebook Lite</h>
      </div>
      <div id="logout" class="header1"><a href="logout.php"><button type="submit">Log Out</button></a></div>
    </div>
    <div class="bodyn">
      <div id="side1" class="bodyn" style="color:white;">
        <?php
          echo "User Name:\n";
          echo $_SESSION['emailid'];
          ?>
      </div>
      <div id="side2" class="bodyn" style="color:darkblue;">Manage Account</div>
      <div id="side23" class="bodyn"><a href="view_profile.php" style="color:black;">View Profile</a></div>
      <div id="side3" class="bodyn"><a href="edit_profile.php" style="color:black;">Edit Profile</a></div>
      <div id="side4" class="bodyn">
        <a href="delete_profile.php" style="color:black;" onclick="return confirm('Can we proceed to delete your profile?')">Delete Profile</a>
      </div>
    </div>
    <div class="post00"></div>
    <div class="post10"></div>
    <div class="header0001"></div>
    <div class="sideboxxx"></div>
    <div class="sideboxxxx2"></div>
    <div class="post">
      <div id="column-1" class="post">
        <center>update post</center>
        <hr>
      </div>
      <div id="postboxpos" class="post"><textarea placeholder=" What's in your mind" id="postbox" type="text"></textarea></div>
      <div id="postpos" class="post">
        <button type='submit'>post</button>
      </div>
    </div>
    <div class="post1">
      <br><br><br><br><br><br><br><br><br><br><br><br>
      <p6>
        <button type='submit'>Like</button>
        <button onclick="commentFunction()">Comment</button>
        <p id="com"></p>
        <script>
          function commentFunction() {
            var out;
            var comment = prompt("Add a Comment");
            if (comment == null || comment == "") {
              out = "User cancelled the comment.";
            } else {
              out = "Comment: " +comment;
            }
            document.getElementById("com").innerHTML = out;
          }
        </script>
        <button type='submit'>Share</button>
      </p6>
      <br>
      <hr>
      <p1>Veer</p1>
      <p2> and</p2>
      <p1> 5 others</p1>
      <p2> like this</p2>
    </div>
    <div class="sidebox">
    <div id="sidebox1" class="sidebox">
      <div id="sideboxx23">Friend List:</div>
      <br><br>
      <table>
        <tr></tr>
        <?php
          include 'friends.php'; 
          ?>
      </table>
    </div>
  </body>
</html>
