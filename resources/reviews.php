<?php

include './resources/connect_db.php'; //Подключаем файл с Логином и паролем для подключение к DB

error_reporting(E_ALL); // check all errors
ini_set('display_errors',1); // display errors
$conn = mysqli_connect($host, $user, $password, $db_name);//database connection code
mysqli_query($conn, "SET NAMES 'utf8'");

if (mysqli_connect_errno()) {  // Если не удалось подключиться
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}


$query = "SELECT name, text FROM reviews";
if ($result = mysqli_query($conn, $query)) {

    /* извлечение ассоциативного массива */
    while ($row = mysqli_fetch_assoc($result)) {
      $review_array[$row['name']] = $row['text'];
    }

    /* удаление выборки */
    mysqli_free_result($result);
}
mysqli_close($conn); // Закрываем соединение





?>
