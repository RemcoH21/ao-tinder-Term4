<?php
session_start();
$id_swiper = $_SESSION["id_swiper"];

if (!isset($_SESSION['username']) || empty($_SESSION['username'])) {
    header("location: index.php");
    exit;
}

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=chrome">
    <title>Ao Tinder | Profile Setup</title>
    <link rel="stylesheet" href="css/pages/profilesetup.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
  </head>
  <body onload="loadProfPic(<?=$id_swiper?>)">
    <form action="php/upload.php" method="POST" accept-charset="utf-8" name="form" enctype="multipart/form-data">
    <div class="background">
      <div class="profile-picture">
        <img id="pic" src="images/standard_pic.png" onclick="selectImage()"></img>
        <input type="file" name="profpic" accept="image/jpeg, image/png" style="display: none;" id="profpic">
        <input type="hidden" name="MAX_FILE_SIZE" value="25000000">
      </div>
      <h1><?php echo $_SESSION["username"] . ", " . $_SESSION["age"];?></h1>
    </div>
    <div class="container">
      <div class="row">
        <div class="col">
          <div class="form-group">
            <label>* What is your full name?</label>
            <input type="text" name="full_name" value="<?php echo $_SESSION["username"]; ?>" class="form-control" required="required">
          </div>
          <div class="form-group">
            <label>What is your mobile phone number?</label>
            <input type="text" name="phone_number" class="form-control">
          </div>
          <div class="form-group">
            <label>* What is your gender?</label>
            <select name="gender" class="form-control" required="required">
              <option value="m">Male</option>
              <option value="f">Female</option>
              <option value="n">Not specified</option>
            </select>
          </div>
        </div>

        <div class="col">
          <div class="form-group">
            <label>* What is your email?</label>
            <input type="email" name="email" value="<?php echo $_SESSION["email"];?>" class="form-control" required="required">
          </div>
          <div class="form-group">
            <label>* What is your primary language?</label>
            <input type="text" name="country" class="form-control" required="required">
          </div>
          <div class="form-group">
            <label>* What are you looking for?</label>
            <select name="pref_gender" class="form-control" required="required">
              <option value="m" selected>Men</option>
              <option value="f">Woman</option>
              <option value="n">Both</option>
            </select>
          </div>
        </div>
      </div>
      <br>
      <div class="form-group">
        <label style="text-align: center; float: none;">Please describe yourself so people know who you are. <br> Tip: Fill in your interests.</label> <br>
        <textarea name="description"></textarea>
      </div>
      <input type="submit" class="button">
      <br><br><br>
    </div>

    <script>
      function selectImage() {
        document.getElementById("profpic").click();
      }

      function loadProfPic(id_swiper) {
        document.getElementById("pic").setAttribute("src", "profiles/"+id_swiper+"/profpic.png");
      }

      /* Makes profile picture display */
      $(document.getElementById("profpic")).change(function(e) {
        for (var i = 0; i < e.originalEvent.srcElement.files.length; i++) {
            var file = e.originalEvent.srcElement.files[i];
            var img = document.getElementById("pic");
            var reader = new FileReader();
            reader.onloadend = function() {
                 img.src = reader.result;
            }
            reader.readAsDataURL(file);
            $(document.getElementById("profpic")).after(img);
        }
      });
    </script>
    </form>
  </body>
</html>
