<?php
  if (isset($_POST['full_name']) && isset($_POST['birth_date']) && isset($_POST['email']) && isset($_POST['password'])) {

    /* GET THE DATA */
    $fullname = $_POST['full_name'];
    $birthday = $_POST['birth_date'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $verified = 1;
    $token = sha1(time().['a', 'b', 'c'][rand(0,2)]);

    /* DATABASE STUFF*/
    require_once("dbLogin.php");
    $table = "AOT_users";

    /* HASH PASSWORD */
    $password = custom_hash($password);

    /* CHECK IF THERE ALREADY IS A RECORD WITH THE SAME EMAIL */
    $sql = "SELECT COUNT(*) AS c FROM $table WHERE (`email` = '$email') LIMIT 1";
    $result = mysqli_query($link, $sql);

    while ($data = mysqli_fetch_assoc($result)) {
      $count = $data['c'];
    }

    if ($count == 0) {
      $sql = "INSERT INTO $table (`email`, `password`, `name`, `birthday`, `verified`, `token`) VALUES ('$email', '$password', '$fullname', '$birthday', '$verified', '$token')";
      mysqli_query($link, $sql);

      /* GET THE ID */
      $sql = "SELECT * FROM $table WHERE (`email` = '$email')";
      $result = mysqli_query($link, $sql);
      while ($data = mysqli_fetch_assoc($result)) {
        $swiper_id = $data["id"];
      }

      /* MAKE PROFILE FOLDER */
      $filepath = "../profiles/";

      $cmd = "mkdir -p $filepath"."$swiper_id"; // E
      // $cmd = "mkdir ..\\profiles\\$swiper_id"; //R & J

      echo "$cmd<br>\n";
      exec($cmd, $output);

      header("Location: ../index.php");

      /* SEND EMAIL WITH VERIFICATION LINK (EMAIL SUCKS ASS) */
      // $link = 'Please click this link: http://edportal.myddns.rocks/ao-tinder/php/verify.php?token=' . $token;
      // $subj = "Account Validation";
      // exec("echo $link | mail -s $subj $email");
    }
    else {
      echo "Email is already taken";
    }
  }
  else {
    header("Location: ../error.php");
  }

?>
