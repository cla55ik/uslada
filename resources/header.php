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
    <!-- favicon -->
    <link type="image/x-icon" rel="shortcut icon" href="/images/favicon.svg">
    <title><?=$page_title;?></title>


    
  </head>

  <body>
    <!-- Yandex.Metrika counter -->
<script type="text/javascript" >
   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
   m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
   (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

   ym(76215334, "init", {
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true
   });
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/76215334" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
<?php include_once './resources/contact.php';?>




<div class="bg-white fixed-top">


<div class="container pt-2 pb-2">

  <div class="row">
    <div class="col-6 col-lg-3 d-flex flex-wrap justify-content-start align-items-center site-logo">
      <div class="col-4 col-lg-3 p-0">
        <a href="/"><img src="/images/logo-color.svg" alt=""></a>
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
