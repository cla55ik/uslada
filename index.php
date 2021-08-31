
    <?php
    $page_title = "Купить холодец в Воронеже от производителя";
    include_once 'resources/header.php'; ?>

      <header class="header">
        <div class="overlay"></div>
          <div class="container">
            <div class="row">
              <div class="col-12 text-uppercase">
                <h1>БОГАТЫРСКАЯ УСЛАДА</h1>
                <h2>Настоящий холодец <br>от производителя</h2>
              </div>
              <div class="col-12">
                <button class="yellow-button text-uppercase">оптом и в розницу</button>
              </div>
              <div class="col-12 head-icontext">
                <div class="icontext">
                  <span class="icon">
                    <img src="images/01.svg" alt="">
                  </span>
                  <span>Собственное производство</span>
                </div>
                <div class="icontext">
                  <span class="icon">
                    <img src="images/01.svg" alt="">
                  </span>
                  <span>Из свежего мяса</span>
                </div>
              </div>
            </div>

          </div>

        </div>
      </header>


<!--ПОПУЛЯРНЫЕ ПРОДУКТЫ ООП -->
<div class="container popular-products">
  <div class="row">
    <div class="col popular-products-title">
      <h2>Популярные продукты</h2>
    </div>
  </div>



  <?php include_once './resources/products_oop.php';?>

<div class="row">
  <div class="col d-flex flex-wrap justify-content-between">
    <?php while ($row = $array_product->fetch(PDO::FETCH_ASSOC)) : ?>
      <?php extract($row);?>

      <div class="card popular-products-card mb-4 mb-md-0">
        <img src="/images/<?=$prod_img_link;?>.jpg">
        <div class="card-body">
          <h3 class="card-title"><?=$prod_name;?></h3>
          <div class="card-col d-flex flex-wrap justify-content-between align-items-baseline">
            <span class="price">
              <p><?=$prod_price;?>₽</p>
            </span>
            <span class="btn-popular">
              <a href="single-product.php/?id=<?=$prod_id?>" class="btn btn-yellow">Подробнее</a>
            </span>
          </div>
        </div>

      </div>
    <?php endwhile;?>
  </div>
</div>
</div>





      <!-- Текст с преимуществами -->
      <?php include_once 'resources/advantages.php'; ?>
      <div class="container container-padding-60-100">
        <div class="row">
          <div class="col-12">

          </div>
          <div class="col-xl-9 col-sm advantages container align-content-center ">
            <h2>Собственное производство по уникальным рецептам</h2>
            <?php foreach($advantages as $advant) :?>
            <p class="paragraph-20"><?=$advant;?></p>
            <?endforeach;?>

          </div>
          <div class="col-xl-3 col-sm img-div text-center">
            <img src="images/logo-red.jpg" alt="">
          </div>

        </div>

      </div>


      <!-- Доставка бесплатно -->
      <div class="yellow-div">


      <div class="container delivery">
        <div class="row">
          <div class="col-xl-6 col-sm-12 delivery-map">
          <!--  <img src="images/map-little.jpg" alt="">

          -->


          </div>
        <!--ПОдключаем файл с Попапом-->
          <?php include './resources/popup/popup-phone.php';?>
          <div class="col-xl-6 col-sm-12 delivery-yellow text-center text-lg-right">
            <h2 class="text-uppercase">ДОСТАВИМ БЕСПЛАТНО</h2>
            <p class="vrn-txt text-uppercase">ПО ВОРОНЕЖУ</p>
            <p class="delivery-desc">при заказе от 2х кг</p>
            <button class="btn btn-border text-uppercase btn-delivery" type="button" name="btn-delivery" data-toggle="modal" data-target="#popupPhone">узнать
            </button>
          </div>

          </div>

        </div>
        <div class="row d-none d-lg-block">
          <div class="col gazel-img">
            <img class="position-absolute" src="images/gazel.png" alt="">
          </div>

        </div>
      </div>
      </div>

      <!-- Только лучшее мясо  -->
      <div class= "container container-padding-60-100">
        <div class="row">
          <div class="col-xl-9 col-sm advantages container align-content-center ">
            <h2>Только лучшее мясо. Это закон!</h2>
            <p class="paragraph-20">Для производства мы отбираем только самое лучшее и свежее мясо.
              Мы сами закупаем мясо у проверенных фермерсуих хозяйств
              с которыми сотрудничаем уже более 5 лет. </p>
            <p class="paragraph-20">Цикл производства отлажен таким образом, что мясо
              не хранится более 1 дня, и сразу уходит в переработку.</p>
            <p class="paragraph-20">Поэтому мы можем гарантировать отличный вкус и высочайшее
              качество нашего продукта.</p>
          </div>
          <div class="col-xl-3 col-sm img-div text-center">
            <img src="images/meat.jpg" alt="">

          </div>
        </div>
      </div>

      <!-- Цикл производства  -->

      <div class="container production">
        <div class="row title-production">
          <div class="col">
            <h2>Цикл производства</h2>
          </div>
        </div>
    <!-- Цикл производства для Десктопа -->
        <div class="row d-none d-md-block">
          <div class="col d-flex flex-wrap justify-content-between">
            <div class="card card-production border-0">
              <div class="card-body p-0">
                <img class="pb-4" src="images/01.svg" alt="">
                <h3 class="card-title">Привозим мясо </h3>
                <p>Отборное и свежее</p>
              </div>
            </div>
            <div class="card card-production border-0">
              <div class="card-body p-0">
                <img class="pb-4" src="images/02.svg" alt="">
                <h3 class="card-title">Привозим мясо</h3>
                <p>Отборное и свежее</p>
              </div>
            </div>
            <div class="card card-production border-0">
              <div class="card-body p-0">
                <img class="pb-4" src="images/03.svg" alt="">
                <h3 class="card-title">Готовим по рецепту</h3>
                <p>Собственные рецепты приготовления в соответствии с ГОСТ 32784-2014</p>
              </div>
            </div>
            <div class="card card-production border-0">
              <div class="card-body p-0">
                <img class="pb-4" src="images/04.svg" alt="">
                <h3 class="card-title">Упаковываем</h3>
                <p>На собственной линии вакуумной упаковки</p>
              </div>
            </div>
            <div class="card card-production border-0">
              <div class="card-body p-0">
                <img class="pb-4" src="images/05.svg" alt="">
                <h3 class="card-title">Доставляем</h3>
                <p>В удобное для вас время и место</p>
              </div>
            </div>


          </div>

        </div>
    <!-- Цикл производства для Мобильного - Слайдер -->
        <div class="row d-md-none ">
          <div id="carouselCicle" class="carousel slide text-center w-100" data-ride="carousel">
            <div class="carousel-inner">

            <div class="carousel-item active">
              <img src="images/01.svg" alt="">
              <p class="carousel-title">Привозим мясо</p>
              <p class="carousel-text">Отборное и свежее</p>
            </div>
            <div class="carousel-item">
              <img src="images/02.svg" alt="">
              <p class="carousel-title">Проверяем ингредиенты</p>
              <p class="carousel-text">Отборное и свежее</p>
            </div>
            <div class="carousel-item ">
              <img src="images/03.svg" alt="">
              <p class="carousel-title">Готовим по рецепту</p>
              <p class="carousel-text">Собственные рецепты приготовления в соответствии с ГОСТ 32784-2014 </p>
            </div>
            <div class="carousel-item ">
              <img src="images/04.svg" alt="">
              <p class="carousel-title">Упаковываем</p>
              <p class="carousel-text">На собственной линии вакуумной упаковки</p>
            </div>
            <div class="carousel-item ">
              <img src="images/05.svg" alt="">
              <p class="carousel-title">Доставляем</p>
              <p class="carousel-text">В удобное для вас время и место</p>
            </div>
            </div>

            <a href="#carouselCicle" class="carousel-control-prev" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"><</span>
            </a>
            <a href="#carouselCicle" class="carousel-control-next" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true">></span>
            </a>



          </div>
        </div>

      </div>

      <!-- ГОСТ -->


      <div class="container gost-container">
        <div class="row">
          <div class="col gost-title">
            <h2>Вся продукция соответствует ГОСТ</h2>
          </div>
        </div>
        <div class="row">
          <div class="gost-text col-xl-9 col-sm-12 container align-content-center">
            <p>Соответствует ГОСТ проходят СЕРТИФИЦИРОВАНА осмотр,после забоя мясо повторно
              проверяется и направляется на точку реализации.По прибытию мясо подвергается
              ветеринарно-санитарной экспертизе в полном объеме и только после этого допускается в продажу.
              Товар поставляется ежедневно!</p>
            <p>Контроль качества на каждом этапе дварительный ветеринарный осмотр,
                после забоя мясо повторно проверяется и направляется на точку реализации.
                По прибытию мясо подвергается ветеринарно-санитарной экспертизе в полном объеме
                и только после этого допускается в продажу.Товар поставляется ежедневно!</p>
              <p>Санитарная обработка каждые 3 часа предварительный ветеринарный осмотр,
                  после забоя мясо повторно проверяется и направляется на точку реализации.
                  По прибытию мясо подвергается ветеринарно-санитарной экспертизе в полном объеме
                  и только после этого допускается в продажу Заказать холодец в Воронеже по оптовой цене</p>
          </div>
          <div class="gost-img col-xl-3 col-sm-12 d-flex align-items-end">
            <img src="images/gost-img.jpg" alt="">
          </div>
        </div>

      </div>



      <!-- Работать с нами удобно! -->
      <!-- Декорашка -->
      <div class="col">
        <img class="text-center" src="images/ornament.svg" alt="">
      </div>

      <div class="container simply-work">
        <div class="row simply-title">
          <div class="col">
            <h2>Работать с нами удобно!</h2>
          </div>

        </div>
        <div class="row d-none d-md-block">

    <!-- Блок для десктопов, скрыт на мобильных-->
          <div class="col simply-cards-container d-flex justify-content-between">
            <div class="card simply-card border-0">
              <img class="pb-4" src="images/work-01.svg" alt="">
              <p class="text-center">Заказ от 2х кг</p>
            </div>
            <div class="card simply-card border-0">
              <img class="pb-4" src="images/work-02.svg" alt="">
              <p class="text-center">Более 20 видов</p>
            </div>
            <div class="card simply-card border-0">
              <img class="pb-4" src="images/work-03.svg" alt="">
              <p class="text-center">Бесплатная доставка</p>
            </div>
            <div class="card simply-card border-0">
              <img class="pb-4" src="images/work-04.svg" alt="">
              <p class="text-center">Любая оплата</p>
            </div>
            <div class="card simply-card border-0">
              <img class="pb-4" src="images/work-05.svg" alt="">
              <p class="text-center">Скидки</p>
            </div>

          </div>


        </div>
        <!--Карусель для мобильных-->
          <div class="row d-md-none">
            <div class="carousel slide text-center w-100" id="carouselWork" data-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="images/work-01.svg" alt="">
                  <p class="text-center work-carousel-title">Заказ от 2х кг</p>

                </div>
                <div class="carousel-item">
                  <img src="images/work-02.svg" alt="">
                  <p class="text-center work-carousel-title">Более 20 видов</p>

                </div>
                <div class="carousel-item">
                  <img src="images/work-03.svg" alt="">
                  <p class="text-center work-carousel-title">Бесплатная доставка</p>

                </div>
                <div class="carousel-item">
                  <img src="images/work-04.svg" alt="">
                  <p class="text-center work-carousel-title">Любая оплата</p>

                </div>
                <div class="carousel-item">
                  <img src="images/work-05.svg" alt="">
                  <p class="text-center work-carousel-title">Скидки</p>

                </div>
              </div>
              <a class="carousel-control-prev" href="#carouselWork" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon"><</span>
              </a>
              <a class="carousel-control-next" href="#carouselWork" role="button" data-slide="next">
                <span class="carousel-control-next-icon">></span>
              </a>

            </div>



          </div>

      </div>






      <!-- пробный образец -->
      <div class="yellow-col">
      <div class="container">
        <div class="row">
          <div class="col-xl-6 pl-0 pr-0 yellow-col d-flex flex-wrap align-content-center">
            <div class="zakazhite text-uppercase">
              Закажите
            </div>
            <div class="probniy text-uppercase">
              пробный образец
            </div>
            <div class="quality">
              И убедитесь в качестве<br>
нашего продукта!
            </div>
            <button class="btn btn-border text-uppercase btn-delivery" type="button" name="btn-delivery" data-toggle="modal" data-target="#popupPhone">узнать подробнее</button>
          </div>

          <div class="col-xl-6 p-0 tester-img d-none d-md-block">

          </div>
        </div>
      </div>
    </div>

      <!-- Карта -->

      <div class="container map">
        <div class="row">
          <div class="col map-title text-uppercase">
            <h2>С нами работают более 50 магазинов в воронеже</h2>

          </div>
        </div>
        <div class="row">
          <div class="col map-img">
            <img class="img-fluid" src="./images/map.jpg" alt="">
          </div>
        </div>
      </div>


      <!-- Отзывы наших клиентов -->
      <div class="container review-block">
        <div class="row">
          <div class="col">
            <h2 class="review-title">Отзывы наших клиентов</h2>
          </div>

        </div>

        <?php include_once 'resources/reviews.php'; ?> <!-- Подключаем обработчик данных с отзывами -->
        <div class="row">
          <div class="col d-flex flex-wrap justify-content-between">

            <?php foreach ($review_array as $r_name=>$r_text) :?> <!-- Подтягиваем данные Отзывов -->
            <div class="card review-card col-12 col-md-6 p-4">
              <div class="card-body review-card-body">
                <h3 class="card-title"><?=$r_name;?></h3>
                <p class="card-text"><?=$r_text;?></p>

              </div>

            </div>
            <?php endforeach;?>
          </div>
        </div>

      </div>









<!-- Наша команда ООП-->
<?php   include_once './resources/our_team_oop.php'; ?>

<div class="container block">
  <div class="row text-uppercase">
    <div class="col">
        <h2 class="team-title">НАША КОМАНДА</h2>
    </div>

  </div>
  <div class="row">
    <div class="col d-flex flex-wrap justify-content-between">
      <?php while ($row = $array_team->fetch(PDO::FETCH_ASSOC)) :?>
        <?php extract($row);?>
        <div class="card team-card">
          <div class="card-body d-flex flex-wrap justify-content-between">
            <div class="team-img">
                <img class="img-fluid"src="/images/<?=$t_img;?>.jpg" alt="">
            </div>
            <div class="team-info">
              <h3 class="team-name text-uppercase"><?=$t_name;?></h3>
              <p class="team-post"><?=$t_post;?></p>
              <p class="team-text"><?=$t_text;?></p>
              <p class="team-tel"><?=$t_tel;?></p>
            </div>

          </div>
        </div>
<?php endwhile;?>



    </div>

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


    <!-- Подключаем Footer -->


     <?php include_once './resources/footer.php';?>
