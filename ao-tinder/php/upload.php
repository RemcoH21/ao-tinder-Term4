<?php
  session_start();

  if (isset($_FILES['profpic']) && isset($_SESSION["id_swiper"]) && isset($_POST["full_name"]) && isset($_POST["gender"]) && isset($_POST["email"]) && isset($_POST["country"]) && isset($_POST["pref_gender"])) {
    if (empty($_FILES['profpic']) || empty($_SESSION["id_swiper"]) || empty($_POST["full_name"]) || empty($_POST["gender"]) || empty($_POST["email"]) || empty($_POST["country"]) || empty($_POST["pref_gender"])) {
      header("Location: ../profileSetup.php");
    }
    else {
      /* GET THE DATA */
      $id = $_SESSION["id_swiper"];
      $fullname = $_POST["full_name"];
      $gender = $_POST["gender"];
      $email = $_POST["email"];
      $language = $_POST["country"];
      $pref_gender = $_POST["pref_gender"];
      $phone_number = 3;
      $desc = "";
      if (isset($_POST["phone_number"]) && !empty($_POST["phone_number"])) $phone_number = $_POST["phone_number"];
      if (isset($_POST["description"]) && !empty($_POST["description"])) $desc = $_POST["description"];
      print_r($_FILES);

      /* DATABASE STUFF */
      require_once("dbLogin.php");
      $table = "AOT_users";

      $sql = "UPDATE $table SET `name` = '$fullname', `gender` = '$gender', `phone` = '$phone_number', `language` = '$language', `pref_gender` = '$pref_gender', `desc` = '$desc', `prof_made` = 1 WHERE (`id` = '$id')";
      mysqli_query($link, $sql);

      // Maybe check if succeeeded?

      $filepath = "../profiles/";
      $uploaddir = "$filepath"."$id/";
      $profpic_name = "profpic.png"; // Changes the profile pic to a standard name for convenience)
      $profpic_tmp = $_FILES['profpic']['tmp_name'];
      echo "<br>\n$profpic_tmp<br>\n";
      echo "$profpic_name";

      if (move_uploaded_file($profpic_tmp, $uploaddir.$profpic_name)) {
        echo "File is valid, and was successfully uploaded.<br>\n";
        header("Location: ../home.php");
      }
      else {
        header("Location: ../profileSetup.php"); //Message that pic didn't get uploaded
        echo "Nope";
      }
    }
  }
// Possible trouble something something with $_SESSION["id"]
?>
