<?php

require_once './resources/header.php'; ?>

<?php
  $id = isset($_GET['id']) ? $_GET['id'] : die('ОШИБКА: отсутствует ID');

  include_once 'config/db_config.php';
  include_once 'objects/product.php';

  $database = new my_DB();
  $db = $database-> getConnect();

  $qurrent_prod = new product($db);

  $qurrent_prod->id = $id;

  $qurrent_prod->readOne();




  $page_title = $qurrent_prod->name;
?>

<div class="container">
  <div class="row product-page-title">


  </div>
  <div class="row">
    <div class="col-xl-6 col-sm-12">
      <img class="img-fluid" src="/images/<?=$qurrent_prod->img?>.jpg" alt="">
    </div>
    <div class="col-xl-6 col-sm-12">
        <h1><?=$qurrent_prod->name;?></h1>
        <span><?=$qurrent_prod->price;?></span>
        <p><?=$qurrent_prod->gost;?></p>
        <p>Состав:</p>
        <p><?=$qurrent_prod->content;?></p>
        <button>Заказать</button>

    </div>

  </div>
  <div class="row">
    <p><?=$qurrent_prod->description;?></p>
  </div>

<?php $array_new = $qurrent_prod->readSimilar();

?>
<div class="row">
  <h2>Похожая продукция</h2>
</div>
<div class="col d-flex flex-wrap justify-content-between">
<?php while ($row = $array_new->fetch(PDO::FETCH_ASSOC)) :?>
  <?php extract($row); ?>

  <div class="card popular-products-card">
    <img src="/images/<?=$prod_img_link;?>.jpg">
    <div class="card-body">
      <h3 class="card-title"><?=$prod_name;?></h3>
      <div class="card-col d-flex flex-wrap justify-content-between align-items-baseline">
        <span class="price">
          <p><?=$prod_price;?>₽</p>
        </span>
        <span class="btn-popular">
          <a href="/single-product.php/?id=<?=$prod_id?>" class="btn btn-yellow">Подробнее</a>
        </span>
      </div>
    </div>

  </div>
<?php endwhile;?>


</div>


</div>
<!-- ЕСТЬ ВОПРОСЫ? -->

<div class="row cta-question-form">
  <div class="col cta-question text-center">
    <h2 class="text-uppercase">ЕСТЬ ВОПРОСЫ?</h2>
    <p class="text-uppercase">с удовольствием ответим</p>
    <?php include_once './resources/form-cta-phone.php'?>
  </div>
  <div class="decoration">
    <img class="text-center" src="images/ornament.svg" alt="">
  </div>
</div>

<?php










  require_once './resources/footer.php';
