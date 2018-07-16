<?php
  if (isset($_POST["id_swiper"]) && isset($_POST["id_swiped"]) && isset($_POST["liked"])) {
    error_log("SWIPE");
    /* GET THE DATA */
    $swiper = $_POST["id_swiper"];
    $swiped = $_POST["id_swiped"];
    $liked = $_POST["liked"];

    /* DATABASE STUFF */
    require_once("dbLogin.php");
    $table = "AOT_swiping";

    /* CHECK IF THERE ALREADY IS A RECORD */
    $sql = "SELECT COUNT(*) AS c FROM $table WHERE (`id_swiper` = '$swiper') AND (`id_swiped` = '$swiped') LIMIT 1";
    $result = mysqli_query($link, $sql);

    while ($data = mysqli_fetch_assoc($result)) {
      $count = $data['c'];
    }

    if ($count == 0) {
      $sql = "INSERT INTO $table (`id_swiper`, `id_swiped`, `liked`) VALUES ('$swiper', '$swiped', '$liked')";
      mysqli_query($link, $sql);
      error_log("DB: Count == 0");
      error_log("DB: $sql");
    }
  }
  else {
    error_log("SWIPE: missing data");
    error_log(print_r($_POST, true));
  }
?>
