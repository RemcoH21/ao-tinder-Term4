<?php
session_start();
 ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title></title>
  <link rel="stylesheet" href="css/pages/index.css">
  <link rel="stylesheet" href="css/components/footer.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
</head>

<body>
  <div class="fluid-container">
    <div class="background">
      <nav class="navbar fixed-top navbar-dark main-nav">
        <ul class="nav navbar-nav mx-auto">
          <img src="images/logo.png">
        </ul>
      </nav>
      <br><br><br><br><br>
      <div class="register">
        <p>Sign in</p>
        <hr>
        <form action="php/login.php" method="POST">
          <div class="form-group">
            <label>Your email</label>
            <input type="text" name="email" class="form-control" required="required">
          </div>
          <div class="form-group">
            <label>Your password</label>
            <input type="password" name="password" class="form-control" required="required">
          </div>
          <input class="button" type="submit" value="Sign in">
          <button type="button" data-toggle="modal" data-target="#registerModal">
              Create an account
          </button>
          <br><br>
        </form>
      </div>
    </div>
    <div class="modal fade" id="registerModal">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Register here</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>
          <div class="modal-body">
            <form action="php/register.php" method="POST">
              <div class="form-group">
                <label>What is your full name?</label>
                <input type="text" name="full_name" class="form-control" placeholder="Your Name" required="required">
              </div>
              <div class="form-group">
                <label for="birthplace">When were you born?</label>
                <input id="birthplace" type="date" name="birth_date" class="form-control" required="required">
              </div>
              <div class="form-group">
                <label>What is your email?</label>
                <input type="email" class="form-control" name="email" aria-describedby="emailHelp" placeholder="Your email" required="required">
                <small id="emailHelp" class="form-text text-muted">
                  We'll never share your email with anyone else.
                </small>
              </div>
              <div class="form-group">
                <label for="password">Please fill in a password.</label>
                <input id="password" type="password" name="password" class="form-control" placeholder="Your Password" required="required">
              </div>
              <input class="button" type="submit" value="Register">
            </form>
          </div>
        </div>
      </div>
    </div>

    <div class="row" id="plus-points">
      <div class="col-sm">
        <i class="fas fa-check"></i>
        <p>Free registration</p>
      </div>
      <div class="col-sm">
        <i class="fas fa-check"></i>
        <p>No bullshit</p>
      </div>
      <div class="col-sm">
        <i class="fas fa-check"></i>
        <p>Easy to use</p>
      </div>
    </div>
    <div class="register-info">
      <p class="register-info-title">Register now! Answer the questions above and start your adventure.</p>
      <p class="register-info-subtitle">
        This service is for ao-ers aged 18 or older. Registration is free! <br> Once registered, you can view profiles, create your own profile and chat with others.
      </p>
      <br>
      <p class="register-info-subtitle">
        When you find someone you like, you can contact him or her by sending a private message or directly starting the live chat
      </p>
      <button type="button" data-toggle="modal" data-target="#registerModal">
          Create an account
      </button>
    </div>
    <div class="row" id="plus-points2">
      <div class="col-sm">
        <i class="fas fa-user-friends"></i>
        <h1>18+</h1>
        <p>
          This is the perfect dating site for <br> ao-ers aged 18 or older.
        </p>
      </div>
      <div class="col-sm">
        <i class="fas fa-envelope"></i>
        <h1>Privacy</h1>
        <p>
          We keep your data safe and make sure <br> that nobody can access it.
        </p>
      </div>
      <div class="col-sm">
        <i class="fas fa-mobile-alt"></i>
        <h1>Responsive</h1>
        <p>
          This website is optimized for all devices, <br> such as desktop, tablet and smartphone.
        </p>
      </div>
    </div>
    <div class="row" id="information">
      <div class="col-sm">
        <h1>Information</h1>
        <p style="text-align: left;">
          This is a service for ao-ers of 18 years or older. ao-ers are active on this website every day. Profiles on this website can be fake and we can't do anything about that. Fortunately, there are also profiles that are real and you may find the real ao-er
          that suits you.
        </p>
      </div>
      <div class="col-sm">
        <h1>Why this website?</h1>
        <p>
          - Free registration <br> - No payments later on <br> - Access to all profiles <br> - Send messages to others <br> - Advanced search engine <br>
        </p>
      </div>
      <div class="col-sm">
        <img src="images/logo.png">
      </div>
    </div>
    <div class="copyright">
      <p>© AO-Tinder 2018</p>
      <p><a href="http://edportal.myddns.rocks/">Etoine de Vries</a> | <a href="http://www.jelmerhalff.eu">Jelmer Halff</a> | <a href="https://www.facebook.com/remco.hanenburg">Remco Hanenburg</a></p>
    </div>
  </div>
</body>

</html>
