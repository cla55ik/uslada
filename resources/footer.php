
<div class="footer-back">
<?php include_once './resources/contact.php';
    //  $site_url=$_SERVER['HTTP_HOST'];
?>

<div class="container footer white-text">
  <div class="row">
    <div class="col-xl-8 col-sm-12">
      <img src="/images/logo-white.svg" alt="">
    </div>
    <div class="col-xl-4 col-sm-12 text-lg-right">
      <div class="footer-phone">
        <a href="tel:<?=$contact['phone'];?>">  <?=$contact['phone'];?></a>
      </div>
      <div class="footer-contact">
        <a href="mailto:<?=$contact['email'];?>">  <?=$contact['email'];?></a>
      </div>
      <div class="footer-contact">
        <?=$contact['address'];?>
      </div>
    </div>
  </div>
  <div class="row footer-data">
    <div class="col-xl-7 col-sm-12 d-flex flex-wrap justify-content-between ip-data">
      <span>© 2021 <?=$contact['ip_name'];?></span>
      <span><?=$contact['ip_inn'];?></span>
      <span><?=$contact['ip_ogrn'];?></span>
      <span>Сайт не является публичной офертой и носит информационный характер.</span>
    </div>
    <div class="policy-div col-xl-5 col-sm-12 d-flex flex-wrap align-items-end justify-content-end">
      <a href="/policy">Политика конфиденциальности</a>
    </div>

  </div>

</div>
</div>










<!-- Optional JavaScript -->
<!-- Popper.js first, then Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<!-- Подключаем jQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- Подключаем Bootstrap JS -->
<script src="js/bootstrap.min.js"></script>



<!--Скрипт FORM send -->
<script src="/js/send-form-phone.js" type="text/javascript"></script>


</body>
</html>
