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
  <link rel="stylesheet" href="/css/main.css">

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
<div class="wrapper">


  <!--header-->
  <header class="header">
    <div class="container clearfix">


      <!--user-->
      <div class="header__left">
        <div class="user header__user">
          <div class="user__img">
            <img width="60" height="60" class="avatar-min" src="<?=get_field('photo', 'option')['url']; ?>"
                 alt="моя аватарка">
          </div>
          <div class="user__title">
            <?=get_field('name', 'option'); ?>
          </div>
        </div>
      </div>


      <!--contacts-->
      <div class="header__right">
        <div class="contacts header__contacts">
          <a href="#" class="contacts__link">
            <div class="contacts__text">Мои контакты</div>
            <i class="contacts__icon fa fa-phone fa-2x"></i>
          </a>
          <div class="contacts__dropdown">
            <div class="contacts__dropdown-tiangle"></div>
            <ul class="contacts__list">
              <li class="contacts__item">
                <a class="contacts__mail"
                   href="mailto:<?=get_field('mail', 'option'); ?>">
                  <i class="contacts__dropdown-icon fa fa-envelope"></i>
                  <div class="contacts__dropdown-text">
                    <?=get_field('mail', 'option'); ?>
                  </div>
                </a>
              </li>
              <li class="contacts__item">
                <a class="contacts__phone"
                   href="tel:<?=get_field('tel', 'option'); ?>">
                  <i class="contacts__dropdown-icon fa fa-phone"></i>
                  <div class="contacts__dropdown-text">
                    <?=get_field('tel', 'option'); ?>
                  </div>
                </a>
              </li>
              <li class="contacts__item">
                <a class="contacts__skype"
                   href="skype:<?=get_field('skype', 'option'); ?>?call">
                  <i class="contacts__dropdown-icon fa fa-skype"></i>
                  <div class="contacts__dropdown-text">
                    <?=get_field('skype', 'option'); ?>
                  </div>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>


    </div>
  </header>
