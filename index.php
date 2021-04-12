<!doctype html>
<html lang="ru">
  <head>
    <!-- Обязательные метатеги -->
    <meta charset="utf-8">
    <!-- Настройка viewport -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Подключаем Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" >
    <!-- Подключаем Custom CSS -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/footer.css">

    <title>Холодец в Воронеже от производителя</title>
  </head>

  <body>
    <?php include 'resources/header.php'; ?>

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

      <!-- Популярные продукты -->

      <div class="container popular-products">
        <div class="row">
          <div class="col popular-products-title">
            <h2>Популярные продукты</h2>
          </div>
        </div>

        <?php include './resources/products.php'; ?>

        <div class="row">
          <div class="col d-flex flex-wrap justify-content-between">
            <?php foreach ($prod_array as $product=>[$p_name,$p_price,$p_img]) :?>
            <div class="card popular-products-card">
              <img src="/images/<?=$p_img;?>.jpg">
              <div class="card-body">
                <h3 class="card-title"><?=$p_name;?></h3>
                <div class="card-col d-flex flex-wrap justify-content-between align-items-baseline">
                  <span class="price">
                    <p><?=$p_price;?>₽</p>
                  </span>
                  <span class="btn-popular">
                    <button class="btn btn-yellow">Подробнее</button>
                  </span>
                </div>
              </div>

            </div>
          <?php endforeach;?>
          </div>
        </div>
      </div>

      <!-- Текст с преимуществами -->
      <?php include 'resources/advantages.php'; ?>
      <div class="container container-padding-60-100">
        <div class="row">
          <div class="col-12">

          </div>
          <div class="col-xl-9 col-sm advantages container align-content-center ">
            <h2>Собственное производство по уникальным рецептам</h2>
            <?php foreach($advantages as $advant) :?>
            <p class="paragraph-20"><?=$advant;?></p>
            <?endforeach;?>
            <div class="col-12 align-right">
              <button class="text-button" type="button" name="button">Подробнее >></button>
            </div>
          </div>
          <div class="col-xl-3 col-sm">
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
          <div class="col-xl-6 col-sm-12 delivery-yellow text-right">
            <h2 class="text-uppercase">ДОСТАВИМ БЕСПЛАТНО</h2>
            <p class="vrn-txt text-uppercase">ПО ВОРОНЕЖУ</p>
            <p class="delivery-desc">при заказе от 2х кг</p>
            <button class="btn btn-border text-uppercase" type="button" name="button">узнать подробнее</button>
          </div>
        </div>
        <div class="row">
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
          <div class="col-xl-3 col-sm ">
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
        <div class="row">
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
        <div class="row">
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

      </div>






      <!-- пробный образец -->
      <div class="yellow-col">
      <div class="container">
        <div class="row">
          <div class="col-xl-6 pl-0 pr-0 yellow-col container align-content-center">
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
            <button class="btn btn-border text-uppercase" type="button" name="call-to-tester" id="call-to-tester">Заказать</button>
          </div>
          <div class="col-xl-6 p-0 tester-img">

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

        <?php include 'resources/reviews.php'; ?> <!-- Подключаем обработчик данных с отзывами -->
        <div class="row">
          <div class="col d-flex flex-wrap justify-content-between">

            <?php foreach ($review_array as $r_name=>$r_text) :?> <!-- Подтягиваем данные Отзывов -->
            <div class="card review-card">
              <div class="card-body">
                <h3 class="card-title"><?=$r_name;?></h3>
                <p class="card-text"><?=$r_text;?></p>

              </div>

            </div>
            <?php endforeach;?>
          </div>
        </div>

      </div>


      <!--  Наша команда-->

<?php include './resources/our_team.php'; ?>

<div class="container team-block">
  <div class="row">
    <div class="col text-uppercase">
      <h2 class="team-title">Наша команда</h2>
    </div>

  </div>
        <div class="row">
          <div class="col d-flex flex-wrap justify-content-between">
            <?php foreach ($team_array as $team=>[$t_name,$t_post,$t_img, $t_text, $t_tel]):?>
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
          <?php endforeach;?>

            </div>

          </div>

        </div>

      </div>

      <!-- ЕСТЬ ВОПРОСЫ? -->

      <div class="row cta-question-form">
        <div class="col cta-question text-center">
          <h2 class="text-uppercase">ЕСТЬ ВОПРОСЫ?</h2>
          <p class="text-uppercase">с удовольствием ответим</p>
          <form class="form-question" id="cta-question" action="index.html" method="post">
            <input class="phone-num" type="text" name="phone" id="phone" value="" placeholder="+7 908" required>
            <button class="form-submit btn btn-border text-uppercase" type="submit" name="button">Отправить</button>
          </form>
        </div>
        <div class="decoration">
          <img class="text-center" src="images/ornament.svg" alt="">
        </div>
      </div>


    <!-- Подключаем Footer -->

     <?php include './resources/footer.php';?>

    <!-- Optional JavaScript -->
    <!-- Popper.js first, then Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <!-- Подключаем jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Подключаем Bootstrap JS -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
