<?php
  include './resources/connect_db.php';

  error_reporting(E_ALL); // check all errors
  ini_set('display_errors',1); // display errors
  $conn = mysqli_connect($host, $user, $password, $db_name);//database connection code
  mysqli_query($conn, "SET NAMES 'utf8'");

  if (mysqli_connect_errno()) {  // Если не удалось подключиться
      printf("Connect failed: %s\n", mysqli_connect_error());
      exit();
  }


  $query = "SELECT id, t_name, t_img, t_post, t_text, t_tel FROM our_team WHERE t_vis != 0";

  if ($result = mysqli_query($conn, $query)) {

      /* извлечение ассоциативного массива */
      while ($row = mysqli_fetch_array($result)) {

            $team_array[$row['id']] =[$row['t_name'],$row['t_post'],$row['t_img'],$row['t_text'],$row['t_tel']];
      }

      /* удаление выборки */
      mysqli_free_result($result);
  }
  mysqli_close($conn); // Закрываем соединение

 ?>
