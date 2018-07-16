<?php
  if (empty($_POST['email']) || empty($_POST['password'])) header('Location: ../error.php');

  else if (isset($_POST['email']) && isset($_POST['password'])) {
    /* GET THE DATA */
    $email = $_POST['email'];
    $password = $_POST['password'];

    /* DATABASE STUFF */
    require_once("dbLogin.php");
    $table = "AOT_users";

    /* GET PASSWORD FROM DATABASE */
    $result = mysqli_query($link, "SELECT * FROM $table WHERE (`email` = '$email')");
    while ($data = mysqli_fetch_assoc($result)) {
      $pswFromDatabase = $data["password"];
      $username = $data["name"];
      $id_swiper = $data["id"];
      $gender = $data["gender"];
      $verified = $data["verified"];
      $prof_made = $data["prof_made"];
      $age = floor((time() - strtotime($data["birthday"])) / 31556926);
      echo "Username: $username<br>\n";
      close_connection($link);

      /* SEPERATE THE PASSWORD */
      $re = '/^(\d{1,3})([a-f]{1})([\da-f]+)$/imx';
      preg_match_all($re, $pswFromDatabase, $matches, PREG_SET_ORDER);
      $complete = $matches[0][0];
      $id = $matches[0][1];
      $separator = $matches[0][2];

      /* HASH PASSWORD USER SUBMITTED */
      $pswHashed = custom_hash($password, $id, $separator);
      echo "PswFromDatabase: $pswFromDatabase\n";
      echo "PswHashed: $pswHashed\n";

      /* COMPARE PASSWORDS */
      $is_valid = ($complete == $pswHashed);
      if ($is_valid) {
        session_start();
        $_SESSION["id_swiper"] = $id_swiper;
        $_SESSION["username"] = $username;
        $_SESSION["age"] = $age;
        $_SESSION["email"] = $email;
        $_SESSION["gender"] = $gender;

        /* VERIFICATION AND PROFILE MADE CHECK */
        if ($verified == 0) {
          header('Location: ../index.php?msg=verification_error');
        }
        else if ($verified == 1 && $prof_made == 0) {
          header('Location: ../profileSetup.php');
        }
        else if ($verified == 1 && $prof_made == 1) {
          header('Location: ../home.php');
        }
        else {
          header('Location: ../error.php');
        }
      }

      else {
        header('Location: ../error.php'); // If passwords do not match
      }
    }
  }
  else {
    header('Location: ../error.php'); // If not all data has been set
  }

?>
