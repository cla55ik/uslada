<!doctype html>
<html lang="ru">
  <head>
    <!-- Обязательные метатеги -->
    <meta charset="utf-8">
    <!-- Настройка viewport -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Подключаем Bootstrap CSS -->
    <link rel="stylesheet" href="/css/bootstrap.min.css" >
    <!-- Подключаем Custom CSS -->
    <link rel="stylesheet" type="text/css" href="/css/style.css">
    <link rel="stylesheet" type="text/css" href="/css/footer.css">
    <link rel="stylesheet" type="text/css" href="/css/single-prod.css">

    <title><?=$page_title;?></title>
  </head>

  <body>
<?php include_once './resources/contact.php';?>




<div class="bg-white fixed-top">


<div class="container pt-2 pb-2">

  <div class="row">
    <div class="col-6 col-lg-3 d-flex flex-wrap justify-content-start align-items-center">
      <div class="col-4 col-lg-3 p-0">
        <img src="/images/logo-color.svg" alt="">
      </div>
      <div class="col-8 col-lg-9 p-0 logo-header">
        <div class="font-weight-bold">БОГАТЫРСКАЯ УСЛАДА</div>
        <div class="">МЯСНЫЕ ПРОДУКТЫ</div>
      </div>
    </div>
    <div class="col-lg-6  d-none d-md-flex flex-wrap justify-content-end align-items-center">
      <a href="#" class="link-not">
        <div class="icon-text d-inline-flex">
          <img src="/images/check.svg" alt="">
          <p class="m-0 pl-2">заказать</p>
        </div>
      </a>

      <a href="#" class="link-not">
        <div class="icon-text d-inline-flex ml-4">
          <img src="/images/wu.svg" alt="">
          <p class="m-0 pl-2">whatsapp</p>
        </div>
      </a>


      </div>

      <div class="col-6 col-lg-3 text-right">
        <div class="address-header">
          <?=$contact['address'];?>
        </div>
        <div class="phone-header font-weight-bold">
          <a class="link-not" href="tel:<?=$contact['phone'];?>"><?=$contact['phone'];?></a>

        </div>
      </div>
    </div>

  </div>


</div>
</div>
