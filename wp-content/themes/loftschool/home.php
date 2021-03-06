<!DOCTYPE html>
<html lang="ru-RU">
<head>
  <!--meta-->
  <meta charset="UTF-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!--title-->
  <title>Обо мне</title>

  <!--stylesheet-->
  <link rel="stylesheet" href="css/main.css">

  <!--Для старых IE-->
  <!--[if lt IE 9]>
  <p class="chromeframe">Похоже, что ты используешь
    устаревший браузер, друг. Пожалуйста, <a href="http://
browsehappy.com/">скачай новый браузер абсолютно
      бесплатно</a> или <a href="http://www.google.com/
chromeframe/?redirect=true">активируй Google Chrome Frame<a></p>
  <![endif]-->
</head>
<body>

<div class="wrapper wrapper__auth">
  <div id="auth" class="auth animated">
    <div class="auth__top">
      <div class="auth__img">
        <img class="auth-img" width="140" height="140" src="img/content/avatar-max.jpg" alt="Мое фото">
      </div>
      <div class="auth__title">
        Серегин Михаил
      </div>
    </div>
    <div class="auth__bottom">
      <div class="button button_index">
        <a href="<?=get_permalink(13); ?>" class="button__link button__link_index">
          <i class="button__icon"></i>
          <span class="button__title button__title_index">Перейти на сайт</span>
        </a>
      </div>
    </div>
  </div>
</div>
<script src="js/main.js"></script>
</body>
</html>