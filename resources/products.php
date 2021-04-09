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

$query = "SELECT prod_id, prod_name, prod_price, prod_img_link FROM products WHERE prod_vis != 0 LIMIT 3";
if ($result = mysqli_query($conn, $query)) {

    /* извлечение ассоциативного массива */
    while ($row = mysqli_fetch_array($result)) {

          $prod_array[$row['prod_id']] =[$row['prod_name'],$row['prod_price'],$row['prod_img_link']];
    }

    /* удаление выборки */
    mysqli_free_result($result);
}
mysqli_close($conn); // Закрываем соединение


 ?>
