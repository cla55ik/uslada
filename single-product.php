<?php  require_once './resources/header.php'; ?>

<?php
  $id = isset($_GET['id']) ? $_GET['id'] : die('ОШИБКА: отсутствует ID');

  include_once 'config/db_config.php';
  include_once 'objects/product.php';

  $database = new my_DB();
  $db = $database-> getConnect();

  $qurrent_prod = new product($db);

  $qurrent_prod->id = $id;

  $qurrent_prod->readOne();




  $page_title = "Страница товара";
?>

<div class="">
  <h1><?=$page_title;?></h1>
  <p>Product ID = <?=$id;?></p>
</div>




<?php










  require_once './resources/footer.php';
