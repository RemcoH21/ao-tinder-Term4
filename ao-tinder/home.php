<?php
  session_start();
  if (!isset($_SESSION['username']) || empty($_SESSION['username'])) {
    header("location: index.php");
    exit;
  }
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>AO-Tinder | Homepage</title>
    <link rel="stylesheet" href="css/pages/home.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
  </head>
  <body>
    <div class="aligner">
      <div class="container">
        <p class="title">Homepage</p>
        <a href="php/logout.php"><button class="button">Sign Out</button></a>
        <p class="username"><?php echo $_SESSION["username"]; ?></p>
        <br><br><br>
        <div class="row">
          <div class="col-3" id="welcome-message" onclick="goto_profile()">
            <div class="welcome-message">
              <h1><i class="fas fa-user"></i></h1>
              <h2>My Profile</h2>
              <p>Edit your profile.</p>
            </div>
          </div>
          <div class="col-3" id="notifications" onclick="goto_notifications()">
            <div class="notifications">
              <h1><i class="fas fa-bell"></i></h1>
              <h2>Notifications</h2>
              <p>You have 0 new notifications.</p>
            </div>
          </div>
          <div class="col-6" id="chats" onclick="goto_chats()">
            <div class="chats">
              <h1><i class="fas fa-comments"></i></h1>
              <h2>Chats</h2>
              <p>You have 0 new chats.</p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-4" id="something1" onclick="goto_leaderboard()">
            <div class="something1">
              <h1><i class="fas fa-trophy"></i></h1>
              <h2>Leaderboard</h2>
              <p>Top 10 most liked people.</p>
            </div>
          </div>
          <div class="col-8" id="something2" onclick="goto_swiping()">
            <div class="something2">
              <h1><i class="fas fa-heart"></i></h1>
              <h2>Swiping</h2>
              <p>Find ao'ers by liking or disliking.</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script type="text/javascript">
      function goto_profile() {
        window.location.href = 'profileSetup.php';
      }

      function goto_notifications() {
        window.location.href = '#';
      }

      function goto_chats() {
        window.location.href = '#';
      }

      function goto_leaderboard() {
        window.location.href = "#";
      }

      function goto_swiping() {
        window.location.href = 'swiping.php';
      }
    </script>
  </body>
</html>
